@extends('layouts.master')

@section('second-content')
    <div style="height: 50px"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $product->image }}" alt="{{ $product->title }}" class="img-thumbnail">
            </div>
            <div class="col-md-7">
                <h1>{{ $product->name }}</h1>
                <hr>
                <h4><strong>Категория: </strong>{{ $product->section->name }}</h4>
                <h4><strong>Артикул: </strong>{{ $product->vendor_code }}</h4>
                <h4><strong>Цена: </strong>${{ $product->price }}</h4>
                <br>
                @if($product->availability)
                    <p style="background: greenyellow; width: 75px">В наличии</p>
                @else
                    <p style="background: orangered; width: 100px">Нет в наличии</p>
                @endif
                <br>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis iure molestiae nisi
                    obcaecati quibusdam quo totam! Beatae deserunt eveniet impedit nemo, quae qui quia quis suscipit!
                    Atque, dolores, tempora.
                </p>
                <br>
                @if($product->availability)
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="number" class="form-control" value="1" name="amount" min="1">
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить в корзину</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection