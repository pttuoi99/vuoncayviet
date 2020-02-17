@extends('client.layouts.master')

@section('title')
	Liên hệ
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 single-right-left form-control" style="background: #dcd6d6b3;">
                <form action="{{ route('contact') }}" method="POST" role="form">
                	@csrf
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input value="" required type="email" name="email" class="form-control" id="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="textara">Nội dung:</label><br>
                        <textarea style="width: 100%" required name="content" cols="100" rows="7" placeholder="Nhập nội dung của bạn..." style="padding: 10px"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" style="border-radius: 0;">Gửi</button>
                </form>
            </div>
        </div>
    </div>
@endsection