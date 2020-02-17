@extends('admin.layouts.master')

@section('title')
Danh Sách Tài khoản
@endsection

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Tài Khoản</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>STT</th>
						<th>Họ tên</th>
						<th>Email</th>
						<th>Cấp</th>
						<th>Trạng thái</th>
						<th>Tùy chọn</th>
					</tr>
				</thead>
				<tbody>
					@foreach($account as $key => $acc)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $acc->name }}</td>
						<td>{{ $acc->email }}</td>
						<td>
							@if($acc->role == 1 )
								<b style="color: red;">Admin</b> 
							@elseif($acc->role == 2)
								<b style="color: blue">Quản lý</b> 
							@elseif($acc->role == 3)
								<b style="color: blue">Nhân viên bán hàng</b> 
							@elseif($acc->role == 4)
								<b style="color: blue">Nhân viên quản lý đơn hàng</b> 
							@else
								<b>Thành viên</b> 
							@endif
						</td>
						<td>
							@if($acc->status == 0)
							<b style="color: blue">Hoạt động</b>
							@else
							<b style="color: red">Khóa</b>
							@endif
						</td>
						<td>
							<button class="btn btn-primary btn-circle editProduct" data-toggle="modal" data-target="#edit" type="button" ><i class="fas fa-edit"></i></button>
							<a data-target="#delete" class="btn btn-danger btn-circle" href="{{route('delUser',$acc->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin <span class="title"></span></h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row" style="margin: 10px">
					<div class="col-lg-12">
						<form role="form" id="updateProduct" method="post" enctype="multipart/form-data">
							<fieldset class="form-group">
								<label>Tên nhân viên</label>
								<input class="form-control name" name="name" value="">
								<div class="alert alert-danger errorName"></div>
							</fieldset>
							<div class="form-group">
								<label>Cấp bậc</label>
								<select class="form-control status" name="status">
									<option value="1">Admin</option>
									<option value="2">Quản lý</option>
									<option value="3">Nhân viên bán hàng</option>
									<option value="4">Nhân viên quản lý đơn hàng</option>
									<option value="0">Thành viên</option>
								</select>
							</div>
							<input type="submit" class="btn btn-success" value="Sửa">
							<button type="reset" class="btn btn-primary">Nhập Lại</button>
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- delete Modal-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body" style="margin-left: 183px;">
				<button type="button" class="btn btn-success delProduct">Có</button>
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
				<div>
				</div>
			</div>
		</div>
		@endsection