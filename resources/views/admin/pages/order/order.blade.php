@extends('admin.layouts.master')

@section('title')
Danh Sách Đơn Hàng
@endsection

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Đơn hàng</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên người nhận</th>
						<th>Email</th>
						<th>Địa chỉ nhận hàng</th>
						<th>Số điện thoại</th>
						<th>Message</th>
						<th>Tình trạng đơn hàng</th>
						<th>Tùy chọn</th>
					</tr>
				</thead>
				<tbody>
				 	@foreach($order as $key => $value)
				 		<tr>
				 			<td>{{ $key+1 }}</td>
					 		<td>{{ $value->name }}</td>
					 		<td>{{ $value->email }}</td>
					 		<td>{{ $value->address }}</td>
					 		<td>{{ $value->phone }}</td>
					 		<td>{{ $value->message }}</td>
					 		<td>
                                @if($value->status == 0)
                                <form method="post" action="admin/update/{{$value->id}}">
                                   @csrf
                                   <input type="hidden" name="status" value="1">
                                   <button type="submit"  name="" >Chưa duyệt</button>
                                </form>
                                @else									
                                <span style="color: green">Đã duyệt</span>
                                @endif	
                            </td>
                            <td>
                                <a href="{{route('viewOrder',$value->id)}}"
                                class="btn btn-primary btn-circle"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{route('viewOrder',[$value->id])}}"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn-circle btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
				 		</tr>
				 	@endforeach
				</tbody>
				<div>{{ $order->links() }}</div>
			</table>
			<div class="pull-right"></div>
		</div>
	</div>
</div>
@endsection