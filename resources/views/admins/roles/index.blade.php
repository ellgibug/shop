@extends('admins.layouts.master')

@section('content')
    <h1>Роли</h1>
    <br>
    <div class="card bg-light">
        <div class="card-body">
            <a href="{{ route('roles.create') }}">Добавить роль</a>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-sm bg-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Роль</th>
            <th scope="col">Описание</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
        <tr>
            <th scope="row">{{ $role->id }}</th>
            <td><a href="{{ route('roles.show', $role->id) }}">{{ $role->name }}</a></td>
            <td>{{ $role->display_name }}</td>
            <td>
                <a href="{{ route('roles.edit', $role->id) }}">Изменить</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection