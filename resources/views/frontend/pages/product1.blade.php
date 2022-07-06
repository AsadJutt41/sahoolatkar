@extends('frontend.layouts.master')
@section('title',' SAHOOLATHKAAR || PRODUCTS ')
@section('main-content')

    <!-- Start Breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></a></i></li>
                    <li><a href="#">Home Appliances </a></li>
                    <li>Microwave</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Product Image & Text -->
    <div class="container ">
        <div class="row mt-5">
            <div class="col-sm-6">
            <img src="single-product.png" alt="" width="300" class="img-responsive" style="display: flex; margin: 0 auto;">
            </div>
            <div class="col-sm-6 single-product">
            <h3 class="product-title">Dawlance Microwave DW-210 S</h3>
            <p>SKU: DW-210 S</p>
            <div class="start-rating">
                <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star "></span>
        <span class="fa fa-star"></span>
        0 reviews / Write a reviews
            </div>
            <h3 class="product-price">Rs 9,400 - Pay in full</h3>
            <hr>
            <div class="mt-3">
                <h4>Installment Options</h4>
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">3 Months</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu1">6 Months</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu2">12 Months</a>
                </li>
                <hr>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <p>₨ 1,500 / month for 7 months</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <p>₨ 1,500 / month for 10 months</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <p>₨ 1,500 / month for 12 months</p>
                </div>
                </div>
            </div>
            <hr>
            <div class="product-btn d-flex">
                <div class="quatity-box">
                    <div class="product-quantity">
                    <h3>Qty</h3>
                    <input data-min="1" data-max="0" type="text" name="quantity" value="1" readonly="true"><div class="quantity-selectors-container">
                        <div class="quantity-selectors">
                        <button type="button" class="increment-quantity" aria-label="Add one" data-direction="1"><span>&#43;</span></button>
                        <button type="button" class="decrement-quantity" aria-label="Subtract one" data-direction="-1" disabled="disabled"><span>&#8722;</span></button>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="add-to-cart">
                <button><i class="fa-solid fa-cart-shopping" style="padding: 8px 8px;"></i><a href="#">Add to cart</a></button>
            </div>
            <div class="product-fav" style="margin-left: 10px;">
                <button><i class="fa-solid fa-heart" style="padding: 8px 4px;"></i></button>
            </div>
            </div>
            <div class="whatsapp-btn-foramt mt-4">
            <button type="button" class="btn whatsapp-btn "><i class="fa fa-whatsapp" aria-hidden="true"></i>  ORDER VIA WHATSAPP</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Vertical Tabs Section -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 pt-5 pb-5">
                <div class="vertical-tabs">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Description</button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Addionational Info</button>
                        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Reviews</button>
                        <button class="tablinks" onclick="openCity(event, 'Terms')">Installment Terms</button>
                    </div>
                    <div id="London" class="tabcontent">
                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

                        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

                        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

                            Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

                            In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                    </div>
                    <div id="Paris" class="tabcontent">

                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

                        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

                        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

                            Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

                            In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                    </div>
                    <div id="Tokyo" class="tabcontent">
                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

                        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

                        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.

                            Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.

                            In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                    </div>
                    <div id="Terms" class="tabcontent">
                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.
                        Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.
                        In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                        <p>Lorem ipsum dolor sit amet. Qui quas voluptatum in quae earum et ducimus recusandae. Ut fuga suscipit et pariatur dolore qui voluptas quidem aut beatae reprehenderit.
                            Non reprehenderit nemo ea cupiditate incidunt ex ipsam iure. Et illo nobis est quod placeat qui dolorem assumenda in labore quaerat dolorum tempore. Et commodi accusamus aut itaque molestiae non nesciunt adipisci et facilis aspernatur.
                            In fuga quisquam ut error unde non perferendis amet. Sit officiis dolores sed quos corporis in exercitationem ipsam ex quasi galisum non reprehenderit quas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5 product-page">
        <div class="row ">
            <div class="col-12">
                <h3 class="related-product">RELATED PRODUCTS</h3>
            </div>
            <hr style="width: 98%; margin-left: 12px;">
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-3 col-sm-12 filter-sidebar dropdown-arrow">
            <div class="box-shadow">
                <div class="product-img-box">
                    <img src="related-product.png" alt="" >
                </div>
                <div class="product-title">
                    <h3>Dawlance - Microwave</h3>
                </div>
                <div class="start-rating">
                    <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
                </div>
                <div class="product-price">
                    <h3>$50.00 </h3>
                    <del>$62.00</del>
                </div>
            <div class="product-btn d-flex">
                    <div class="add-to-cart">
                    <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
                </div>
                <div class="product-fav" style="margin-left: 5px;">
                    <button><i class="fa-solid fa-heart"></i></button>
                </div>
            </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 product-box">
            <div class="box-shadow">
                    <div class="product-img-box">
                    <img src="related-product.png" alt="" >
                    </div>
                    <div class="product-title">
                        <h3>Dawlance - Microwave</h3>
                    </div>
                    <div class="start-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="product-price">
                        <h3>$50.00 </h3>
                        <del>$62.00</del>
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
            <div class="col-lg-3 col-md-3 col-sm-12 product-box">
                <div class="box-shadow">
                    <div class="product-img-box">
                    <img src="related-product.png" alt=""  >
                    </div>
                    <div class="product-title">
                        <h3>Dawlance - Microwave</h3>
                    </div>
                    <div class="start-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="product-price">
                        <h3>$50.00 </h3>
                        <del>$62.00</del>
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
                        <img src="related-product.png" alt="">
                    </div>
                    <div class="product-title">
                        <h3>Dawlance - Microwave</h3>
                    </div>
                    <div class="start-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="product-price">
                        <h3>$50.00 </h3>
                        <del>$62.00</del>
                    </div>
                    <div class="product-btn d-flex">
                        <div class="add-to-cart">
                        <button><i class="fa-solid fa-cart-shopping"></i><a href="#">Add to cart</a></button>
                        </div>
                        <div class="product-fav">
                        <button><i class="fa-solid fa-heart"></i></button>
                        </div>
                        <div class="product-imp"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-6 pb-3" style="margin-top:6rem !important;">
        <div class="container">
            <div class="row bottom-footer">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                <div class="policy-img">
                    <img src="policy_image_03.png" alt="">
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
    });

    // Quantity btn
    $(".increment-quantity,.decrement-quantity").on("click", function(ev) {
    var currentQty = $('input[name="quantity"]').val();
    var qtyDirection = $(this).data("direction");
    var newQty = 0;

    if (qtyDirection == "1") {
      newQty = parseInt(currentQty) + 1;
    }
    else if (qtyDirection == "-1") {
      newQty = parseInt(currentQty) - 1;
    }

    // make decrement disabled at 1
    if (newQty == 1) {
      $(".decrement-quantity").attr("disabled", "disabled");
    }

    // remove disabled attribute on subtract
    if (newQty > 1) {
      $(".decrement-quantity").removeAttr("disabled");
    }

    if (newQty > 0) {
      newQty = newQty.toString();
      $('input[name="quantity"]').val(newQty);
    }
    else {
      $('input[name="quantity"]').val("1");
    }
  });

  // Vertical tabs

  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

    </script>
@endpush
