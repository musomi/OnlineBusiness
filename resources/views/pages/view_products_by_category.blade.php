@extends('pages.v_products_by_category')
@section('content1')

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">
                        <p>Showing {{count($products).' '.$category['category_name']}}</p>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div style="float:right" class="widget price mb-50">
                        <!-- Widget Title -->
                        <h6 id="blinking" style="text-align:center"class="widget-title mb-30 blink">December Offer!!</h6>

                        <div class="widget-desc">
                            <div class="slider-range">
                                <div data-min="10" data-max="1000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-label-result="">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="range-price">get 10% discount on all products</div>
                            </div>
                        </div>
                    </div>

                    <!-- Sorting -->
                    <div class="product-sorting d-flex">
                        <div class="sort-by-date d-flex align-items-center mr-15">
                            <p>Sort by</p>
                            <form action="#" method="get">
                                <select name="select" id="sortBydate">
                                    <option value="value">Date</option>
                                    <option value="value">Newest</option>
                                    <option value="value">Popular</option>
                                </select>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">


         <?php foreach($products as $product): ?>
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        <a href="/shop/product/{{$product['product_id']}}"><img style="max-height:210px" src="{{asset('images/'.$product['image'])}}" alt="">
                        <!-- Hover Thumb -->

                        </a>
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">Ksh {{$product['price']}}</p>
                            <a href="/shop/product/{{$product['product_id']}}">
                                <h3>{{$product['product_name']}}</h3>
                            </a>
                        </div>
                        <!-- Ratings & Cart -->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="cart">
                                <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="{{asset('assets/img/core-img/cart.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <?php endforeach ?>
        </div>
        {{$products->links()}}


    </div>
</div>

@endsection
