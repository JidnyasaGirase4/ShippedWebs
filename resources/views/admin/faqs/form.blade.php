@extends('admin.layout')

@section('title', $item->exists ? 'Edit FAQ' : 'Add FAQ')

@section('content')
  <div class="card">
    <form method="POST" action="{{ $item->exists ? route('admin.faqs.update', $item) : route('admin.faqs.store') }}">
      @csrf
      @if ($item->exists) @method('PUT') @endif

      <div class="form-group">
        <label for="question">Question</label>
        <input type="text" id="question" name="question" value="{{ old('question', $item->question) }}" required>
      </div>
      <div class="form-group">
        <label for="answer">Answer</label>
        <textarea id="answer" name="answer">{{ old('answer', $item->answer) }}</textarea>
      </div>
      <div class="form-group">
        <label for="sort_order">Sort order</label>
        <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a class="btn" href="{{ route('admin.faqs.index') }}">Cancel</a>
    </form>
  </div>
@endsection
