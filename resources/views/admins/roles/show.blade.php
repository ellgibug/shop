@extends('admins.layouts.master')
@section('content')

    <div class="card bg-light">
        <div class="card-body">
            <p><strong>Короткое название: </strong>{{ $role->name }}</p>
            <p><strong>Полное название: </strong>{{ $role->display_name }}</p>
            <p><strong>Описание: </strong>{{ $role->description }}
            <p><strong>Разрешения: </strong>
                <ul>
                    @foreach($role->perms as $perm)
                        <li>{{ $perm->display_name }}</li>
                    @endforeach
                </ul>
            </p>
            <p><strong>Менеджеры: </strong>
            <ul>
{{--                {{ dd($role) }}--}}
                @foreach($role->admins as $admin)
                    <li>{{ $admin->name }}</li>
                @endforeach
            </ul>
            </p>
        </div>
    </div>

    @include('layouts.errors')

@endsection