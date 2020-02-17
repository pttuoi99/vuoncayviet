<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin/">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3" style="color: white">Vườn Cây Việt
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="admin/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chủ</span>
        </a>
    </li>
    <!-- Divider -->
    @if(Auth::user()->role == 1 || Auth::user()->role == 2)
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Danh Mục Sản Phẩm
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Danh Mục</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Danh Mục</h6>
                <a class="collapse-item" href="{{ route('category.index') }}">Danh Sách</a>
                <a class="collapse-item" href="{{ route('category.create') }}">Thêm Mới</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#producttype" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Loại Sản Phẩm</span>
        </a>
        <div id="producttype" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Loại Sản Phẩm </h6>
                <a class="collapse-item" href="{{ route('producttype.index') }}">Danh Sách</a>
                <a class="collapse-item" href="{{ route('producttype.create') }}">Thêm Mới</a>
            </div>
        </div>
    </li>
    @endif @if(Auth::user()->role == 1 || Auth::user()->role == 3)
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Sản Phẩm
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Sản Phẩm</span>
        </a>
        <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Sản Phẩm</h6>
                <a class="collapse-item" href="{{ route('product.index') }}">Danh Sách</a>
                <a class="collapse-item" href="{{ route('product.create') }}">Thêm Mới</a>
            </div>
        </div>
    </li>
    @endif
    @if(Auth::user()->role == 1 || Auth::user()->role == 4)
    <hr class="sidebar-divider">
    <!-- <div class="sidebar-heading">
        Đơn Đặt Hàng
    </div> -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#order" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Đơn Đặt Hàng</span>
        </a>
        <div id="order" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Đơn hàng</h6>
                <a class="collapse-item" href="{{ route('order.index') }}">Đơn hàng</a>
                <!-- <a class="collapse-item" href="{{ route('order.create') }}">Chưa Duyệt</a> -->
            </div>
        </div>
    </li>
    @endif  
    @if(Auth::user()->role == 1)
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users-cog"></i> 
            <span>Tài khoản</span>
        </a>
        <div id="user" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý tài Khoản</h6>
                <a class="collapse-item" href="{{ route('user.index') }}">Nhân Viên</a>
                <a class="collapse-item" href="{{ route('user.create') }}">Khách Hàng</a>
            </div>
        </div>
    </li>
    @endif
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contact" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users-cog"></i> 
            <span>Liên hệ</span>
        </a>
        <div id="contact" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Liên hệ</h6>
                <a class="collapse-item" href="{{ route('contact.index') }}">Danh sách</a>
            </div>
        </div>
    </li>
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>