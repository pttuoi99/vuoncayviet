@extends('client.layouts.master')

@section('title')
Thông Tin Khách Hàng
@endsection

@section('content')
<div class="page-head_agile_info_w3l">
</div>
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<ul class="w3_short">
				<li>
					<a href="/">Trang Chủ</a>
					<i>|</i>
				</li>
				<li>Thông tin</li>
			</ul>
		</div>
	</div>
</div>
<br/>
@if(Auth::check())
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng của  <b style="color: green">{{ Auth::user()->name }}</b></h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr style="color: #b15f5f">
						<th>STT</th>
						<th>Mã đơn hàng</th>
						<th>name</th>
						<th>Giá sản phẩm(đ)</th>
						<th>số lượng</th>
						<th>Phí vận chuyển</th>
						<th>Thành tiền(đ)</th>
						<th>Ngày đặt</th>
						<th>Trạng thái</th>
					</tr>
				</thead>
				<tbody>
					@foreach($order as $key => $value)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $value->code_order }}</td>
						<td>{{ $value->OrderDetail[0]->name }}</td>
						<td>{{ number_format($value->OrderDetail[0]->price) }}</td>
						<td>{{ $value->OrderDetail[0]->quantity }}</td>
						@if(($value->OrderDetail[0]->price) * ($value->OrderDetail[0]->quantity) < 300000)
						<td>{{ number_format(20000) }}</td>
						@else
						<td>0</td>
						@endif
						<td>{{ number_format($value->monney) }}</td>
						<td>{{ $value->created_at }}</td>
						<td>
							@if($value->status != 0)
							<span style="color: blue; font-weight: bold;">{{ 'đã duyệt' }}</span>
							@else
							<span style="color: red; font-weight: bold;">{{ 'Chưa duyệt' }}</span>    
							@endif
						</td>
						<!-- <td>
							<button class="btn btn-danger btn-circle deleteProduct" title="{{'Xóa '.$value->name}}"  data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}"><i class="fas fa-trash"></i></button>
						</td> -->
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endif
@endsection