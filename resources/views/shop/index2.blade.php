@extends('layouts.master')

@section('first-content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1>{{ __('front.page', ['number' => 2]) }} </h1>
            <p class="lead">{{ __('front.text') }} 2</p>
        </div>
    </div>
@endsection