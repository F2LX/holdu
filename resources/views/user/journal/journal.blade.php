@extends('ui.home')

@section('content')

<div class="container">
    @if (session('success'))
    <div class="alert alert-success mt-2 mb-2" role="alert">
        {{ session('success') }}
    </div>
@endif
    <h3 class="fw-bold mt-4">My Journal</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum temporibus consequuntur neque explicabo eos asperiores, delectus blanditiis aperiam ipsum voluptas corrupti, soluta consequatur ullam? Labore numquam voluptate culpa quos maxime?</p>

    <a href="/journal/add" class="btn btn-success d-flex flex-row btn-normal"><span class="material-symbols-outlined">
        description
        </span>Write new journal</a>


    <div class="d-flex flex-column w-100 mt-4 chat-place gap-2">
        @foreach ($journals as $journal)
            <div class="container w-100 bg-primary rounded-3 p-3">
                <a href=""><h3 class="mb-0">{{ $journal->title }}</h3></a>
                <p class="mb-0">Written on {{ $journal->created_at }}</p>
            </div>
        @endforeach
        
    </div>    
</div>
    
@endsection