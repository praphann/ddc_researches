@extends('layout.main')


@section('css-custom')
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@stop('css-custom')


@section('contents')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active"> ข้อมูลโครงการวิจัย </li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-4 col-4">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p> โครงการวิจัยที่ทำเสร็จทั้งหมด </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-md-4 col-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
              <p> โครงการวิจัยที่เป็นผู้วิจัยหลัก </p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-md-4 col-4">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>
              <p> โครงการวิจัยที่ตีพิมพ์ทั้งหมด </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
      </div>
      <br>




      <!-- START TABLE RESEARCH PROJECT -------------------------------------------------->
            <section class="content">
              <div class="card">
                <div class="card card-secondary">
                  <div class="card-header">
                    <h3 class="card-title"> รายชื่อสมาชิก </h3>
                  </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="example" class="table table-striped projects">
                        <thead>
                            <tr>
                              <th> ลำดับ </th>
                              <th> ชื่อโครงการ </th>
                              <th> ปี พ.ศ.ที่เริ่ม </th>
                              <th> ปี พ.ศ.ที่เสร็จ </th>
                              <th> ตีพิมพ์ </th>
                              <th> สถานะการตรวจสอบ </th>
                              <th>  </th>

                              <!-- <th style="width: 1%"> # </th>
                              <th style="width: 20%">Project Name</th>
                              <th style="width: 30%">Team Members</th>
                              <th>Project Progress</th>
                              <th style="width: 8%" class="text-center">Status</th>
                              <th style="width: 20%"> </th> -->
                            </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>
                            <td>  </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-success btn-sm" href="#">
                                  <i class="fas fa-folder"></i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                  <i class="fas fa-pencil-alt"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                  <i class="fas fa-trash"></i>
                                    Attach files
                                </a>
                            </td>

                            <!-- <td class="td-actions text-center">
                              <a type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Edit" href="#">
                                  <i class="material-icons">edit</i>
                              </a>

                              <button type="button" class="btn btn-danger" title="Delete" onclick="#">
                                  <i class="material-icons">delete</i>
                              </button>
                            </td> -->
                            </tr>

                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </section>
      <!-- END TABLE RESEARCH PROJECT -------------------------------------------------->

      </div>
  </section>

@stop


<!-- SCRIPT -->
@section('js-custom-script')

<!-- <script>
  $(function () {
      $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
      $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->

<script type="text/javascript" class="init">
  $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [
        // 'copy', 'csv',
        'excel', 'print'
      ]
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>

@stop('js-custom-script')


@section('js-custom')
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
@stop('js-custom')
