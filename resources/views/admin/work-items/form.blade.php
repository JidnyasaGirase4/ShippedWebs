@extends('admin.layout')

@section('title', $item->exists ? 'Edit work item' : 'Add work item')

@section('content')
  <div class="card">
    <form method="POST" action="{{ $item->exists ? route('admin.work-items.update', $item) : route('admin.work-items.store') }}" enctype="multipart/form-data">
      @csrf
      @if ($item->exists) @method('PUT') @endif

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $item->title) }}" required>
      </div>
      <div class="form-group">
        <label for="category">Category</label>
        <input type="text" id="category" name="category" value="{{ old('category', $item->category) }}">
      </div>
      <div class="form-group">
        <label for="url">URL</label>
        <input type="text" id="url" name="url" value="{{ old('url', $item->url) }}" required>
      </div>
      <div class="form-group">
        <label for="display_url">Display URL</label>
        <input type="text" id="display_url" name="display_url" value="{{ old('display_url', $item->display_url) }}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description">{{ old('description', $item->description) }}</textarea>
      </div>
      <div class="form-group">
        <label for="tags">Tags (comma separated)</label>
        <input type="text" id="tags" name="tags" value="{{ old('tags', $item->tags) }}">
      </div>
      <div class="form-group">
        <label for="screenshot_file">Screenshot</label>
        @if ($item->exists && $item->screenshot)
          <p style="margin:0 0 8px;"><img src="{{ $item->screenshot_url }}" alt="" style="max-width:200px;border-radius:8px;border:1px solid var(--border);"></p>
        @endif
        <input type="file" id="screenshot_file" name="screenshot_file" accept="image/*">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" id="is_live" name="is_live" value="1" {{ old('is_live', $item->is_live ?? true) ? 'checked' : '' }}>
        <label for="is_live" style="margin:0;">Live</label>
      </div>
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a class="btn" href="{{ route('admin.work-items.index') }}">Cancel</a>
    </form>
  </div>
@endsection
