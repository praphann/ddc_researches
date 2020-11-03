@extends('layout.main')


@section('css-custom')
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts Style : Kanit -->
    <style>
    body {
      font-family: 'Kanit', sans-serif;
    }
    h1 {
      font-family: 'Kanit', sans-serif;
    }
    </style>
  <!-- END Fonts Style : Kanit -->

@stop('css-custom')


@section('contents')


<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"> ข้อมูลการตีพิมพ์วารสาร </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">

    <!-- START SUMMARY Total Box -->
      <div class="row">
        <div class="col-md-6 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>150</h3>
              <p> บทความตีพิมพ์ทั้งหมด </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-md-6 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
              <p> บทความผู้นิพนธ์หลักทั้งหมด </p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

      </div>
      <br>
    <!-- END SUMMARY Total Box -->



    <!-- START From Input RESEARCH PROJECT -------------------------------------------------->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"> เพิ่มข้อมูลการตีพิมพ์วารสาร </h3>
            </div>

            <!-- <form role="form"> -->
            <form method="POST" action="{{ route('register') }}">
             @csrf

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อบทความ (ภาษาไทย) </label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อบทความ (ภาษาอังกฤษ) </label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อวารสาร (ภาษาไทย) </label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อวารสาร (ภาษาอังกฤษ) </label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> ปีที่พิมพ์ </label>
                      <input type="text" class="form-control" placeholder="xxxx" name="" maxlength="4" minlength="4"
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> ฉบับที่ </label>
                      <input type="text" class="form-control" name=""
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> เล่มที่ </label>
                      <input type="text" class="form-control" name=""
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> หน้า </label>
                      <input type="text" class="form-control" placeholder="xxxx" name=""
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> เลข DOI </label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleSelect1"> การมีส่วนร่วมในบทความ </label>
                      <select class="form-control" name="">
                        <option value="" disabled="true" selected="true" >กรุณาเลือก</option>
                        <option> ผู้นิพนธ์หลัก (first-author) </option>
                        <option> ผู้นิพนธ์ร่วม (co-author) </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleSelect1"> ท่านเป็นผู้รับผิดชอบบทความ </label>
                      <select class="form-control" name="">
                        <option value="" disabled="true" selected="true" >กรุณาเลือก</option>
                        <option> ใช่ </option>
                        <option> ไม่ใช่ </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleSelect1"> ท่านเป็นผู้รับผิดชอบบทความ </label>
                      <!-- SELECT ที่ดึงมาจากฐานข้อมูล Research_form Table -->
                      <select class="form-control"  name="" >
                        <option value="" disabled="true" selected="true" >กรุณาเลือก</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-success float-right "> บันทึกข้อมูล </button>
              </div>
            </form>

          </div>
        </div>
      </div>
      <br>
    <!-- END From Input RESEARCH PROJECT -------------------------------------------------->



    <!-- START TABLE RESEARCH PROJECT -------------------------------------------------->
      <section class="content">
        <div class="card">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"> ข้อมูลบทความที่ตีพิมพ์แล้ว </h3>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="example">
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
                    <td> sdf </td>
                    <td>  sdf</td>
                    <td> sdf </td>
                    <td> sdf </td>
                    <td> sdf </td>
                    <td> sdf </td>

                    <td class="project-actions text-right">
                        <a class="btn btn-success btn-sm" href="#">
                          <i class="fas fa-folder"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-edit"></i>
                          <!-- <i class="fas fa-pencil-alt"></i> -->
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-paperclip"></i>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

<script>
    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>
@stop('js-custom')
