<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class EnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        if ($request->filled('_gotcha')) {
            return $this->respond($request, 'Thanks — we got your message.');
        }

        if ($request->input('type') === 'booking') {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255'],
                'phone' => ['required', 'string', 'max:32'],
                'budget' => ['nullable', 'string', 'max:255'],
                'details' => ['nullable', 'string'],
                'requested_date' => ['nullable', 'string', 'max:255'],
                'requested_time' => ['nullable', 'string', 'max:255'],
                'timezone' => ['nullable', 'string', 'max:255'],
            ]);
            $data['type'] = 'booking';
        } else {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'contact_value' => ['required', 'string', 'max:255'],
                'project_type' => ['nullable', 'string', 'max:255'],
                'details' => ['nullable', 'string'],
            ]);

            $contact = $data['contact_value'];
            unset($data['contact_value']);
            $data[str_contains($contact, '@') ? 'email' : 'phone'] = $contact;
            $data['type'] = 'contact';
        }

        Enquiry::create($data);

        return $this->respond($request, 'Thanks — we got your message.');
    }

    private function respond(Request $request, string $message): RedirectResponse|JsonResponse
    {
        if ($request->expectsJson()) {
            return response()->json(['ok' => true]);
        }

        return back()->with('status', $message);
    }
}
