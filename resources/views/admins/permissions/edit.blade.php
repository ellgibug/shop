@extends('admins.layouts.master')
@section('content')
    <h1>Изменить разрешение</h1>
    <br>
    <form action="{{ route('permissions.update', $permission->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label for="name">Короткое имя</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}">
        </div>
        <div class="form-group">
            <label for="display_name">Отображаемое имя</label>
            <input type="text" class="form-control" id="display_name" name="display_name" value="{{ $permission->display_name }}">
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" rows="3" style="resize: none" name="description" >{{ $permission->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Обновить разрешение</button>
    </form>

    @include('layouts.errors')

    <hr>
{{--    @if($role->name!='manager' & $role->name!='admin')добавить условия на удаление--}}
        <form action="{{route('permissions.destroy', $permission->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    {{--@endif--}}
    <br>

@endsection