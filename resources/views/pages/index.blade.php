@extends('pages.shop')

@section('content')

<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">

     <?php foreach ($categories as $category):  ?>
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="/shop/{{$category['category_id']}}">
                <img style="max-height:200px" src="{{asset('images/'.$category['image'])}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From Ksh {{$category['price_range']}}</p>
                    <h4>{{$category['category_name']}}</h4>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>

    <span style="float:right">{{$categories->links()}}</span>

</div>
<!-- Product Catagories Area End -->

@endsection
