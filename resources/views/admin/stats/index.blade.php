@extends('admin.layout')

@section('title', 'Stats')

@section('topbar-action')
  <a class="btn btn-primary" href="{{ route('admin.stats.create') }}">Add stat</a>
@endsection

@section('content')
  <table class="admin-table">
    <thead><tr><th>Number</th><th>Label</th><th>Order</th><th></th></tr></thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td>{{ $item->number }}</td>
          <td>{{ $item->label }}</td>
          <td>{{ $item->sort_order }}</td>
          <td class="actions">
            <a class="btn btn-sm" href="{{ route('admin.stats.edit', $item) }}">Edit</a>
            <form method="POST" action="{{ route('admin.stats.destroy', $item) }}" onsubmit="return confirm('Delete this stat?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="4" style="color:var(--text-dim);">No stats yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
