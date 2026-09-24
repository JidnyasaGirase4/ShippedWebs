@extends('admin.layout')

@section('title', $item->exists ? 'Edit stat' : 'Add stat')

@section('content')
  <div class="card">
    <form method="POST" action="{{ $item->exists ? route('admin.stats.update', $item) : route('admin.stats.store') }}">
      @csrf
      @if ($item->exists) @method('PUT') @endif

      <div class="form-group">
        <label for="number">Number</label>
        <input type="text" id="number" name="number" value="{{ old('number', $item->number) }}" required>
      </div>
      <div class="form-group">
        <label for="label">Label</label>
        <input type="text" id="label" name="label" value="{{ old('label', $item->label) }}" required>
      </div>
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a class="btn" href="{{ route('admin.stats.index') }}">Cancel</a>
    </form>
  </div>
@endsection
