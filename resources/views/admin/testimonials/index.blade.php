@extends('admin.layout')

@section('title', 'Testimonials')

@section('topbar-action')
  <a class="btn btn-primary" href="{{ route('admin.testimonials.create') }}">Add testimonial</a>
@endsection

@section('content')
  <table class="admin-table">
    <thead><tr><th>Name</th><th>Role</th><th>Quote</th><th>Order</th><th></th></tr></thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ $item->role }}</td>
          <td>{{ \Illuminate\Support\Str::limit($item->quote, 50) }}</td>
          <td>{{ $item->sort_order }}</td>
          <td class="actions">
            <a class="btn btn-sm" href="{{ route('admin.testimonials.edit', $item) }}">Edit</a>
            <form method="POST" action="{{ route('admin.testimonials.destroy', $item) }}" onsubmit="return confirm('Delete this testimonial?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="5" style="color:var(--text-dim);">No testimonials yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
