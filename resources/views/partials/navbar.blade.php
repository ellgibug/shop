<ul class="nav nav-tabs border-0">
    <li role="presentation"><a href="/">ГЛАВНАЯ</a></li>
    <li role="presentation"><a href="{{ route('page2') }}">{{ __('front.page', ['number' => 2]) }}</a></li>
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{ __('front.language') }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ url('language/en') }}">English</a></li>
            <li><a href="{{ url('language/ru') }}">Русский</a></li>
            <li><a href="{{ url('language/az') }}">Azərbaycan</a></li>
        </ul>
    </li>
    @auth
    <li role="presentation" class="dropdown pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('home') }}">Профиль</a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
    @endauth
    @guest
    <li role="presentation" class="pull-right"><a href="#" role="button" data-toggle="modal" data-target="#myModal">Вход</a></li>
    @endguest
    <li role="presentation" class="pull-right"><a href="{{ route('wishlist') }}">Wishlist</a></li>
    <li role="presentation" class="pull-right"><a href="{{ route('cart') }}">Cart <span class="badge">{{ Cart::instance('shopping')->count() }}</span></a></li>
    <li role="presentation" class="pull-right">
        <form class="form-inline" style="margin-top:6px" action="{{ route('search') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="search" placeholder="Поиск">
            </div>
        </form>
    </li>
</ul>

@guest
    <!-- Modal -->
    <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{--<h4 class="modal-title" id="myModalLabel">Modal title</h4>--}}
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-justified">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <div class="container-fluid" style="margin-top: 20px">
                                <form method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="e-mail" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </form>
                                @include('layouts.errors')
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="register">
                            <div class="container-fluid" style="margin-top: 20px">
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="name" name="name">
                                    </div>
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" class="form-control" placeholder="surname">--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="e-mail" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password confirmation" name="password_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </form>
                                @include('layouts.errors')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endguest

@section('scripts')
    <script>
        $(document).ready(function(){

        })
    </script>
@endsection