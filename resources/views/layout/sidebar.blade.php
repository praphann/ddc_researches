<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">DIR</span>
  </a>


  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

             <li class="nav-item {{ Active::check('dashboard') }} ">
               <a class="nav-link" href="{{ route('page.dashboard') }}" >
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p> Dashboard </p>
               </a>
             </li>


             <li class="nav-item {{ Active::check('member') }} ">
               <a class="nav-link" href="{{ route('page.member') }}" >
                 <i class="nav-icon far fa-address-card"></i>
                 <p> Member Manage </p>
               </a>
             </li>


             <li class="nav-item {{ Active::check('member') }} ">
               <a class="nav-link" href="{{ route('page.member') }}" >
                 <i class="nav-icon fas fa-book"></i>
                 <p> Research Project </p>
               </a>
             </li>


             <li class="nav-item {{ Active::check('member') }} ">
               <a class="nav-link" href="{{ route('page.member') }}" >
                 <i class="nav-icon fa fa-map"></i>
                 <p> Published Journal </p>
               </a>
             </li>


             <li class="nav-item {{ Active::check('member') }} ">
               <a class="nav-link" href="{{ route('page.member') }}" >
                 <i class="nav-icon fas fa-tree"></i>
                 <p> Utilization </p>
               </a>
             </li>


        <!-- <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs/3.0" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Documentation</p>
          </a>
        </li>
        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Level 1
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Level 2
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li> -->


        <!-- TREEVIEW Start----------------------------------------------------------------->
                <!-- <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Treeview
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">

                    <li class="nav-item {{ Active::check('home') }} ">
                      <a class="nav-link" href="{{ route('page.home') }}" >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Treeview 1</p>
                      </a>
                    </li>

                    <li class="nav-item {{ Active::check('dashboard') }} ">
                      <a class="nav-link" href="{{ route('page.dashboard') }}" >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Treeview 2</p>
                      </a>
                    </li>
                  </ul>
                </li> -->
        <!-- TREEVIEW End----------------------------------------------------------------->



      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- END of Sidebar -->
