@extends('admins.layouts.master')

@section('content')
    <h1>Создать роль</h1>
    <br>
    <form action="{{ route('roles.store') }}" method="post">
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
        <div class="form-group">
            <div class="form-check">
                @foreach($permissions as $permission)
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" name="permissions[]">
                    {{ $permission->display_name }}
                </label><br>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить роль</button>
    </form>

    @include('layouts.errors')

@endsection