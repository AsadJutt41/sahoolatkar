@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || COLLECTION ')
<meta name="csrf-token" content="{{ csrf_token() }}">
@push('style')
<style>
    .product-img-box img {
        width: 150px;
        height: 150px;
    }
    .zoom {
        transition: transform .4s; /* Animation */
      }

      .zoom:hover {
        transform: scale(1.3);
      }

</style>
@endpush
@section('main-content')

    <!-- Start Breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-12">
            <ul class="breadcrumb">
                <li><a href="#"><i class="fas fa-home"></a></i></li>
                <li><a href="#"> Home Appliances </a></li>
                <li>Microwave</li>
            </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Title and filter btns -->
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-3 col-md-3 col-sm-12">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                   <h3 class="product-title">Microwave</h3>
                </div>
                <div class="col-lg-4 col-md-4  col-sm-12 filter-btns">
                  <p>Sort By Price</p>
                    <div class="dropdown">
                        <a href="#" class="btn-promat dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Low to High <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2" id="lowtohigh">
                            @foreach ($lowtohightpriceproduct as $lowtohigh)
                             <li> <a class="dropdown-item" href="#" clickid="{{$lowtohigh->price}}">Rs {{$lowtohigh->price}}</a>  </li>
                            @endforeach
                        </ul>
                    </div>
                    <p>Sort By</p>
                    <div class="dropdown">
                        <a href="#" class="btn-promat dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Product <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                <hr>
                </div>
            </div>
        </div>
    <!-- End Title and filter btns -->
    <!-- Sidebar and Products -->
    <div class="container collection-page">
        <div class="row">
            <div class="col-md-3">
                <h3 class="mb-4">Product Filter</h3>
                <div id="slider"></div>
                <div id="price"  class="mt-4 pricee"></div>

                <hr>
                <div class="dropdown mt-5 d-grid gap-2 ">
                    <a class="btn-promat dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false" style="text-align: left;">
                    Brands <i class="fa fa-caret-down" aria-hidden="true" style="position: absolute;right: 17px;"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="selecbrand">
                        @foreach ($brands as $brand)
                        <li><a class="dropdown-item" href="#" clickedbrnad="{{$brand->name}}">{{$brand->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                <div class="dropdown d-grid gap-2 mt-5">
                    <a class="btn-promat dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false" style="text-align: left;">
                    Product Color <i class="fa fa-caret-down" aria-hidden="true" style="position: absolute;right: 17px;"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <hr>
                <button type="button" class="btn btn-light btn-lg mt-4" style="background-color: #F5F5F5;">FILTER</button>
            </div>
            <div class="col-md-9">
                <div class="mb-3">
                    <div class="row" id="brandsproducts">
                        @php
                        $x=1;
                        @endphp
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-4 col-sm-12 pt-3 productsectionbox product-box@php echo $x; @endphp" productprice="{{$product->price}}" >
                            <div class="box-shadow">
                                <div class="product-img-box">
                                    <img src="{{asset('backend/product/'.$product->photo)}}" alt="product_image" class="img-fluid zoom">
                                </div>
                                <div class="product-title">
                                    <h3>{{$product->title}}</h3>
                                </div>
                                <div class="start-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="product-price">
                                    <h3> Rs {{$product->price}} </h3>
                                    <del>{{$product->discount}}</del>
                                </div>
                                <div class="product-btn d-flex">
                                    <div class="add-to-cart">
                                        <button><i class="fa-solid fa-cart-shopping"></i> <a href="{{route('single.product',$product->slug)}}"> Add to cart </a></button>
                                    </div>
                                    <div class="product-fav">
                                    <button><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="product-imp">
                                    </div>
                                </div>
                            </div>
                        </div>
                         @php
                             $x++;
                         @endphp

                        @endforeach
                    </div>

                </div>
                @if ($products->hasPages())
                    <div class="pagination-wrapper">
                        {{ $products->links() }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row ">
            <div class="col-12 pt-5">
                <h3 class="related-product">LASTEST PRODUCTS</h3>
            </div>
            <hr style="width: 98%; margin-left: 12px;">
        </div>
        <div class="row  mb-5">
            @foreach ($latestestproduct as $product)
            <div class="col-lg-3 col-md-3 col-sm-12 product-box">
                <div class="box-shadow">
                    <div class="product-img-box">
                        <img src="{{asset('backend/product/'.$product->photo)}}" alt="product_image"  class="img-fluid zoom">
                    </div>
                    <div class="product-title">
                        <h3>{{$product->title}}</h3>
                    </div>
                    <div class="start-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="product-price">
                        <h3> Rs {{$product->price}} </h3>
                        <del>{{$product->discount}}</del>
                    </div>
                    <div class="product-btn d-flex">
                        <div class="add-to-cart">
                            <button><i class="fa-solid fa-cart-shopping"></i> <a href="{{route('single.product',$product->slug)}}"> Add to cart </a></button>
                        </div>
                        <div class="product-fav">
                        <button><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                        </div>
                        <div class="product-imp">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(".pro_add_cart").click(function() {
        Swal.fire({
              title: 'Please Wait',
              background:'#b3d4dbb6',
              allowEscapeKey: false,
              allowOutsideClick: false,
              didOpen: () => {
                Swal.showLoading()
              }
        });
        var prod_id = $(this).val();
        $.ajax({
            type: "get",
            url: "{{route('add.cart')}}",
            data: {prod_id:prod_id},
            success: function(response)
            {
                Swal.hideLoading()
                if (response=="exist") {
                    Swal.fire({
                        title: 'Product already exists in cart',
                        toast:true,
                        position: 'top-end',
                        background:'#b3d4dbb6',
                        iconColor:'#1EB2A6',
                        timerProgressBar: true,
                        icon: 'warning',
                        showConfirmButton: false,
                        timer: 5000
                        })
                }
                else if(response=="success") {
                    Swal.fire({
                            title: 'Product added succssfully in cart',
                            toast:true,
                            position: 'top-end',
                            background:'#b3d4dbb6',
                            iconColor:'#1EB2A6',
                            timerProgressBar: true,
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 5000
                    })
                }
            }
            });
        });
        $('#lowtohigh li a').click(function(event){
            var mytext = $(event.currentTarget).attr('clickid');
            var atrr = $(".productsectionbox").length;
            $(".productsectionbox").hide();
            for(var x = 1; x <= atrr; x++)
            {
                var boxclass=".product-box"+x;
                var boxattr=$(boxclass).attr("productprice");
                if(boxattr <= mytext){
                    var hh = '[productprice = "'+boxattr+'"]';
                    $(hh).show();
                }
            }
        });

        $('#selecbrand li a').click(function(event){
          var brandvalue = $(event.currentTarget).attr('clickedbrnad');
            $.ajax({
                url: "{{route('brand.product')}}",
                type: 'get',
                data: {
                    brandvalue : brandvalue,
                },
                success:function(data){
                    console.log('success');
                    $("#brandsproducts").html(data)
                },
                error: function(data) {
                    console.log('error');
                }
            });
        });
    </script>
     <script>
    $(document).ready(function () {
        var maxx = {{$maxprice}};
        var minn = {{$minprice}};
        $('#slider').slider({
            min: minn, max: maxx, step: 5, range: true, values: [100, 300],
            slide: function (event, ui) {
            $('#price').html('Price: ' + '&#8360; ' + '<span id="min-price">' + ui.values[0] + '</span>' + " - " + '&#8360; ' + '<span id="max-price"> '+ ui.values[1]+'</span>');
            },
        });
        });

        $("#slider").click(function() {
            var maxprice = $('#max-price').html();
            var minprice = $('#min-price').html();
            $.ajax({
                url: "{{route('filter.product')}}",
                type: 'get',
                data: {
                    maxprice : maxprice, minprice:minprice,
                },
                success:function(data){
                    console.log('success');
                    $("#brandsproducts").html(data)
                },
                error: function(data) {
                    console.log('error');
                }
            });
         });
  </script>
@endpush
@push('scripts')
<script>
$(document).ready(function(){

    $(".all").click(function(){
  $(".product-format").show();
});

$(".product-vertical-tabs .tab button").click(function(event){
    // var mytext = $('.vendors-vertical-tabs .tab button').text();
    var mytext=$(event.currentTarget).attr('clickid');
if(mytext=="All")
{
    $(".product-format").show();
}

else{
    var variable="."+mytext;
$(".product-format").css('display','none');
    $(variable).css('display','block');
}



});



});
</script>
@endpush

