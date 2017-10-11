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
                    <form>
                        <div class="form-group">
                            <label for="price">Цена</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="от">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="до">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> В наличии
                            </label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="price">Сортировать по</label>
                            <select class="form-control">
                                <option>По умолчанию</option>
                                <option>По возрастанию цены</option>
                                <option>По убыванию цены</option>
                            </select>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-default">Применить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            @forelse($section->products->chunk(4) as $chunk)
                @foreach($chunk as $product)
                    <div class="col-sm-6 col-md-3 text-center">
                        <div class="thumbnail">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}">
                            <div class="caption">
                                <h3>{{ $product->name }}</h3>
                                @if($product->availability)
                                    <p>В наличии</p>
                                @else
                                    <p>Нет в наличии</p>
                                @endif
                                <p>
                                    <a href="#" class="btn btn-default btn-block" role="button">${{ $product->price }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @empty
                Продуктов не найдено
            @endforelse
        </div>
    </div>
</div>
@endsection