@extends('admins.layouts.master')

@section('content')
    <h1>Разрешения</h1>
    <br>
    <div class="card bg-light">
        <div class="card-body">
            <a href="{{ route('permissions.create') }}">Добавить разрешение</a>
        </div>
    </div>
    <br>
    <table class="table table-bordered table-sm bg-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Разрешение</th>
            <th scope="col">Описание</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
                <th scope="row">{{ $permission->id }}</th>
                <td>{{ $permission->name }}</td>
                <td>
                    {{ $permission->display_name }}
                    <p class="small">{{ $permission->description }}</p>
                </td>
                <td>
                    <a href="{{ route('permissions.edit', $permission->id) }}">Изменить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection