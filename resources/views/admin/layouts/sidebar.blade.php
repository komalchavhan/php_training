 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            
            
          </li>
         
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">8</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('usermanagements')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usermanagement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('categories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('configurations')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Configuration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('coupons')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coupon</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('banners')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('cmspages')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cms Pages</p>
                </a>
              </li>    
              <li class="nav-item">
                <a href="{{asset('managements')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Managements</p>
                </a>
              </li>  
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>