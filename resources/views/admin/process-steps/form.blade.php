@extends('admin.layout')

@section('title', $item->exists ? 'Edit process step' : 'Add process step')

@section('content')
  <div class="card">
    <form method="POST" action="{{ $item->exists ? route('admin.process-steps.update', $item) : route('admin.process-steps.store') }}">
      @csrf
      @if ($item->exists) @method('PUT') @endif

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $item->title) }}" required>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description">{{ old('description', $item->description) }}</textarea>
      </div>
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a class="btn" href="{{ route('admin.process-steps.index') }}">Cancel</a>
    </form>
  </div>
@endsection
