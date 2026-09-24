@extends('admin.layout')

@section('title', 'Enquiries')

@section('content')
  <table class="admin-table">
    <thead><tr><th>Name</th><th>Type</th><th>Contact</th><th>Status</th><th>Received</th><th></th></tr></thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ ucfirst($item->type) }}</td>
          <td>{{ $item->email ?: $item->phone }}</td>
          <td><span class="badge badge-{{ $item->status }}">{{ ucfirst($item->status) }}</span></td>
          <td>{{ $item->created_at->diffForHumans() }}</td>
          <td class="actions">
            <a class="btn btn-sm" href="{{ route('admin.enquiries.show', $item) }}">View</a>
            <form method="POST" action="{{ route('admin.enquiries.destroy', $item) }}" onsubmit="return confirm('Delete this enquiry?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="6" style="color:var(--text-dim);">No enquiries yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
