<!-- Main Sidebar Container -->

<style media="screen">
.nav-sidebar .nav-item>.nav-link {
  padding: 15px;
}

.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #808080;
    color: #fff;
}
</style>



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

             <li class="nav-item">
              <a class="nav-link {{ Active::check('dashboard') }}" href="{{ route('page.dashboard') }}" >
                <i class="nav-icon far fas fa-chart-pie"></i>
                <p> Dashboard </p>
              </a>
            </li>


             <li class="nav-item">
               <a class="nav-link {{ Active::check('member_form') }} " href="{{ route('page.member') }}" >
                 <i class="nav-icon far fa-address-card"></i>
                 <p> Member Manage </p>
               </a>
             </li>



             <li class="nav-item ">
               <a class="nav-link {{ Active::check('research_form') }} " href="{{ route('page.research') }}" >
                 <i class="nav-icon fas fa-book"></i>
                 <p> ข้อมูลโครงการวิจัย </p>
               </a>
             </li>


             <li class="nav-item ">
               <a class="nav-link {{ Active::check('journal_form') }} " href="{{ route('page.journal') }}" >
                 <i class="nav-icon fa fa-map"></i>
                 <p> Published Journal </p>
               </a>
             </li>


             <li class="nav-item ">
               <a class="nav-link {{ Active::check('util_form') }} " href="{{ route('page.util') }}" >
                 <i class="nav-icon fas fa-tree"></i>
                 <p> Utilization </p>
               </a>
             </li>



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
