@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel">
            <div class="panel-body">
                <p>{{$user->name}}</p>
                <p>{{$user->email}}</p>
            </div>
        </div>
    </div>
@endsection