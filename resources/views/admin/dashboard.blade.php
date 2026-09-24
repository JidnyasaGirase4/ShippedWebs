@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
  <div class="stat-grid">
    @foreach ($counts as $label => $count)
      <div class="stat-card">
        <div class="num">{{ $count }}</div>
        <div class="label">{{ $label }}</div>
      </div>
    @endforeach
    <div class="stat-card">
      <div class="num">{{ $newEnquiries }}</div>
      <div class="label">New enquiries</div>
    </div>
    <div class="stat-card">
      <div class="num">{{ $newLeads }}</div>
      <div class="label">New leads</div>
    </div>
  </div>

  <div class="card">
    <h2 style="margin-top:0;font-size:16px;">Latest enquiries</h2>
    @if ($latestEnquiries->isEmpty())
      <p style="color:var(--text-dim);">No enquiries yet.</p>
    @else
      <table class="admin-table">
        <thead>
          <tr><th>Name</th><th>Type</th><th>Status</th><th>Received</th><th></th></tr>
        </thead>
        <tbody>
          @foreach ($latestEnquiries as $enquiry)
            <tr>
              <td>{{ $enquiry->name }}</td>
              <td>{{ ucfirst($enquiry->type) }}</td>
              <td><span class="badge badge-{{ $enquiry->status }}">{{ ucfirst($enquiry->status) }}</span></td>
              <td>{{ $enquiry->created_at->diffForHumans() }}</td>
              <td class="actions"><a class="btn btn-sm" href="{{ route('admin.enquiries.show', $enquiry) }}">View</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @endif
    <p style="margin-bottom:0;"><a class="link" href="{{ route('admin.enquiries.index') }}">View all enquiries &rarr;</a></p>
  </div>
@endsection
