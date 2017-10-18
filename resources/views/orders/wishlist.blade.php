@extends('layouts.master')

@section('second-content')
    <div style="height: 50px"></div>
    <div class="container-fluid">
        <h1 class="text-center">Wish List</h1>
        <div class="">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th class="text-center">Название</th>
                        <th class="text-center">Цена</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cartItems as $cartItem)
                    <tr>
                        <td><a href="{{ route('product-single', $cartItem->id) }}">{{ $cartItem->name }}</a></td>
                        <td>${{ $cartItem->price }}</td>
                        <td>
                            <form action="{{ route('destroy-wishlist', $cartItem->rowId) }}" method="post">
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
                        <td colspan="3" class="text-center"><h3>Wish List is empty</h3></td>
                    </tr>
                    @endforelse
                    <tfoot>
                    <tr>
                        <td>{{ $numberOfWishlistItems }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tfoot>
                </tbody>
            </table>
        </div>
    </div>
@endsection

