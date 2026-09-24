@extends('admin.layout')

@section('title', 'Services')

@section('topbar-action')
  <a class="btn btn-primary" href="{{ route('admin.services.create') }}">Add service</a>
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
            <a class="btn btn-sm" href="{{ route('admin.services.edit', $item) }}">Edit</a>
            <form method="POST" action="{{ route('admin.services.destroy', $item) }}" onsubmit="return confirm('Delete this service?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="4" style="color:var(--text-dim);">No services yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
