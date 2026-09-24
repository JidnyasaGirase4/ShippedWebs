<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkItem;
use Illuminate\Http\Request;

class WorkItemController extends Controller
{
    public function index()
    {
        return view('admin.work-items.index', ['items' => WorkItem::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.work-items.form', ['item' => new WorkItem()]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['screenshot'] = $this->handleUpload($request) ?? null;

        WorkItem::create($data);

        return redirect()->route('admin.work-items.index')->with('status', 'Work item created.');
    }

    public function edit(WorkItem $workItem)
    {
        return view('admin.work-items.form', ['item' => $workItem]);
    }

    public function update(Request $request, WorkItem $workItem)
    {
        $data = $this->validated($request);
        $upload = $this->handleUpload($request);
        if ($upload) {
            $data['screenshot'] = $upload;
        }

        $workItem->update($data);

        return redirect()->route('admin.work-items.index')->with('status', 'Work item updated.');
    }

    public function destroy(WorkItem $workItem)
    {
        $workItem->delete();

        return redirect()->route('admin.work-items.index')->with('status', 'Work item deleted.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
            'display_url' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'tags' => ['nullable', 'string', 'max:255'],
            'is_live' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);
        $data['is_live'] = $request->boolean('is_live');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        return $data;
    }

    private function handleUpload(Request $request): ?string
    {
        if (! $request->hasFile('screenshot_file')) {
            return null;
        }

        return $request->file('screenshot_file')->store('work-items', 'public');
    }
}
