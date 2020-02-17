@extends('client.layouts.master')

@section('title')
Chi tiết sản phẩm - {{ $product->name }}
@endsection

@section('content')
<!-- banner-2 -->
<div class="page-head_agile_info_w3l"></div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="trangchu">Trang Chủ</a>
                    <i>|</i>
                </li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
        Sản Phẩm</h3>

        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="img/upload/product/{{ $product->image }}">
                                <div class="thumb-image">
                                    <img style="height: 350px; width: 500px;" src="img/upload/product/{{ $product->image }}" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li>
                            <!-- <li data-thumb="img/upload/product/{{ $product->image }}">
                                <div class="thumb-image">
                                    <img style="height: 350px; width: 500px;" src="img/upload/product/{{ $product->image }}" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-thumb="img/upload/product/{{ $product->image }}">
                                <div class="thumb-image">
                                    <img style="height: 350px; width: 500px;" src="img/upload/product/{{ $product->image }}" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li> -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3">{{ $product->name }}</h3>
                <p class="mb-3">
                    @if($product->promotional != 0)
                    <span class="item_price">
                        {{ number_format($product->price - ($product->price*$product->promotional)/100) }} đ
                    </span>
                    <del class="mx-2 font-weight-light">
                        {{ number_format($product->price) }} đ
                    </del>
                    @else
                    <span class="item_price">
                        {{ number_format($product->price) }} đ
                    </span>
                    @endif
                    <!-- <label>Giao hàng nhanh chóng</label> -->
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li class="mb-3">
                            Thanh toán sau khi giao hàng
                        </li>
                        <li class="mb-3">
                            Ưu đãi giảm 5% cho đơn hàng đầu tiên
                        </li>
                        <p class="mb-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            Miễn phí giao hàng cho đơn hàng trên <b style="color: red"> {{number_format(300000)}}đ</b>
                        </p>
                    </ul>
                </div>
                <div class="product-single-w3l">                    
                    <p class="my-sm-4 my-5">
                        <b style="color: blue">Danh mục: </b><a href="{{ $product->ProductTypes->slug }}.html">{{ $product->ProductTypes->name }}</a>
                    </p>
                    
                </div><br>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        @if($product->quantity != 0)
                        <a href="{{ route('addCart',['id' => $product->id]) }}">Thêm vào giỏ hàng</a>
                        @else
                        <a>Tạm thời hết hàng</a><br><br>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'mota')">Mô tả sản phẩm</button>
  <button class="tablinks" onclick="openCity(event, 'binhluan')">Bình luận</button>
</div>

<div id="mota" class="tabcontent">
  <span style="line-height: 2.5;">{!! $product->description !!}</span>
</div>
<div id="binhluan" class="tabcontent">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 single-right-left">
                <form action="{{ route('comment') }}" method="POST" role="form">
                    @csrf()
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input value="" required type="email" name="email" class="form-control" id="" placeholder="Email">
                    </div>
                    <div class="form-group">
                     <label for="">Tên:</label>
                     <input required type="text" value="" name="name" class="form-control" id="" placeholder="Họ Tên">
                    </div>
                    <div class="form-group">
                        <label for="textara">Nội dung:</label><br>
                        <textarea style="width: 100%" required name="content" cols="100" rows="7" placeholder="Nhập bình luận của bạn..." style="padding: 10px"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning" style="border-radius: 0;">Gửi</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 single-right-left">
                @foreach($comments as $comment)
                    <div id="com_div">
                       <br><b id="com_name">{{ $comment->name }}</b>
                       <br><span id="com_date">{{ date('d/m/Y H:i:s', strtotime($comment->created_at)) }}</span>
                       <br><span id="com_comment">{{ $comment->message }}</span>
                    </div>
                @endforeach  
            </div>
        </div>
    </div>
</div>
@endsection