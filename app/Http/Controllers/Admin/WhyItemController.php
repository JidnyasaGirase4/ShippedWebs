<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhyItem;
use Illuminate\Http\Request;

class WhyItemController extends Controller
{
    public function index()
    {
        return view('admin.why-items.index', ['items' => WhyItem::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.why-items.form', ['item' => new WhyItem()]);
    }

    public function store(Request $request)
    {
        WhyItem::create($this->validated($request));

        return redirect()->route('admin.why-items.index')->with('status', 'Item created.');
    }

    public function edit(WhyItem $whyItem)
    {
        return view('admin.why-items.form', ['item' => $whyItem]);
    }

    public function update(Request $request, WhyItem $whyItem)
    {
        $whyItem->update($this->validated($request));

        return redirect()->route('admin.why-items.index')->with('status', 'Item updated.');
    }

    public function destroy(WhyItem $whyItem)
    {
        $whyItem->delete();

        return redirect()->route('admin.why-items.index')->with('status', 'Item deleted.');
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
