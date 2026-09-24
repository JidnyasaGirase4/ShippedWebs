@extends('admin.layout')

@section('title', 'Why us')

@section('topbar-action')
  <a class="btn btn-primary" href="{{ route('admin.why-items.create') }}">Add item</a>
@endsection

@section('content')
  <table class="admin-table">
    <thead><tr><th>Title</th><th>Description</th><th>Order</th><th></th></tr></thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td>{{ $item->title }}</td>
          <td>{{ \Illuminate\Support\Str::limit($item->description, 60) }}</td>
          <td>{{ $item->sort_order }}</td>
          <td class="actions">
            <a class="btn btn-sm" href="{{ route('admin.why-items.edit', $item) }}">Edit</a>
            <form method="POST" action="{{ route('admin.why-items.destroy', $item) }}" onsubmit="return confirm('Delete this item?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="4" style="color:var(--text-dim);">No items yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
