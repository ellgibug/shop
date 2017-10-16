@extends('layouts.master')

@section('second-content')
    <div style="height: 50px"></div>
    <div class="container-fluid">
        <h1 class="text-center">Shopping cart</h1>
        <div class="">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="text-center">Название</th>
                        <th class="text-center">Цена</th>
                        <th class="text-center">Количество</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cartItems as $cartItem)
                    <tr>
                        <td><a href="{{ route('product-single', $cartItem->id) }}">{{ $cartItem->name }}</a></td>
                        <td>${{ $cartItem->price }}</td>
                        <td>
                            <form class="form-inline" action="{{ route('update-cart', $cartItem->rowId) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <input type="number" class="form-control" value="{{ $cartItem->qty }}" name="amount" min="1" style="max-width: 80px">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('destroy-cart', $cartItem->rowId) }}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <div class="form-group row">
                                    <button type="submit" class="btn-link"><i class="glyphicon glyphicon-remove"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center"><h3>Корзина пуста</h3></td>
                    </tr>
                    @endforelse
                    <tfoot>
                    <tr>
                        <td></td>
                        <td>${{ Cart::subtotal() }}</td>
                        <td>{{ Cart::count() }}</td>
                        <td></td>
                    </tr>
                    </tfoot>
                </tbody>
            </table>
            <a href="{{ route('checkout') }}" role="button" class="btn btn-primary btn-lg pull-right">Checkout</a>
        </div>
    </div>
@endsection

