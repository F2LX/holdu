@extends('ui.home')

@section('content')
    <div class="container mt-5">
        @if (session('success'))
    <div class="alert alert-success mt-1 mb-4" role="alert">
        {{ session('success') }}
    </div>
@endif
        <h3 class="fw-bold">View Journal</h3>
        <p>Enhance your journaling experience with these simple tips: Allocate regular time for writing, prioritizing authenticity and honesty in your reflections. Focus on capturing the present moment. Remember, perfection isn't the goal; rather, embrace the process of self-discovery and growth within the pages of your journal.</p>
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