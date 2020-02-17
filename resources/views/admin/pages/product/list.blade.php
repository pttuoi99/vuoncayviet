@extends('admin.layouts.master')

@section('title')
Danh Sách Sản Phẩm
@endsection

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Sản Phẩm | <a href="{{ route('product.create') }}">Thêm Mới</a></h6>
	</div>
	<!-- <div class="row">
		<div class="col-sm-12">
			<form class="form-inline" action="{{ route('adminsearch') }}" style="margin-bottom: 20px;">
				<div class="form-group">
					<input type="text" class="form-control" id="name" placeholder="Tên sản phẩm ..." name="name">
				</div>
				<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div> -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>STT</th>
						<th>Name</th>
						<th>Mô tả</th>
						<th>Giá sản phẩm(đ)</th>
						<th>Khuyến mại(%)</th>
						<!-- <th>Số lượng</th> -->
						<th>Ảnh minh họa</th>
						<th>Danh mục sản phẩm</th>
						<th>Loại sản phẩm</th>
						<th>Trạng thái</th>
						<th>Tùy Chọn</th>
					</tr>
				</thead>
				<tbody>
					@foreach($product as $key => $value)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $value->name }}</td>
						<td>{!! $value->description !!}</td>
						<td>{{number_format($value->price,0)}}</td>
						<td>{{ $value->promotional }}</td>
						<!-- <td>{{ $value->quantity }}</td> -->
						<td><img src="{{asset('img/upload/product')}}{{ '/'.$value->image }}" width="100" height="100"></td>
						<td>{{$value->Categories->name}}</td>
						<td>{{$value->productTypes->name}}</td>
						<td>
							@if($value->quantity != 0)
							<span style="color: blue">{{ 'Còn hàng' }}</span>
							@else
							<span style="color: red">{{ 'Hết hàng' }}</span>    
							@endif
						</td>
						<td>
							<button class="btn btn-primary btn-circle editProduct" title="{{'Sửa '.$value->name}}" data-toggle="modal" data-target="#edit" type="button" data-id="{{ $value->id }}"><i class="fas fa-edit"></i></button>
							<button class="btn btn-danger btn-circle deleteProduct" title="{{'Xóa '.$value->name}}"  data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="pull-right">{{ $product->links()}}</div>
		</div>
	</div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa loại sản phẩm <span class="title"></span></h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row" style="margin: 10px">
					<div class="col-lg-12">
						<form role="form" id="updateProduct" method="post" enctype="multipart/form-data">
							<fieldset class="form-group">
								<label>Tên sản phẩm</label>
								<input class="form-control name" name="name" placeholder="Nhập tên loại sản phẩm">
								<div class="alert alert-danger errorName"></div>
							</fieldset>
							<div class="form-group">
								<label for="quantity">Số lượng</label>
								<input type="number" name="quantity" min="0" value="1" class="form-control quantity">
								<div class="alert alert-danger errorQuantity"></div>
							</div>
							<div class="form-group">
								<label for="price">Đơn giá</label>
								<input type="text" name="price" placeholder="Nhập đơn giá" class="form-control price">
								<div class="alert alert-danger errorPrice"></div>
							</div>
							<div class="form-group">
								<label for="price">Giá khuyến mại</label>
								<input type="text" name="promotional" value="0" placeholder="Nhập giá khuyến mại nếu có" class="form-control promotional">
								<div class="alert alert-danger errorPromotional"></div>
							</div>
							<img class="img img-thumbnail imageThum" width="100" height="100" lign="center">
							<div class="form-group">
								<label for="price">Ảnh minh họa</label>
								<input type="file" name="image" class="form-control image">
								<div class="alert alert-danger errorImage"></div>
							</div>
							<div class="form-group" >
								<label for="featured" >SP Đặc biệt</label>
								<div class="form-control featured">
									Có: <input type="radio" name="featured" value="1">
									Không: <input type="radio" checked name="featured" value="0">
								</div>
								<div class="alert alert-danger errorFeatured"></div>
							</div>
							<div class="form-group">
								<label>Mô tả sản phẩm</label>
								<textarea name="description" id="demo" cols="5" rows="5" class="form-control"></textarea>
								<div class="alert alert-danger errorDescription"></div>
							</div>
							<div class="form-group">
								<label>Danh mục sản phẩm</label>
								<select class="form-control cateProduct" name="idCategory"></select>
							</div>
							<div class="form-group">
								<label>Loại sản phẩm</label>
								<select class="form-control proTypeProduct" name="idProductType"></select>
							</div>
							<div class="form-group">
								<label>Status</label>
								<select class="form-control status" name="status">
									<option value="1" class="ht">Hiển Thị</option>
									<option value="0" class="kht">Không Hiển Thị</option>
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