<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a  class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{env("APP_NAME")}}</span>
  </a>

    <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="{{url('/home')}}" class="nav-link">
            <i class="nav-icon fa fa-tachometer"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('excel_import.create')}}" class="nav-link">
            <i class="nav-icon fas fa-download"></i>
            <p>
              Excel Import
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{route('mail.create')}}" class="nav-link">
              <i class="nav-icon fa fa-envelope"></i>
              <p>
                Send Mail
              </p>
            </a>
        </li>
        <li class="nav-item">
          <a href="{{route('image_upload.create')}}" class="nav-link">
            <i class="nav-icon fas fa-upload"></i>
            <p>
              Image Upload
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('image_upload.index')}}" class="nav-link">
            <i class="nav-icon fa fa-file-image-o"></i>
            <p>
              Image View
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{route('backup.create')}}" class="nav-link">
              <i class="nav-icon fa fa-cloud-download"></i>
              <p>
                Database Backup
              </p>
            </a>
          </li>
        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Accounts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a> -->
          <!-- <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-book nav-icon"></i>
                <p>
                  Account Categories
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('account_categories.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('account_categories.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>  -->

          <!-- <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-list-ul"></i>
            <p>
              Manage
              <i class="right fas fa-angle-left"></i>
            </p>
          </a> -->

          <!-- <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Customers
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Customer</p>
                    </a>
                  </li>
                </ul> -->

              <!-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View Customer</p>
                  </a>
                </li>
              </ul> -->
            <!-- </li>
          </ul>-->
        <!-- </li>  -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
