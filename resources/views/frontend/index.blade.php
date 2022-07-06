@extends('frontend.layouts.master')
@section('title',' Sahoolathkaar || HOME PAGE')
@section('main-content')
<div class="section-1 py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="img-0">
            <img src=" {{asset('frontend/img-0.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="img-1">
            <img src="{{asset('frontend/img-1.png')}}" alt="">
          </div>
            <div class="img-2">
            <img src="{{asset('frontend/img-2.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

<section class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3">
                <div class="heading_0">
                    <h2>Shop By Brand</h2>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="customer-logos slider">
                    @foreach ($brand_lists as $brand)
                    <div class="slide-in-right slide">
                        @if($brand->photo)
                        <img src="{{asset('backend/vendor/'.$brand->photo)}}" alt="{{$brand->photo}}" height="75" width="75">
                        @else
                            <img src="{{asset('frontend/united.png')}}" alt="Kinderhotel Aschauerhof" height="75" width="75">
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
  </div>
        </div>
      </div>
    </div>
  </section>

  <section class="trigger section gutter-horizontal bg-gray gutter-vertical--m gutter-horizontal py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3">
                <div class="heading_1">
                    <h2>Shop By Category</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="customer-logos slider">
                    @foreach ($category_lists as $category)
                        <div class="slide-in-right slide">
                            @if($category->photo)
                                <img src="{{asset('backend/category/'.$category->photo)}}" class="img-fluid" style="max-width:80px" alt="category-image" height="75" width="75">
                            @else
                                <img src="{{asset('frontend/refregrator.png')}}" class="img-fluid" height="75" width="75" alt="avatar.png">
                            @endif
                                </a>
                                <p>{{$category->title}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  </section>
  <div class="section-2 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-0">
            <h2 class="text-uppercase">Featured Product</h2>
          </div>
        </div>
        <div class="col-lg-12 slide-tab">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($category_product_lists as $key => $category)
                <div @if($key+1 == 1) class="carousel-item  active " @else class="carousel-item"  @endif>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button @if($key+1 == 1) class="nav-link active" @else class="nav-link " @endif id="{{$key}}" data-bs-toggle="tab" data-bs-target="{{$key}}" type="button" role="tab" aria-controls="home" aria-selected="true">{{$category->name}}</button>
                        </li>
                    </ul>
                    <div class="tab-content py-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key}}">
                            <div class="row home-page">
                                @foreach($category->products as $product)
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="product-img">
                                            <img src="{{asset('frontend/vivo-y21.png')}}" alt="">
                                        </div>
                                        <div class="product-title">
                                        <h3>
                                            {{ $product->title }}
                                        </h3>
                                        </div>
                                        <div class="start-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="product-price">
                                            <h3> {{ $product->price }} </h3>
                                            <del> {{ $product->price }} </del>
                                        </div>
                                        <div class="product-btn d-flex">
                                            <div class="add-to-cart">
                                            <button><i class="fa-solid fa-cart-shopping"></i><a href="{{route('single.product', $product->slug)}}">Add to cart</a></button>
                                            </div>
                                            <div class="product-fav">
                                            <button><i class="fa-regular fa-heart"></i></button>
                                            </div>
                                            <div class="product-imp">
                                            </div>
                                        </div>
                                    </div>
                                    @if($loop->iteration % 4 == 0)
                                    </div></div>
                                    <div class="tab-pane fade" id="{{$product->id}}" role="tabpanel" aria-labelledby="{{$product->id}}"><div class="row home-page">
                                    @endif
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>

                @endforeach

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
      </div>
    </div>
  </div>

  {{--  big sale section  --}}
  <div class="section-3 py-4 mb-3">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="bg-banner">
            <img src="{{asset('frontend/v2-banner-home.png')}}" alt="">
            </div>
        </div>
        </div>
    </div>
  </div>

  {{--  hot category section  --}}
  <div class="section-4 py-4">
    <div class="container">
      <div class="row row-0">
        <div class="col-lg-12">
          <div class="heading-1">
            <h2 class="">Hot Categories</h2>
          </div>
        </div>
      </div>
      <div class="row row-1 py-1 flex-col">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="cat-pro">
            <h3>Seater Royal Sofa</h3>
            <button><a href="#">View More</a></button>
          </div>
          <div class="cat-pro-img">
            <img src="{{asset('frontend/sofa-imp.png')}}" alt="">
          </div>
        </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ">
          <div class="cat-pro">
            <h3>Seater Royal Sofa</h3>
            <button><a href="#">View More</a></button>
          </div>
          <div class="cat-pro-img">
            <img src="{{asset('frontend/sofa-imp.png')}}" alt="">
          </div>
        </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ">
          <div class="cat-pro">
            <h3>Seater Royal Sofa</h3>
            <button><a href="#">View More</a></button>
          </div>
          <div class="cat-pro-img">
            <img src="{{asset('frontend/sofa-imp.png')}}" alt="">
          </div>
        </div>
      </div>
           <div class="row row-1 py-1 flex-col">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="cat-pro">
            <h3>Seater Royal Sofa</h3>
            <button><a href="#">View More</a></button>
          </div>
          <div class="cat-pro-img">
            <img src="{{asset('frontend/sofa-imp.png')}}" alt="">
          </div>
        </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="cat-pro">
            <h3>Seater Royal Sofa</h3>
            <button><a href="#">View More</a></button>
          </div>
          <div class="cat-pro-img">
            <img src="{{asset('frontend/sofa-imp.png')}}" alt="">
          </div>
        </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="cat-pro">
            <h3>Seater Royal Sofa</h3>
            <button><a href="#">View More</a></button>
          </div>
          <div class="cat-pro-img">
            <img src="{{asset('frontend/sofa-imp.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  {{--  free delivery section  --}}
  <div class="section-5 py-5">
    <div class="container">
      <div class="row row-0">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="delivery">
            <div class="icons">
              <img src="{{asset('frontend/truck.svg')}}">

            </div>
            <div class="dev-txt">
              <h3>Free Delivery & shipping</h3>
              <p>For all order over 20,000</p>
            </div>

          </div>
        </div>
          <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="delivery">
            <div class="icons">
              <img src="{{asset('frontend/100%.svg')}}">
            </div>
            <div class="dev-txt">
              <h3>Return Warranty</h3>
              <p>If you're not satisfied'</p>
            </div>

          </div>
        </div>
          <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="delivery">
            <div class="icons">

              <img src="{{asset('frontend/Headest.svg')}}">
            </div>
            <div class="dev-txt">
              <h3>24/7 Help & <br>Support</h3>
              <p>Anytime & anywhere youre</p>
            </div>

          </div>
        </div>
          <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="delivery">
            <div class="icons">
              <img src="{{asset('frontend/gift box.svg')}}">
            </div>
            <div class="dev-txt">
              <h3>Member Gifts</h3>
              <p>Discount coupons weekends</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

