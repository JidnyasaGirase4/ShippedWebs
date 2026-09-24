@extends('admin.layout')

@section('title', 'Leads')

@section('content')
  <table class="admin-table">
    <thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>What they do</th><th>Status</th><th>Received</th><th></th></tr></thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td>{{ $item->first_name }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->phone ? $item->country_code.' '.$item->phone : '—' }}</td>
          <td>{{ $item->whatYouDoLabel() }}</td>
          <td><span class="badge badge-{{ $item->status }}">{{ ucfirst($item->status) }}</span></td>
          <td>{{ $item->created_at->diffForHumans() }}</td>
          <td class="actions">
            <a class="btn btn-sm" href="{{ route('admin.leads.show', $item) }}">View</a>
            <form method="POST" action="{{ route('admin.leads.destroy', $item) }}" onsubmit="return confirm('Delete this lead?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="7" style="color:var(--text-dim);">No leads yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
