@extends('ui.home')

@section('content')
    <div class="container mt-5">
        <h3 class="fw-bold">Create a new Journal</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatem nobis quo repudiandae voluptates excepturi modi, sunt perferendis? Quaerat fuga reiciendis magnam deleniti fugit ipsam quos ipsum. Aliquam officiis et vero sint numquam praesentium? Officia tempore ducimus odit pariatur perferendis?</p>

        <h3 class="fw-bold">Journal Title</h3>
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
        <h3 class="fw-bold">Content</h3>
        <div class="input-group">
            <textarea class="text-area rounded-4" aria-label="With textarea"></textarea>
          </div>
        <button class="btn btn-success mt-4">Post</button>
    </div>
@endsection