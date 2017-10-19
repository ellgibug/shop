@extends('layouts.master')

@section('first-content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Главная страница</h1>
            @component('components.who')
            @endcomponent
        </div>
    </div>
@endsection

