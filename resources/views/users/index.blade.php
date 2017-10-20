@extends('layouts.master')

@section('second-content')
   <div class="container-fluid">
       <div class="row">
           @component('components.who')
           @endcomponent
           @if(Auth::guard('web')->check())
{{--           @if((Auth::user()->birthday || Auth::user()->sex ||  Auth::user()->city ||  Auth::user()->mobile_phone ||  Auth::user()->rules))--}}
           <h1 class="text-center">Форма регистации</h1>
           <div class="col-md-4 col-md-offset-4 mt-10">
               <form action="{{ route('update-user', Auth::guard('web')->user()->id) }}" method="post">
                   {{ csrf_field() }}
                   {{ method_field('PATCH') }}
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="name*" value="{{ Auth::guard('web')->user()->name }}" name="name" required>
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="surname*" value="{{ Auth::guard('web')->user()->surname }}" name="surname" required>
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="patronymic" value="{{ Auth::guard('web')->user()->patronymic }}" name="patronymic">
                   </div>
                   <hr>
                   <div class="form-group">
                       <input type="date" class="form-control" placeholder="birthday*" value="{{ Auth::guard('web')->user()->birthday }}" name="birthday" required>
                   </div>
                   <div class="form-group">
                       Пол*:
                       <label class="radio-inline">
                           <input type="radio" name="sex" id="male" value="m" {{ Auth::guard('web:)->ser()->sex == 'm' ? 'checked' : '' }} required> Мужской
                       </label>
                       <label class="radio-inline">
                           <input type="radio" name="sex" id="female" value="f" {{ Auth::guard('web:)->ser()->sex == 'f' ? 'checked' : '' }}> Женский
                       </label>
                   </div>
                   <hr>
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="city*" value="{{ Auth::guard('web')->user()->city }}" name="city" required>
                   </div>
                   <div class="form-group">
                       <textarea class="form-control" rows="3" style="resize: none" name="address" placeholder="address">{{ Auth::guard('web')->user()->address }}</textarea>
                   </div>
                   <hr>
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="mobile phone*" value="{{ Auth::guard('web')->user()->mobile_phone }}" name="mobile_phone" required>
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="optional phone" value="{{ Auth::guard('web')->user()->optional_phone }}" name="optional_phone">
                   </div>
                   <div class="form-group">
                       <input type="text" class="form-control" placeholder="home phone" value="{{ Auth::guard('web')->user()->home_phone }}" name="home_phone">
                   </div>
                   <hr>
                   <div class="form-group">
                       <div class="checkbox">
                           <label>
                               <input type="checkbox" value="1" name="rules" {{ Auth::guard('web')->user()->rules ? 'checked' : '' }} required>
                               Согласен с правилами
                           </label>
                       </div>
                       <div class="checkbox">
                           <label>
                               <input type="checkbox" value="1" name="dispatch" {{ Auth::guard('web')->user()->dispatch ? 'checked' : '' }}>
                               Согласен с рассылкой
                           </label>
                       </div>
                   </div>
                   <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Оправить форму</button>
                   </div>
               </form>
           </div>
           {{--@endif--}}
           @endif
       </div>
   </div>
@endsection

