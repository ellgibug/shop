@extends('admins.layouts.master')

@section('content')
    <h1>Добавить менеджера</h1>
    <br>
    <form action="{{ route('managers.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="ip_address">IP адрес</label>
            <input type="text" class="form-control" id="ip_address" name="ip_address">
        </div>
        <div class="form-group">
            <div class="form-check">
                @foreach($roles as $role)
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="{{ $role->id }}" name="roles[]">
                    {{ $role->display_name }}
                </label><br>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

    @include('layouts.errors')

@endsection