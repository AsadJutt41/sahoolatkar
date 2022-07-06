@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || WOOD-CREATIONS ')
@section('main-content')

<!-- Start Breadcrumb -->
<div class="container">
<div class="row">
    <div class="col-12">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fas fa-home"></a></i></li>
            <li>Vendors</li>
          </ul>
    </div>
</div>
</div>
<!-- End Breadcrumb -->
<!-- Start Title and btns -->
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12">

</div>
<div class="col-lg-6 col-md-6 col-sm-12" style="align-self: flex-end;">
    <h3 class="product-title">Wood Creations</h3>

</div>
<div class="col-lg-3 col-md-3  col-sm-12 wood-txt-btan">
    <p>Manufacturer of wooden furniture</p>
    <button type="button" class="btn btan">Need Customize Furniture? Click Here</button>

  </div>
 </div>
 <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12"></div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <hr>
      </div>
    </div>
</div>
<!-- End Title and btns -->
<!-- Sidebar and Products -->
<div class="container">
<div class="row mt-5">
    <div class="col-lg-3 col-md-3 col-sm-12 filter-sidebar dropdown-arrow">
        <h3 class="pb-4">Product Filter</h3>
        <div id="slider"></div>
        <div id="price" class="pt-4"></div>
        <hr>
        <form>
            <div class="checkbox">
                <input type="checkbox" value="">
              <label>Unacategorized (1)</label>

            </div>
            <div class="checkbox">
             <input type="checkbox" value="">
              <label>Kitchen (1)</label>
            </div>

          <div class="dropdown d-grid gap-2 mt-4 woodropdown">
            <a class="btn-promat dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-align: left;">
              <input type="checkbox" value=""><label>Living Room (22)</label> <i class="fa fa-caret-down" aria-hidden="true" style="position: absolute;right: 17px;" ></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#"><input type="checkbox" value=""><label>Living Room (22)</label></a></li>
              <li><a class="dropdown-item" href="#"><input type="checkbox" value=""><label>Living Room (22)</label></a></li>
              <li><a class="dropdown-item" href="#"><input type="checkbox" value=""><label>Living Room (22)</label></a></li>
            </ul>
          </div>
          <div class="dropdown d-grid gap-2 mt-4 woodropdown">
            <a class="btn-promat dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-align: left;">
              <input type="checkbox" value=""><label>Wooden Furniture (66)</label> <i class="fa fa-caret-down" aria-hidden="true" style="position: absolute;right: 17px;" ></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#"><input type="checkbox" value=""><label>Wooden Furniture (66)</label></a></li>
              <li><a class="dropdown-item" href="#"><input type="checkbox" value=""><label>Wooden Furniture (66)</label></a></li>
              <li><a class="dropdown-item" href="#"><input type="checkbox" value=""><label>Wooden Furniture (66)</label></a></li>
            </ul>
          </div>
          <div class="dropdown d-grid gap-2 mt-4">
            <hr>
            <a class="btn-promat dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="text-align: left;">
              Product Material <i class="fa fa-caret-down" aria-hidden="true" style="position: absolute;right: 17px;" ></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>

        </form>
          <button type="button" class="btn filter-btn btn-lg mt-4">FILTER</button>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 product-box">
      <div class="box-shadow">
        <div class="product-img-box">
        <img src="wood-one.png" alt="">
      </div>
      <div class="product-title">
        <h3>led tv rack</h3>
      </div>
      <div class="start-rating">
        <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
      </div>
      <div class="product-price">
        <h3>Rs 11,800 </h3>
      </div>
   <div class="product-btn d-flex">
        <div class="add-to-cart">
        <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
      </div>
      <div class="product-fav">
        <button><i class="fa-solid fa-heart"></i></button>
      </div>
      <div class="product-imp">

      </div>
   </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 product-box">
  <div class="box-shadow">
    <div class="product-img-box">
    <img src="wood-two.png" alt="" >
  </div>
  <div class="product-title">
    <h3>Myrtle Setti</h3>
  </div>
  <div class="start-rating">
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
  </div>
  <div class="product-price">
    <h3>Rs 11,800 </h3>
  </div>
<div class="product-btn d-flex">
    <div class="add-to-cart">
    <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
  </div>
  <div class="product-fav">
    <button><i class="fa-solid fa-heart"></i></button>
  </div>
  <div class="product-imp">

  </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 product-box">
    <div class="box-shadow">
    <div class="product-img-box">
    <img src="wood-three.png" alt="">
  </div>
  <div class="product-title">
    <h3>Parsley LED/TV Rack</h3>
  </div>
  <div class="start-rating">
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
  </div>
  <div class="product-price">
    <h3>Rs 11,800 </h3>
  </div>
<div class="product-btn d-flex">
    <div class="add-to-cart">
    <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
  </div>
  <div class="product-fav">
    <button><i class="fa-solid fa-heart"></i></button>
  </div>
  <div class="product-imp">

  </div>
</div>
</div>
</div>
</div>
<div class="row mt-5 mb-5">
    <div class="col-lg-3 col-md-3 col-sm-12 filter-sidebar">

    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 product-box">
      <div class="box-shadow">
        <div class="product-img-box">
        <img src="wood-one.png" alt="" >
      </div>
      <div class="product-title">
        <h3>led tv rack</h3>
      </div>
      <div class="start-rating">
        <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
      </div>
      <div class="product-price">
        <h3>Rs 11,800 </h3>
      </div>
   <div class="product-btn d-flex">
        <div class="add-to-cart">
        <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
      </div>
      <div class="product-fav">
        <button><i class="fa-solid fa-heart"></i></button>
      </div>
      <div class="product-imp">

      </div>
   </div>
  </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-12 product-box">
    <div class="box-shadow">
    <div class="product-img-box">
    <img src="wood-two.png" alt="" >
  </div>
  <div class="product-title">
    <h3>Myrtle Setti</h3>
  </div>
  <div class="start-rating">
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
  </div>
  <div class="product-price">
    <h3>Rs 11,800 </h3>
  </div>
<div class="product-btn d-flex">
    <div class="add-to-cart">
    <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
  </div>
  <div class="product-fav">
    <button><i class="fa-solid fa-heart"></i></button>
  </div>
  <div class="product-imp">

  </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 product-box">
  <div class="box-shadow">
    <div class="product-img-box">
    <img src="wood-three.png" alt="" >
  </div>
  <div class="product-title">
    <h3>Parsley LED/TV Rack</h3>
  </div>
  <div class="start-rating">
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
  </div>
  <div class="product-price">
    <h3>Rs 11,800 </h3>
  </div>
<div class="product-btn d-flex">
    <div class="add-to-cart">
    <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
  </div>
  <div class="product-fav">
    <button><i class="fa-solid fa-heart"></i></button>
  </div>
</div>
</div>
</div>
</div>
</div>

@endsection
