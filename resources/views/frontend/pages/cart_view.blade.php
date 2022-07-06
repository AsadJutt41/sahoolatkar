@extends('frontend.layouts.master')
@section('title', ' SAHOOLATHKAAR || Cart View ')

@push('style')
<style>
    ul li {
        padding: 2px 7px 0 0;
    }

    .product-img-box img {
        width: 150px;
        height: 150px;
    }

    .cart-view-page {}

    .cart-view-page .select-items {
        background-color: #F5F5F5;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .cart-view-page .select-items a {
        text-decoration: none;
        color: #DB0A0A;
    }

    .cart-products {}

    .cart-view-page .order-sumry {
        background-color: #d6c9c9;
        padding: 12px;
    }

    .cart-view-page .order-sumry a {
        background-color: #DB0A0A;
        color: #fff;
    }

    .cart-view-page .order-sumry a:hover {
        color: #fff;
    }
</style>
@endpush
@section('main-content')

<!-- Start Breadcrumb -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></a></i></li>
                <li><a href="{{ route('home') }}"> Home </a></li>
                <li><a href="{{ route('home') }}"> Cart View </a></li>
                <li> </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<!-- Start Product Image & Text -->
<div class="container cart-view-page">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row select-items">
                <div class="col-3"> <span>({{ \Cart::getContent()->count() }} ITEM)</span>
                </div>
                <div class="col-7"></div>
                <div class="col-2"><a href="{{ route('cart.clear') }}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></div>
            </div>

            <div class="row cart-products my-3">
                @foreach ($cardItem as $item)
                <div class="col-lg-4 col-md-4 col-sm-12"><img src="{{asset('frontend/sofa-imp.png')}}" alt="" style="max-width: 50%;"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>{{ $item->name }}</h2>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <h3>Rs. {{ $item->price }}</h3>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="order-sumry">
                <h4>Order Summary</h4>
                <h5>Subtotal: Rs. {{ \Cart::getSubTotal() }}</h5>
                <h5>Total: Rs. {{ \Cart::getTotal() }}</h5>

                @php
                    $cartvalue = \Cart::getSubTotal();
                @endphp

                @if($cartvalue < 1)
                <div class="alert alert-warning">
                    <strong>Sorry!</strong> No Product Found.
                </div>
                @else
                    <a class="btn btn-lg btn-block" href="{{ route('cart.checkout')}}" role="button">Proceed to Checkout</a>
                @endif


            </div>
        </div>
    </div>
</div>
<!-- Vertical Tabs Section -->


@endsection

