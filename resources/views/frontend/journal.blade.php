@extends('layout.main')


@section('css-custom')
<!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml"> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- DatePicker Style -->
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



    <!-- START From Input JOURNAL PROJECT -------------------------------------------------->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"> เพิ่มข้อมูลการตีพิมพ์วารสาร </h3>
            </div>

            <!-- <form role="form"> -->
            <form method="POST" action="{{ route('journal.insert') }}">
             @csrf

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อบทความ (ภาษาไทย) </label>
                      <input type="text" class="form-control" name="article_name_th" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อบทความ (ภาษาอังกฤษ) </label>
                      <input type="text" class="form-control" name="article_name_en" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อวารสาร (ภาษาไทย) </label>
                      <input type="text" class="form-control" name="journal_name_th" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อวารสาร (ภาษาอังกฤษ) </label>
                      <input type="text" class="form-control" name="journal_name_en" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> ปีที่พิมพ์ </label>
                      <input type="text" class="form-control" placeholder="xxxx" name="publish_years" maxlength="4" minlength="4"
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> ฉบับที่ </label>
                      <input type="text" class="form-control" name="publish_no"
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> เล่มที่ </label>
                      <input type="text" class="form-control" name="publish_volume"
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> หน้า </label>
                      <input type="text" class="form-control" placeholder="xxxx" name="publish_page"
                             onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลขเท่านั้น !'); this.value='';}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleInput1"> เลข DOI </label>
                      <input type="text" class="form-control" name="doi_number" required>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleSelect1"> การมีส่วนร่วมในบทความ </label>
                      <select class="form-control" name="contribute" required>
                        <option value="" disabled="true" selected="true"> กรุณาเลือก </option>
                        <option> ผู้นิพนธ์หลัก (first-author) </option>
                        <option> ผู้นิพนธ์ร่วม (co-author) </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleSelect1"> ท่านเป็นผู้รับผิดชอบบทความ </label>
                      <select class="form-control" name="corres" required>
                        <option value="" disabled="true" selected="true"> กรุณาเลือก </option>
                        <option> ใช่ </option>
                        <option> ไม่ใช่ </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="exampleSelect1"> บทความที่เป็นผลจากโครงการวิจัย </label>

                      <!-- SELECT ดึงข้อมูลชื่อโครงการมาจาก -> db_research_project Table -->
                      <select class="form-control" name="result_pro_name_th">
                          <option value="" disabled="true" selected="true"> กรุณาเลือก </option>
                        @foreach ($journal_5 as $value)
                          <option value = "{{ $value->id }}"> {{ $value->pro_name_th }} </option>
                        @endforeach
                      </select>

                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-success float-right" value="บันทึกข้อมูล"> บันทึกข้อมูล </button>
              </div>

            </form>

            <!-- Alert Notification -->
              @if(session()->has('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}
                </div>
              @endif
              @if (Session::has('failure'))
                <div class="alert alert-danger">
                   {{ Session::get('failure') }}
                </div>
              @endif
            <!-- END Alert Notification -->

          </div>
        </div>
      </div>
      <br>
    <!-- END From Input JOURNAL PROJECT -------------------------------------------------->




    <!-- START TABLE -> JOURNAL PROJECT -------------------------------------------------->
      <section class="content">
        <div class="card">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"> ข้อมูลบทความที่ตีพิมพ์แล้ว </h3>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="example44">
                <thead>
                    <tr>
                      <th> ลำดับ </th>
                      <th> ชื่อบทความ </th>
                      <th> ชื่อวารสาร </th>
                      <th> ตีพิมพ์ </th>
                      <th> ผู้รับผิดชอบบทความ </th>
                      <th> สถานะการตรวจสอบ </th>
                      <th class="text-right"> ACTIONS </th>
                    </tr>
                </thead>

                <tbody>
                  @foreach ($journals as $value)
                  <tr>
                    <td> {{ $value->id }} </td>
                    <td> {{ $value->article_name_th }} </td>
                    <td> {{ $value->journal_name_th }} </td>
                    <td> {{ $value->publish_years }} </td>
                    <td> {{ $value->corres }} </td>
                    <td> {{ $value->corres }} </td>

                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-folder"></i>
                            VIEW
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-edit"></i>
                            EDIT
                        </a>
                        <a class="btn btn-success btn-sm" href="#">
                          <i class="fas fa-paperclip"></i>
                            VERIFIED
                        </a>
                    </td>

                  </tr>
                  @endforeach
                </tbody>



              </table>
            </div>
          </div>
        </div>
      </section>
    <!-- END TABLE -> JOURNAL PROJECT -------------------------------------------------->

      </div>
  </section>
@stop('contents')



@section('js-custom-script')

<script type="text/javascript" class="init">
  $(document).ready(function() {
    $('#example44').DataTable({
      dom: 'Bfrtip',
      buttons: [
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
<!-- DataTables -->
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
