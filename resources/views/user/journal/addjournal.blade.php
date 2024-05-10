@extends('ui.home')

@section('content')
    <div class="container mt-5">
        <h3 class="fw-bold">Create a new Journal</h3>
        <p>Enhance your journaling experience with these simple tips: Allocate regular time for writing, prioritizing authenticity and honesty in your reflections. Focus on capturing the present moment. Remember, perfection isn't the goal; rather, embrace the process of self-discovery and growth within the pages of your journal.</p>
        <form action="/journal/add/post" method="post">
          @csrf
        <h3 class="fw-bold">Journal Title</h3>
        <div class="input-group mb-3">
            <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
          </div>
        <h3 class="fw-bold">Content</h3>
        <div class="input-group">
            <textarea class="text-area rounded-4 p-3" name="content" aria-label="With textarea" required></textarea>
          </div>
        <button type="submit" class="btn btn-success mt-4">Post</button>
        </form>
    </div>
@endsection