@extends('client.layouts.master')
@section('title')
	Trang chủ
@endsection

@section('slide')
	@include('client.layouts.slide')
@endsection

@section('content')
	<!-- tittle heading -->
	<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
		Sản phẩm mới của chúng tôi </h3>
	<!-- //tittle heading -->
	<div class="row">
		<!-- product left -->
		<div class="agileinfo-ads-display col-lg-9">
			<div class="wrapper">
				<!-- first section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<div class="row">
						@if(isset($procaycanh))
							@foreach($procaycanh as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img style="height: 250px;" src="img/upload/product/{{ $pro->image }}" class="img-fluid" alt="{{ $pro->name }}" height="100">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Chi tiết</a>
											</div>
										</div>
									</div>
									@if($pro->promotional != 0)
									<span class="product-new-top">-{{$pro->promotional}}%</span>
									@endif
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{ $pro->slug }}.html" style="color: #49c515fa; font-weight: bold; text-transform: uppercase;">{{ $pro->name }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->price - ($pro->price*$pro->promotional)/100) }}đ
												</span>
												<del>{{ number_format($pro->price) }}đ</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price) }}đ
												</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											@if($pro->quantity != 0)
											<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
											@else
											<a>Tạm thời hết hàng</a>
											@endif
										</div>
									</div>
								</div>
							</div>
						@endforeach	
						@endif
					</div>
				</div>

				<!-- //first section -->
				<!-- second section -->
				<!-- <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">{{ $procaycn[0]->Categories->name ?? '' }}</h3>
					<div class="row">
						@if(isset($procaycn))
							@foreach($procaycn as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img style="height: 250px;" src="img/upload/product/{{ $pro->image }}" class="img-fluid" alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="#" class="link-product-add-cart">Chi tiết</a>
											</div>
										</div>
									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="single.html">{{ $pro->name }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->price - ($pro->price*$pro->promotional)/100) }}đ
												</span>
												<del>{{ number_format($pro->price) }}</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price) }}đ
												</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach	
						@endif
					</div>
				</div> -->
				
				<!-- //second section -->
				
				<!-- //fourth section -->
			</div>
		</div>
		<!-- //product left -->
		<!-- product right -->
        @include('client.layouts.sidebar')
	</div><hr>
	<div class="agileinfo-ads-display col-lg-12">
				<!-- //second section -->
				<!-- third section -->
				<div class="product-sec1 product-sec2 px-sm-5 px-3">
					<div class="row">
						<h3 class="col-md-4 effect-bg">Vui giáng sinh  Mừng năm mới</h3>
						<p class="w3l-nut-middle">Nhận thêm <br> 10% giảm giá</p>
						<div class="col-md-8 bg-right-nut">
							<img src="img/upload/product/image-logo/nen.gif" alt="" style="padding-left: 160px;">
						</div>
					</div>
				</div>
				<!-- //third section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic" style="color: #9100ffd9; margin-top: 20px; text-transform: none;">Sản phẩm đặc biệt</h3>
					<div class="row">
						@foreach($new as $pro)
							<div class="col-md-3 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img style="height: 250px; width: 250px;" src="img/upload/product/{{ $pro->image }}" class="img-fluid" alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Chi tiết</a>
											</div>
										</div>
									</div>
									@if($pro->promotional != 0)
									<span class="product-new-top">-{{$pro->promotional}}%</span>
									@endif
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="single.html" style="color: #49c515fa; font-weight: bold; text-transform: uppercase;">{{ $pro->name }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->price - ($pro->price*$pro->promotional)/100) }}đ
												</span>
												<del>{{ number_format($pro->price) }}</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price) }}đ
												</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											@if($pro->quantity != 0)
											<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
											@else
											<a>Tạm thời hết hàng</a>
											@endif
										</div>
									</div>
								</div>
							</div>
						@endforeach	
					</div>
				</div>
				<!-- //fourth section -->
			</div>
		</div>
		<hr>
@endsection