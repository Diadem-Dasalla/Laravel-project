@extends('layouts.admin')

@section('content')
<h1>Create Post</h1>
<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
