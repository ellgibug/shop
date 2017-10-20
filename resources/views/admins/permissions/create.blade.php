@extends('admins.layouts.master')

@section('content')
    <h1>Создать разрешение</h1>
    <br>
    <form action="{{ route('permissions.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Короткое имя</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="display_name">Отображаемое имя</label>
            <input type="text" class="form-control" id="display_name" name="display_name">
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" rows="3" style="resize: none" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить разрешение</button>
    </form>

    @include('layouts.errors')

@endsection