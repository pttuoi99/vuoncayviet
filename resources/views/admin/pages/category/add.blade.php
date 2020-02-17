@extends('admin.layouts.master')

@section('title')
	Thêm Danh Mục Sản Phẩm
@endsection

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Danh Mục | <a href="{{ route('category.index') }}">Danh Sách </a></h6>
	</div>
	<div class="row" style="margin: 10px">
		<div class="col-lg-6">
			<form role="form" action="{{route('category.store')}}" method="POST">
				@csrf
				<fieldset class="form-group">
					<label>Name</label>
					<input class="form-control" name="name" placeholder="Nhập tên Category">
				</fieldset>
				<div class="form-group">
					<label>Status</label>
					<select class="form-control" name="status">
						<option value="1">Hiển thị</option>
						<option value="0">Không hiển thị</option>
					</select>
				</div>
				<button type="submit" class="btn btn-success">Thêm</button>
				<button type="reset" class="btn btn-primary">Nhập Lại</button>
			</form>
		</div>
	</div>
</div>
@endsection