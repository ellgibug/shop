@extends('admins.layouts.master')

@section('content')
    <h1>Менеджеры</h1>
    <br>
    <div class="card bg-light">
        <div class="card-body">
            <a href="{{ route('managers.create') }}">Добавить менеджера</a>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-sm bg-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">E-mail</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
        <tr>
            <th scope="row">{{ $admin->id }}</th>
            <td><a href="{{ route('managers.show', $admin->id) }}">{{ $admin->name }}</a></td>
            <td>{{ $admin->email }}</td>
            <td>
                <a href="{{ route('managers.edit', $admin->id) }}">Изменить</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection