
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- START Custom CSS+fonts this template -->
    @include('layout.css')
    @yield('css-custom-script')
    @yield('css-custom')
  <!-- END Custom Custom CSS+fonts this template -->



</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


  <!-- START of Topbar -->
    @include('layout.topbar')
  <!-- End of Topbar -->



  <!-- START of Sidebar -->
    @include('layout.sidebar')
  <!-- End of Sidebar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- START CONTENTS  -->
      @yield('contents')
    <!-- END CONTENTS  -->


  </div>
  <!-- /.content-wrapper -->



  <!-- START of Footer -->
    @include('layout.footer')
  <!-- End of Footer -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


    <!-- START Bootstrap core JS -->
      @include('layout.js')
      @yield('js-custom-script')
      @yield('js-custom')
    <!-- END Bootstrap core JS -->


  </body>
</html>
