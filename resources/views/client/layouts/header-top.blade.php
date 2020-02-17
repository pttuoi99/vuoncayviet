<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">
                <p class="text-white text-lg-left text-center">Ưu đãi & Giảm giá hàng đầu khu vực
                    <i class="fas fa-shopping-cart ml-1"></i>
                </p>
            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul>
                    <li class="text-center border-right text-white">
                        <a class="play-icon popup-with-zoom-anim text-white" href="{{ route('about') }}">
                            <i class="fas fa-map-marker mr-2"></i>Giới thiệu
                        </a>
                    </li>
                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i><a href="tel:0919918817" style="color: #a1a1e0;">0919.918.817</a>
                    </li>
                <!-- @if(Auth::check())
                <li class="text-center border-right text-white">
                    <a href="#" data-toggle="modal" data-target="#login" class="text-white">
                        <i class="fas fa-truck mr-2"> Đơn hàng</i>
                    </a>
                </li>
                @endif -->
                @if(Auth::check())
                    <!-- <li class="text-center border-right ">
                        <a href="logout" title="Đăng Xuất" class="text-white"><i class="fas fa-sign-in-alt mr-2"></i>{{ Auth::user()->name }}</a>
                    </li> -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-white">{{ Auth::user()->name }}</span>
                            @if( Auth::user()->avatar == '' )
                            <img class="img-profile rounded-circle" style="width: 20px; height: 20px" src="img\upload\product\image-logo\no.png">
                            @else
                            <img class="img-profile rounded-circle" style="width: 20px; height: 20px" src="{{ Auth::user()->avatar }}">
                            @endif
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="info">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Thông tin
                            </a>
                            <a class="dropdown-item" href="order">
                                <i class="fas fa-truck fa-sm fa-fw mr-2 text-gray-400"></i> Đơn hàng
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Cài đặt
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Đăng xuất
                            </a>
                        </div>
                    </li>
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Sẵn sàng rời khỏi?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Chọn <b style="color: red">"Đăng Xuất"</b> nếu bạn đã sẵn sàng kết thúc phiên làm việc của mình.</div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal" style="margin-bottom: 15px;">Thoát</button>
                          <a class="btn btn-primary" href="logout" style="width: 120px; border-radius: 3px;">Đăng Xuất</a>
                      </div>
                  </div>
              </div>
          </div>
          @if(Auth::user()->password == '')
          <div class="modal fade updatePass" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Cập nhật password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="updatepass" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập password mới" name="password">
                                @if($errors->has('password'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('password') }}
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Nhập Lại Mật Khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập lại password" name="re_password">
                                @if($errors->has('re_password'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('re_password') }}
                                </div>
                                @endif
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
        @else
        <li class="text-center border-right text-white">
            <a href="#" data-toggle="modal" data-target="#login" class="text-white">
                <i class="fas fa-sign-in-alt mr-2"></i> Đăng Nhập 
            </a>
        </li>
        <li class="text-center text-white">
            <a href="#" data-toggle="modal" data-target="#register" class="text-white">
                <i class="fas fa-sign-out-alt mr-2"></i>Đăng Ký 
            </a>
        </li>

        @endif
    </ul>
    <!-- //header lists -->
</div>
</div>
</div>
</div>