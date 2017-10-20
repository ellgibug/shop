@extends('admins.layouts.master')
@section('content')

    <div class="card bg-light">
        <div class="card-body">
            <p><strong>ФИО: </strong>{{ $admin->name }}</p>
            <p><strong>Е-mail: </strong>{{ $admin->email }}</p>
            <p><strong>IP адрес: </strong>{{ $admin->ip_address }}
            <p><strong>Роли: </strong>
                <ul>
                    @foreach($admin->roles as $role)
                        <li>{{ $role->display_name }}</li>
                    @endforeach
                </ul>
            </p>
            {{--<p><strong>Менеджеры: </strong>--}}
            {{--<ul>--}}
                {{--{{ dd($role) }}--}}
                {{--@foreach($role->users as $admin)--}}
                    {{--<li>{{ $admin->name }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
            {{--</p>--}}
        </div>
    </div>

    @include('layouts.errors')

@endsection