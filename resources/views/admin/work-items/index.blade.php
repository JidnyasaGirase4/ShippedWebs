@extends('admin.layout')

@section('title', 'Work')

@section('topbar-action')
  <a class="btn btn-primary" href="{{ route('admin.work-items.create') }}">Add work item</a>
@endsection

@section('content')
  <table class="admin-table">
    <thead><tr><th>Title</th><th>Category</th><th>Live</th><th>Order</th><th></th></tr></thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td>{{ $item->title }}</td>
          <td>{{ $item->category }}</td>
          <td>{{ $item->is_live ? 'Yes' : 'No' }}</td>
          <td>{{ $item->sort_order }}</td>
          <td class="actions">
            <a class="btn btn-sm" href="{{ route('admin.work-items.edit', $item) }}">Edit</a>
            <form method="POST" action="{{ route('admin.work-items.destroy', $item) }}" onsubmit="return confirm('Delete this work item?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="5" style="color:var(--text-dim);">No work items yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
