@extends('admins.layouts.master')
@section('content')
    <h1>Изменить роль</h1>
    <br>
    <form action="{{ route('roles.update', $role->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Короткое имя</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
        </div>
        <div class="form-group">
            <label for="display_name">Отображаемое имя</label>
            <input type="text" class="form-control" id="display_name" name="display_name" value="{{ $role->display_name }}">
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" rows="3" style="resize: none" name="description" >{{ $role->description }}</textarea>
        </div>
        <div class="form-group">
            <div class="form-check">
                @foreach($permissions as $permission)
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="{{ $permission->id }}" name="permissions[]" {{ \in_array($permission->id, $role_permissions) ? 'checked' : '' }}>
                    {{ $permission->display_name }}
                </label><br>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Обновить роль</button>
    </form>

    @include('layouts.errors')

    <hr>
    @if($role->name!='manager' & $role->name!='admin')
        <form action="{{route('roles.destroy', $role->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    @endif
    <br>

@endsection