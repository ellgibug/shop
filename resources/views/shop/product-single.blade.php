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
                <h4><strong>Брэнд: </strong>{{ $product->brand }}</h4>
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
                    <form class="form-inline" action="{{ route('add-product-to-cart', $product->id) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="number" class="form-control" value="1" name="amount" min="1">
                        </div>
                        <button type="submit" class="btn btn-primary">Добавить в корзину</button>
                    </form>
                @endif
            </div>
        </div>

{{--        @if($product->feature == null)--}}
        <hr>
        <h4 class="text-center">Доступные товары</h4>
            @foreach($product->subProducts->chunk(6) as $chunk)
                @foreach($chunk as $subProduct)
                    <div class="col-md-2 text-center">
                        <div></div>
                        <img src="{{ $subProduct->image }}" alt="{{ $subProduct->name }}" class="img-thumbnail">
                        <h4>{{ $subProduct->name }}</h4>
                        <p>{{ $subProduct->vendor_code }}</p>
                        @if($subProduct->availability)
                            <p style="background: greenyellow">В наличии</p>
                        @else
                            <p style="background: orangered">Нет в наличии</p>
                        @endif
                        <p><strong>${{ $subProduct->price }}</strong></p>
                        @if($subProduct->availability)
                            <form action="{{ route('add-product-to-cart', $subProduct->id) }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="number" class="form-control" value="1" name="amount" min="1">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Добавить в корзину</button>
                                </div>
                            </form>
                        @endif
                    </div>
                @endforeach
            @endforeach
        {{--@endif--}}
    </div>
@endsection








{{--INSERT INTO `shop`.`products` (`section_id`, `brand`, `name`, `availability`, `vendor_code`, `image`, `price`, `feature`) VALUES ('20', '4', 'помада блестящая', '1', '12345', 'http://99px.ru/sstorage/56/2014/12/image_560612140958149942639.jpg', '114', '89');--}}
{{--INSERT INTO `shop`.`products` (`section_id`, `brand`, `name`, `availability`, `vendor_code`, `image`, `price`, `feature`) VALUES ('20', '4', 'помада матовая', '1', '12345', 'http://odin.ya1.ru/uploads/posts/2012-03/1331519666_1329001736_1-13.jpg', '114', '89');--}}

