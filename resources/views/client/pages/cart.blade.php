@extends('client.layouts.master')

@section('title')
	Giỏ hàng
@endsection

@section('content')
	<div class="page-head_agile_info_w3l">
	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="/">Trang Chủ</a>
						<i>|</i>
					</li>
					<li>Giỏ hàng</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			@if(Auth::check())
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				Giỏ hàng của {{ Auth::user()->name ?? ' ' }}
			</h3>
			@else
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				Giỏ hàng của bạn
			</h3>
			@endif
			<!-- //tittle heading -->
			@if(Cart::count() > 0)
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Bạn có tổng cộng:
					<span>{{ Cart::count() }} sản phẩm</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>
								<th style="1px;">Hình Ảnh</th>
								<th style="width: 1px;">Số lượng</th>
								<th>Tên sản phẩm</th>
								<th>Đơn giá(đ)</th>
								<th style="width: 10px">Chỉnh sửa</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;?>
							@foreach($cart as $value)
								<tr class="rem1">
									<td class="invert">{{ $i }}</td>
									<td class="invert-image">
										<a href="#">
											<img src="img/upload/product/{{ $value->options->img }}" width="150" height="100" alt="{{ $value->name }}" class="img-responsive">
										</a>
									</td>
									<td class="invert">
										<div class="quantity">
											<div class="form-group">
												<input style="width: 150px;" type="number" name="qty" class="form-control qty" value="{{ $value->qty }}" min='1' data-id="{{ $value->rowId }}">
											</div>
										</div>
									</td>
									<td class="invert" style="font-weight: bold;">{{ $value->name }}</td>
									<td class="invert">{{ number_format($value->price) }} </td>
									<td class="invert">
										<div class="rem">
											<div class="close1" data-id="{{ $value->rowId }}"></div>
										</div>
									</td>
								</tr>
								<?php $i++; ?>
							@endforeach	
						</tbody>
					</table>
					<h4 class="mb-sm-4 mb-3" style="margin-top: 10px" align="right">Bạn cần thanh toán tổng cộng:
						<span>{{ Cart::total() }} đ</span>
					</h4>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4 checkout-right-basket">
					<a @if(Auth::check()) href="checkout"  @else data-toggle="modal" data-target="#login" href="#" @endif class="submit check_out btn" style="font-weight: bold">Tiến hành đặt hàng<span class="far fa-hand-point-right"></span></a>
					<!-- <div class="checkout-right-basket">
						<a href="payment.html">Chọn phương thức thanh toán
							<span class="far fa-hand-point-right"></span>
						</a>
					</div> -->
				</div>
			</div>
			@else
			<span class="alert alert-danger" style="font-weight: bold">GIỎ HÀNG TRỐNG!!!</span><br><br>
			<a href="trangchu"><span style="font-weight: bold;" class="glyphicon glyphicon-hand-right"> TIẾP TỤC XEM SẢN PHẨM</span></a>
			@endif
		</div>
	</div>
	{{-- Delete --}}
	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success delProduct">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
@endsection