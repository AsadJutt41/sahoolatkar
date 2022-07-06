@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || Cart Checkout ')

@push('style')

<style>
  ul li {
    padding: 2px 7px 0 0;
  }

  .product-img-box img {
    width: 150px;
    height: 150px;
  }

  .checkout-page {}

  .cart-products {}

  .checkout-page .order-sumry {
    background-color: #F5F5F5;
    padding: 12px;
  }

  .checkout-page .order-sumry a {
    background-color: #DB0A0A;
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
        <li><a href="{{route('home')}}"><i class="fas fa-home"></a></i></li>
        <li><a href="{{route('home')}}"> Home </a></li>
        <li><a href="{{route('home')}}"> Cart </a></li>
        <li><a href="{{route('home')}}"> Checkout </a></li>
      </ul>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->
<!-- Start Product Image & Text -->
<div class="container checkout-page ">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">
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
        <h4>Shipping & Billing</h4>
        <h5>Subtotal: Rs. {{ \Cart::getSubTotal() }}</h5>
        <h5>Total: Rs. {{ \Cart::getTotal() }}</h5>
        <a class="btn btn-lg btn-block" href="{{ route('cart.to_pay')}}" role="button">Proceed to Pay</a>

      </div>
    </div>
  </div>

  <!-- <div class="row mt-5">
            cart checkout

            <button><a href="{{route('cart.to_pay')}}">cart checkout</a> </button>
        </div> -->
</div>
<!-- Vertical Tabs Section -->


<!-- <div class="section-6 pb-3" style="margin-top:6rem !important;">
        <div class="container">
            <div class="row bottom-footer">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                <div class="policy-img">
                    <img src="policy_image_03.png" alt="">
                </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection
