<input type="checkbox" id="check">
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left-area">
        <h3>Admin <span class="neon">Manager</span></h3>
    </div>
    <div class="right-area">
        <a href="{{ route('home') }}" class="logout-btn">Logout</a>
    </div>
</header>
<!--navigator mobile start-->
<div class="mobile_nav">
    <div class="nav_bar">
        <img src="{{ asset('Img/unsigned.png') }}" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
        <a href="{{ route('admin') }}"><i class="fal fa-desktop"></i><span>Home</span></a>
        <a href="{{ route('user') }}"><i class="fal fa-user"></i><span>User</span></a>
        <a href="#"><i class="far fa-chess-board"></i><span>Product</span></a>
        <a href="#"><i class="far fa-cogs"></i><span>Setting</span></a>
        <a href="#"><i class="fal fa-user-tag"></i><span>Role</span></a>
        <a href="{{ route('home') }}"><i class="fal fa-store"></i><span>Store</span></a>
    </div>
</div>
<!--navigatpr mobile end-->
<div class="sidebar" id="sideBar">
    <div class="profile_info" style="padding-top: 30px">
        <img src="{{ asset('Img/unsigned.png') }}" alt="" class="cen profile_image">
        <h4>Admin</h4>
    </div>
    <a href="{{ route('admin') }}" class=" dot"><i class="fal fa-desktop"></i><span>Dashboard</span></a>
    <a data-bs-toggle="collapse" href="#collapseUser"class="dot"><i class="fal fa-user"></i><span>Account</span></a>
    <div class="collapse" id="collapseUser">
        <div style="padding: 20px 20px 20px 20px">
            <a href="{{ route('user') }}" class="dot test"><i class="fal fa-user"></i><span>User</span></a>
            <a href="{{ route('role') }}" class="dot"><i class="fal fa-key"></i><span>Role</span></a>
            <a href="{{ route('permission') }}" class="dot"><i class="fal fa-user-tag"></i><span>User Role</span></a>
        </div>
    </div>
    <a href="{{ route('supplier.index') }}" class="dot"><i class="fal fa-truck-loading"></i><span>Supplier</span></a>
    <a data-bs-toggle="collapse" href="#collapseProduct" class="dot"><i class="far fa-chess-board"></i><span>product</span></a>
    <div class="collapse" id="collapseProduct">
        <div style="padding: 20px 20px 20px 20px">
            <a href="{{ route('productType') }}" class="dot test"><i class="fal fa-box-ballot"></i><span>Product Type</span></a>
            <a href="#" class="dot"><i class="fal fa-box-open"></i></i><span>Product</span></a>
        </div>
    </div>
    <a href="{{ route('promotion') }}" class="dot"><i class="fal fa-percent"></i><span>Promotion</span></a>
    <a href="{{ route('home') }}"><i class="fal fa-store"></i><span>Store</span></a>
    <a href="#" class="dot"><i class="far fa-cogs"></i><span>Setting</span></a>
</div>
