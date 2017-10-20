<div class="col-6 col-md-2 sidebar-offcanvas" id="sidebar">
    <div class="list-group bg-light">
        {{--<a href="#" class="list-group-item">Пользователи</a>--}}
        {{--<a href="#" class="list-group-item">Менеджеры</a>--}}
        <a href="{{ route('managers.index') }}" class="list-group-item">Менеджеры</a>
        <a href="{{ route('roles.index') }}" class="list-group-item">Роли</a>
        <a href="{{ route('permissions.index') }}" class="list-group-item">Разрешения</a>
    </div>
</div><!--/span-->