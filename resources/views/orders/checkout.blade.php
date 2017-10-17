@extends('layouts.master')

@section('second-content')
    <div style="height: 50px"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @guest
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Авторизация</h3>
                        </div>
                        <div class="panel-body">
                            <p>Уже есть аккаунт или хотите его создать? Нажмите <a href="#" role="button" data-toggle="modal" data-target="#myModal">здесь</a>.</p>
                            <p>Продолжить как <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">гость</a>.</p>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="row">
                                        <h1 class="text-center">Быстрый заказ</h1>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="email*" value="" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="name*" value="" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="surname*" value="" name="surname" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="patronymic" value="" name="patronymic">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" class="form-control" placeholder="birthday*" value="" name="birthday" required>
                                            </div>
                                            <div class="form-group">
                                                Пол*:
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="male" value="m" required> Мужской
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="sex" id="female" value="f"> Женский
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="1" name="dispatch" checked>
                                                        Согласен с рассылкой
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="1" name="rules" checked required>
                                                        Согласен с правилами
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="mobile phone*" value="" name="mobile_phone" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="optional phone" value="" name="optional_phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="home phone" value="" name="home_phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="city*" value="" name="city" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="6" style="resize: none" name="address" placeholder="address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center"> <button type="submit" class="btn btn-primary">Сохранить</button></p>

                                </form>
                            </div>
                        </div>
                    </div>
                @endauth

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Доставка</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            Самовывоз
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Служба доставки
                                        </label>
                                    </div>
                                    <textarea class="form-control" rows="3" placeholder="комментарий к заказу" style="resize: none"></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Оплата</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Способ оплаты</p>
                                <p>Способ оплаты</p>
                                <p>Способ оплаты</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('success')}}" role="button" class="btn btn-primary btn-lg pull-right">Подтвердить заказ</a>

            </div>
        </div>
    </div>
@endsection