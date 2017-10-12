@extends('layouts.master')

@section('first-content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1>{{ $section->name }} </h1>
        </div>
    </div>
@endsection

@section('second-content')
<div style="height: 50px"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('products-list', $section->id) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="price">Цена</label>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="от" name="minPrice" value="{{request()->get('minPrice')}}">
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" placeholder="до" name="maxPrice" value="{{request()->get('maxPrice')}}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="isAvailable" value="1" {{request()->get('isAvailable') == 1 ? 'checked' : ''}}> В наличии
                            </label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="price">Сортировать по</label>
                            <select class="form-control" name="sortBy">
                                <option value="1">По умолчанию</option>
                                <option value="2" {{request()->get('sortBy') == 2 ? 'selected' : ''}}>По возрастанию цены</option>
                                <option value="3" {{request()->get('sortBy') == 3 ? 'selected' : ''}}>По убыванию цены</option>
                            </select>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block">Применить</button>
                    </form>
                    <br>
                    <a href="{{ route('products-list', $section->id) }}" role="button" class="btn btn-default btn-block">Сбросить</a>
                </div>
            </div>
        </div>
        <div class="col-md-10" id="place">
            @forelse($products->chunk(4) as $chunk)
                @foreach($chunk as $product)
                    <div class="col-sm-6 col-md-3 text-center">
                        <div class="thumbnail">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}">
                            <div class="caption">
                                <h3>{{ $product->name }}</h3>
                                @if($product->availability)
                                    <p style="background: greenyellow">В наличии</p>
                                @else
                                    <p style="background: orangered">Нет в наличии</p>
                                @endif
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="#" class="btn btn-primary btn-block" role="button">${{ $product->price }}</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="{{ route('product-single', $product->id) }}" class="btn btn-default btn-block" role="button">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @empty
                <p class="lead text-center" style="margin-top: 20px">Продукты не найдены</p>
            @endforelse
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">{{ $products->links() }}</div>
        </div>
    </div>
</div>
@endsection

{{--@section('scripts')--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$('input[name=minPrice]').change(function () {--}}
                {{--$.ajax({--}}
                    {{--url: '{{ route('products-list', $section->id) }}',--}}
                    {{--url: '{{ route('filter') }}',--}}
                    {{--data: {--}}
                        {{--'section_id': '{{ $section->id }}',--}}
                        {{--'minPrice': $(this).val(),--}}
                    {{--},--}}
                    {{--success: function (response) {--}}
                        {{--alert(response)--}}
                    {{--}--}}
                {{--})--}}
            {{--})--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}