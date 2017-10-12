@extends('layouts.master')

@section('first-content')
    <div class="jumbotron text-center">
        <div class="container">
            <h1>Поиск по запросу "{{ $searchKey }}"</h1>
            <h4>Количество совпадений - {{ $products->count() }}</h4>
        </div>
    </div>
@endsection

@section('second-content')
    <div style="height: 50px"></div>
    <div class="container-fluid">
        <div class="row">
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
@endsection

