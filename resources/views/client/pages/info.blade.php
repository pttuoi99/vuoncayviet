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
    <form method="post">
    	<div class="row">
            <div class="col-sm-4">
                <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block; height: 400px;">
                        <div class="vertical_post check_box_agile">
                            <h5 style="float: left;"><i class="fas fa-images"></i> Avatar</h5>
                            <div class="checkbox" style=" clear: both;">
                                @if( Auth::user()->avatar == '' )
                                <img style="width: 250px; height: 300px;" src="img\upload\product\image-logo\no.png">
                                @else
                                <img style="width: 250px;" src="{{ Auth::user()->avatar }}">
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                    <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block; height: 400px;">
                        <div class="vertical_post check_box_agile">
                            <h5 style="text-align: center;"><i class="fas fa-info"></i> Thông tin cá nhân</h5>
                            <!-- <div class="checkbox">
                                <div class="check_box_one cashon_delivery">
                                    <label class="anim">
                                        <p style="float: left;font-weight: bold;">Tổng Tiền</p>
                                        <p style="float: left; margin-left: 50px;">10.000 đ</p>
                                    </label> <br>
                                    <label class="anim">
                                        <p style="float: left;font-weight: bold;">Phí vận chuyển</p>
                                        <p style="margin-left: 10px;float: left;">miễn phí 
                                    </label>
                                </div>
                            </div> -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>HỌ và Tên</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ Auth::user()->name }}</td>
                                                <td>{{ Auth::user()->email }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </form>    
    <div class="modal fade" id="capnnat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Cập nhật thông tin cá nhân</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('info') }}" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Họ và tên</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email</label>
                            <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Cập nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="doimk" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">Thay đổi Mật khẩu đăng nhập</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="col-form-label">Mật khẩu cũ</label>
                            <input type="password" class="form-control" placeholder=" " name="pass">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Mật khẩu mới</label>
                            <input type="password" class="form-control" placeholder=" " name="newpass">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" placeholder=" " name="repass">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control" value="Cập nhật">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection