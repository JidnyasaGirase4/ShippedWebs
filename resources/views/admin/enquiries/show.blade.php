@extends('admin.layout')

@section('title', 'Enquiry from ' . $item->name)

@section('content')
  <div class="card" style="margin-bottom:20px;">
    <table class="admin-table" style="border:none;">
      <tbody>
        <tr><th style="width:160px;">Name</th><td>{{ $item->name }}</td></tr>
        <tr><th>Type</th><td>{{ ucfirst($item->type) }}</td></tr>
        <tr><th>Email</th><td>{{ $item->email ?: '—' }}</td></tr>
        <tr><th>Phone</th><td>{{ $item->phone ?: '—' }}</td></tr>
        <tr><th>Project type</th><td>{{ $item->project_type ?: '—' }}</td></tr>
        <tr><th>Budget</th><td>{{ $item->budget ?: '—' }}</td></tr>
        @if ($item->type === 'booking')
          <tr><th>Requested date</th><td>{{ $item->requested_date }} {{ $item->requested_time }} ({{ $item->timezone }})</td></tr>
        @endif
        <tr><th>Details</th><td>{{ $item->details ?: '—' }}</td></tr>
        <tr><th>Received</th><td>{{ $item->created_at->format('d M Y, H:i') }}</td></tr>
      </tbody>
    </table>
  </div>

  <div class="card">
    <h2 style="margin-top:0;font-size:16px;">Status</h2>
    <form method="POST" action="{{ route('admin.enquiries.update', $item) }}" style="display:flex;gap:10px;align-items:end;">
      @csrf @method('PUT')
      <div class="form-group" style="margin-bottom:0;">
        <label for="status">Status</label>
        <select id="status" name="status" style="padding:9px 12px;border-radius:8px;border:1px solid var(--border);background:var(--bg);color:var(--text);">
          @foreach (['new', 'contacted', 'closed'] as $status)
            <option value="{{ $status }}" {{ $item->status === $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

  <p style="margin-top:20px;"><a class="link" href="{{ route('admin.enquiries.index') }}">&larr; Back to enquiries</a></p>
@endsection
