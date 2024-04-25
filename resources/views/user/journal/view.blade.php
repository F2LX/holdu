@extends('ui.home')

@section('content')
    <div class="container mt-5">
        @if (session('success'))
    <div class="alert alert-success mt-1 mb-4" role="alert">
        {{ session('success') }}
    </div>
@endif
        <h3 class="fw-bold">View Journal</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatem nobis quo repudiandae voluptates excepturi modi, sunt perferendis? Quaerat fuga reiciendis magnam deleniti fugit ipsam quos ipsum. Aliquam officiis et vero sint numquam praesentium? Officia tempore ducimus odit pariatur perferendis?</p>
        <form action="/journal/view/put/{{ $journal->id }}" method="post">
          @csrf
          @method('put')
        <h3 class="fw-bold">Journal Title</h3>
        <div class="input-group mb-3">
            <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $journal->title }}" required>
          </div>
        <h3 class="fw-bold">Content</h3>
        <div class="input-group">
            <textarea class="text-area rounded-4 p-3" name="content" aria-label="With textarea" required>{{ $journal->content }}</textarea>
          </div>
        <button type="submit" class="btn btn-success mt-4">Update</button>
        </form>

        <form action="/journal/delete/{{ $journal->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mt-2 mb-2">
                Delete
            </button>
        </form>
    </div>
@endsection