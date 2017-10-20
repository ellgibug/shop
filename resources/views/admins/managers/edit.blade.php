@extends('admins.layouts.master')
@section('content')
    <h1>Изменить данные менеджера</h1>
    <br>
    <form action="{{ route('managers.update', $admin->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Короткое имя</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $admin->name }}">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="ip_address">IP адрес</label>
            <input type="text" class="form-control" id="ip_address" name="ip_address" value="{{ $admin->ip_address }}">
        </div>
        <div class="form-group">
            <div class="form-check">
                @foreach($roles as $role)
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="{{ $role->id }}" name="roles[]" {{ \in_array($role->id, $admin_roles) ? 'checked' : '' }}>
                    {{ $role->display_name }}
                </label><br>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>

    @include('layouts.errors')

    <hr>
{{--    @if($role->name!='manager' & $role->name!='admin')--}}
        <form action="{{route('managers.destroy', $admin->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    {{--@endif--}}
    <br>

@endsection