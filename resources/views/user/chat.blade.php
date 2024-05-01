@extends('ui.home')

@section('content')
    @livewire('chat')
    @livewireScripts
<script src="{{ asset('js/livewire-chat.js') }}"></script>
@endsection