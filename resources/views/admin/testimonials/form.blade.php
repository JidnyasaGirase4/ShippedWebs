@extends('admin.layout')

@section('title', $item->exists ? 'Edit testimonial' : 'Add testimonial')

@section('content')
  <div class="card">
    <form method="POST" action="{{ $item->exists ? route('admin.testimonials.update', $item) : route('admin.testimonials.store') }}">
      @csrf
      @if ($item->exists) @method('PUT') @endif

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $item->name) }}" required>
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <input type="text" id="role" name="role" value="{{ old('role', $item->role) }}">
      </div>
      <div class="form-group">
        <label for="quote">Quote</label>
        <textarea id="quote" name="quote" required>{{ old('quote', $item->quote) }}</textarea>
      </div>
      <div class="form-group">
        <label for="avatar_letter">Avatar letter</label>
        <input type="text" id="avatar_letter" name="avatar_letter" maxlength="2" value="{{ old('avatar_letter', $item->avatar_letter) }}">
      </div>
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a class="btn" href="{{ route('admin.testimonials.index') }}">Cancel</a>
    </form>
  </div>
@endsection
