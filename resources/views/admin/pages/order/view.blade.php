@extends('admin.layouts.master')

@section('title')
Chi Tiết Đơn Hàng
@endsection

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Chi Tiết Đơn Hàng | <a href="{{ route('order.index') }}">Quay lại</a></h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Đơn giá(đ)</th>
						<th>Phí vận chuyển(đ)</th>
						<th>Tổng(đ)</th>
						<th>Ngày đặt</th>
						<th>Tùy chọn</th>
					</tr>
				</thead>
				<tbody>
					@foreach($vieworder as $key => $value)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->quantity }}</td>
							<td>{{ number_format($value->price) }}</td>
							<td>
								@if(($value->price) * ($value->quantity) > 300000)
								{{ number_format(0) }}
								@else
								{{ number_format(20000) }}
								@endif
							</td>
							<td>
								@if(($value->price) * ($value->quantity) > 300000)
								{{ number_format(($value->price) * ($value->quantity)) }}
								@else
								{{ number_format(($value->price) * ($value->quantity) + 20000) }}
								@endif
							</td>
							<td>{{ $value->created_at }}</td>
							<td>
								<a href="{{route('delete_orderdetail',$value->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- delete Modal-->
@endsection