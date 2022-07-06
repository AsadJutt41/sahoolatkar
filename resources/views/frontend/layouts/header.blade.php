<!-- Start Header-->
<style>
    .header-shoping-cart{
        color: #DB0A0A;
        font-size: 33px;
    }
    sup.cart-counte {
    left: 50px;
    background-color: #DB0A0A;
    border-radius: 8px;
    max-height: 14px;
    padding: 7.5px 4px 4px 4px;
    color:#fff;
    max-width: 15px;
}
</style>
    <div class=" py-4">
        <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="logo">
                        <a href="#"><img src="{{asset('frontend/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-sm-6">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <!-- <a class="nav-link active" aria-current="page" href="#">Vendors</a> -->
                                        <a class="nav-link" href="#">Become a Partner </a> <span class="nav-divider">-</span>
                                        <a class="nav-link nav-txt" href="#">  Sell on Sahoolatkaar</a>
                                        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Blog</a> -->
                                        <sup class="cart-counte"><p>{{\Cart::getContent()->count()}}</p></sup>
                                        <a class="nav-link" href="{{route('cart.view')}}"><i class="fa-solid fa-cart-shopping header-shoping-cart"></i> </a>
                                        <a class="nav-link right-icon" href="#"> <img src="{{asset('frontend/login.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row row-1 pt-5">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="dropdown category-menu">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                            Shop By Category
                            <?php
                            $category = App\Models\Category::All();
                            ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach ($category as $cat)
                                <li><a class="dropdown-item" href="{{route('product.list')}}">{{$cat->title}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <div class="input-group search-bar">
                            <div class="form-outline">
                            <input type="search" id="form1" class="form-control" />
                            </div>
                            <button type="button" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<!--  End Header-->
