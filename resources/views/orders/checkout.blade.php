@extends('layouts.master')

@section('second-content')
    <div class="container-fluid">
        <div class="row">
            @if(Auth::check())
                User
                @else
            Guest
                @endif
        </div>
    </div>
@endsection