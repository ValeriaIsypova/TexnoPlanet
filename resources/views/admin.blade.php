@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Auth::user()->role == 2)
            <h1>This is Admin</h1>
        @else
            <h1>Access is allowed only to the administrator</h1>
        @endif
    </div>
@endsection
