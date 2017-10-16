{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container-fluid">--}}
        {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="/">Brand</a>--}}
        {{--</div>--}}

        {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
        {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
            {{--<ul class="nav navbar-nav">--}}
                {{--<li><a href="/page2">{{ __('front.page', ['number' => 2]) }}</a></li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('front.language') }} <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{ url('language/en') }}">English</a></li>--}}
                        {{--<li><a href="{{ url('language/ru') }}">Русский</a></li>--}}
                        {{--<li><a href="{{ url('language/az') }}">Azərbaycan</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li><a href="#">Link</a></li>--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="#">Action</a></li>--}}
                        {{--<li><a href="#">Another action</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div><!-- /.navbar-collapse -->--}}
    {{--</div><!-- /.container-fluid -->--}}
{{--</nav>--}}


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
            Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Action</a></li>
        </ul>
    </li>
    @endauth
    @guest
    <li role="presentation" class="pull-right"><a href="#" role="button" data-toggle="modal" data-target="#myModal">Enter</a></li>
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
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="e-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="register">
                            <div class="container-fluid" style="margin-top: 20px">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="surname">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="e-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endguest

@section('scripts')



@endsection