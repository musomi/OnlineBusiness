@extends('pages.shop')

@section('content')
<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-50">
                        <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                        <li class="breadcrumb-item"><a href="/shop/{{$category['category_id']}}">{{$category['category_name']}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$product['product_name']}}</li>
                    </ol>
                </nav>
            </div>
        </div>




        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{asset('images/'.$product['image'])}}">
                                    <img class="d-block w-100" src="{{asset('images/'.$product['image'])}}" alt="First slide">
                                </a>
                            </div>

                        </div>
                    </div>

<div class="checkout_details_area mt-50 clearfix">
  <div class="cart-title">
                                <h4 style="text-align:center">Order {{$product['product_name']}}</h4>
                            </div>
                    <form action="/shop/{{$product['product_id']}}/product" method="POST">
                      {{ csrf_field() }}
                         <div class="row">
                           <input type="hidden" class="form-control" name="price" value="{{$product['price']}}" placeholder="Name" required>
                             <div class="col-md-6 mb-3">
                                 <input type="text" class="form-control" name="names" value="" placeholder="Name" required>
                             </div>
                             <div class="col-md-6 mb-3">
                                 <input type="text" class="form-control" name="quantity" value="" placeholder="Quantity" required>
                             </div>

                             <div class="col-12 mb-3">
                                 <input type="email" class="form-control" name="email" placeholder="Email" value="">
                             </div>
                             <div class="col-12 mb-3">
                                 <input type="text" class="form-control" name="location" placeholder="location" value="">
                             </div>

                             <div class="col-12 mb-3">
                                 <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Leave a comment about your order"></textarea>
                             </div>
                             <div class="col-12 mb-3">
                                 <input type="submit" class="form-control btn btn-primary" id="email" value="Submit">
                             </div>

                         </div>
                     </form>
                   </div>

                </div>





            </div>
            <div class="col-12 col-lg-5">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">Ksh {{$product['price']}}</p>
                        <a href="product-details.html">
                            <h6>{{$product['product_name']}}</h6>
                        </a>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                                <a href="#">Write A Review</a>
                            </div>
                        </div>
                        <!-- Avaiable -->
                        <p class="avaibility"><i class="fa fa-circle"></i> {{$product['quantity']}}pcs In Stock </p>
                    </div>

                    <div class="short_overview my-5">
                        <p>{{$product['description']}}</p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" method="post">
                        <div class="cart-btn d-flex mb-50">
                            <p>Qty</p>
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->

@endsection
