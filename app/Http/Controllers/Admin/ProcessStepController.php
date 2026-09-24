<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProcessStep;
use Illuminate\Http\Request;

class ProcessStepController extends Controller
{
    public function index()
    {
        return view('admin.process-steps.index', ['items' => ProcessStep::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.process-steps.form', ['item' => new ProcessStep()]);
    }

    public function store(Request $request)
    {
        ProcessStep::create($this->validated($request));

        return redirect()->route('admin.process-steps.index')->with('status', 'Process step created.');
    }

    public function edit(ProcessStep $processStep)
    {
        return view('admin.process-steps.form', ['item' => $processStep]);
    }

    public function update(Request $request, ProcessStep $processStep)
    {
        $processStep->update($this->validated($request));

        return redirect()->route('admin.process-steps.index')->with('status', 'Process step updated.');
    }

    public function destroy(ProcessStep $processStep)
    {
        $processStep->delete();

        return redirect()->route('admin.process-steps.index')->with('status', 'Process step deleted.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer'],
        ]);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        return $data;
    }
}
