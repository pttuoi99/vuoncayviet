@extends('admin.layouts.master')

@section('title')
Danh Sách Liên Hệ
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
						<th>Email</th>
						<th>Nội dung</th>
						<th>Ngày gửi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contacts as $key => $contact)
						<tr>
							<td>{{ $key+1 }}</td>		
							<td>{{ $contact->email }}</td>		
							<td>{{ $contact->message }}</td>		
							<td>{{ $contact->created_at }}</td>		
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection