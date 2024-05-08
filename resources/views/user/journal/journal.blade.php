@extends('ui.home')

@section('content')

<div class="container p-3">
    @if (session('success'))
        <div class="alert alert-success mt-2 mb-2" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-error mt-2 mb-2" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <h3 class="fw-bold mt-4 m-2">My Journal</h3>
    <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum temporibus consequuntur neque explicabo eos asperiores, delectus blanditiis aperiam ipsum voluptas corrupti, soluta consequatur ullam? Labore numquam voluptate culpa quos maxime?</p>

    <a href="/journal/add" class="m-2 btn btn-success d-flex flex-row btn-normal"><span class="material-symbols-outlined">
        description
        </span>Write new journal</a>


    <div class="d-flex flex-column w-100 mt-4 chat-place gap-2">
        @foreach ($journals as $journal)
            <div class="container w-100 bg-primary rounded-3 p-3">
                <a href="/journal/view/{{ $journal->id }}"><h3 class="text-light">{{ $journal->title }}</h3></a>
                <p class="mb-0">Written on {{ $journal->created_at }}</p>
            </div>
        @endforeach
        
    </div>    
</div>
    
@endsection