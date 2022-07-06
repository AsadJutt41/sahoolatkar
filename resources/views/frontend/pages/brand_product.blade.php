
    @foreach ($products as $product)
        <div class="col-lg-4 col-md-4 col-sm-12 pt-3 productsectionbox " productprice="{{$product->price}}" >
            <div class="box-shadow">
                <div class="product-img-box">
                    <img src="{{asset('backend/product/'.$product->photo)}}" alt="product_image">
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
                    <h3>{{$product->price}} </h3>
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
