
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background-color: black;color: white;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminpanel/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminpanel/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
           <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('company-info')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Info</p>
                </a>
              </li>
       </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="nav-icon fas fa-info-circle"></i>
              <p>
                About 
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
       </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
       </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Service
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
       </ul>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
       </ul>
          </li>
     <li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-phone"></i>
    <p>
      Contact        
      <i class="fas fa-angle-left right"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="pages/layout/top-nav.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Top Navigation</p>
      </a>
    </li>
  </ul>
</li>
   </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>