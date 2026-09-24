<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function index()
    {
        return view('admin.stats.index', ['items' => Stat::orderBy('sort_order')->get()]);
    }

    public function create()
    {
        return view('admin.stats.form', ['item' => new Stat()]);
    }

    public function store(Request $request)
    {
        Stat::create($this->validated($request));

        return redirect()->route('admin.stats.index')->with('status', 'Stat created.');
    }

    public function edit(Stat $stat)
    {
        return view('admin.stats.form', ['item' => $stat]);
    }

    public function update(Request $request, Stat $stat)
    {
        $stat->update($this->validated($request));

        return redirect()->route('admin.stats.index')->with('status', 'Stat updated.');
    }

    public function destroy(Stat $stat)
    {
        $stat->delete();

        return redirect()->route('admin.stats.index')->with('status', 'Stat deleted.');
    }

    private function validated(Request $request): array
    {
        $data = $request->validate([
            'number' => ['required', 'string', 'max:255'],
            'label' => ['required', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer'],
        ]);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        return $data;
    }
}
