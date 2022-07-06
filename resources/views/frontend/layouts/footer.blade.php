<!-- Start Footer -->
    <div class="section-6 pb-3" style="margin-top: 6rem;">
        <div class="container">
            <div class="row bottom-footer">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                    <div class="policy-img">
                        <img src=" {{asset('frontend/policy_image_03.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer py-5">
        <div class="container">
            <div class="row row-0">
                <div class="col-lg-12">
                <img src="{{asset('frontend/logo-dark.png')}}" alt="">
                </div>
            </div>
            <div class="row row-1 py-5">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="foter-title">
                        <h3>Contact Information</h3>
                            <ul class="contact-info">
                                <li class="address"><i class="fa-solid fa-location-dot"></i>SAHOOLAT KAR TOWNSHIP, College Road, Lahore, Pakistan</li>
                                <li><i class="fa fa-whatsapp" aria-hidden="true"></i><a href="tel: +923332275275">(+92) 0333 2275275</a></li>
                                <li><i class="fa-solid fa-message"></i></i><span style="color: #ca0815;"><a href="mailto: info@sahoolatkar.com">info@sahoolatkar.com</a></span></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="foter-title">
                        <h3>Useful Links</h3>
                        <ul class="contact-info">
                            <li><a href="{{route('about.us')}}">About Us</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Terms of Usee  </a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="foter-title">
                        <h3>Trending</h3>
                            <ul class="contact-info">
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">On Sale</a></li>
                            <li><a href=" {{route('home')}}">New Arrivalls</a></li>
                            <li><a href="#">Event</a></li>
                            <li><a href=" {{route('blog')}}">Blogs</a></li>

                            </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="foter-title">
                        <h3>User Area</h3>
                        <ul class="contact-info">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="{{route('about.us')}}">shopping cart </a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Track Order</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="foter-title">
                            <img src="{{asset('frontend/Googleplay_logo_23.png')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
            <div class="row row-2">
                <div class="col-lg-12">
                    <div class="socail-icons">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                    </div>
                </div>
            </div>
            <div class="row row-3 pt-5">
                <div class="col-lg-12">
                    <div class="payment-method">
                        <img src="{{asset('frontend/logos-payment.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-7 py-3">
        <div class="container">
            <div class="row bottom-footer">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                <div class="copy-right">
                    <p ><span ><span >©Copyright </span><span >{{date('Y')}}  </span><a href="https://sahoolatkar.com/">Sahoolatkar.com</a></span></p>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Footer -->


<script>
    $(document).ready(function () {
    $(".customer-logos").slick({
      slidesToShow: 8,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 1500,
      arrows: true,
      dots: false,
      pauseOnHover: false,
      prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
      nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }
      ]
    });
  });
  </script>
