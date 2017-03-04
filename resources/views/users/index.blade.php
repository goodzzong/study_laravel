@extends('layouts.app')

@section('content')
    <div class="container">
        {{--
        @forelse( $users as $user)
            <div>
                {{ $user->email }}
            </div>
        @empty
            NO data.
        @endforelse
        --}}

        @each("users.list-item",$users,"user","users.empty")
    </div>
@endsection