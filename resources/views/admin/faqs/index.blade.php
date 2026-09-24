@extends('admin.layout')

@section('title', 'FAQs')

@section('topbar-action')
  <a class="btn btn-primary" href="{{ route('admin.faqs.create') }}">Add FAQ</a>
@endsection

@section('content')
  <table class="admin-table">
    <thead><tr><th>Question</th><th>Answer</th><th>Order</th><th></th></tr></thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td>{{ $item->question }}</td>
          <td>{{ \Illuminate\Support\Str::limit($item->answer, 60) }}</td>
          <td>{{ $item->sort_order }}</td>
          <td class="actions">
            <a class="btn btn-sm" href="{{ route('admin.faqs.edit', $item) }}">Edit</a>
            <form method="POST" action="{{ route('admin.faqs.destroy', $item) }}" onsubmit="return confirm('Delete this FAQ?');">
              @csrf @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="4" style="color:var(--text-dim);">No FAQs yet.</td></tr>
      @endforelse
    </tbody>
  </table>
@endsection
