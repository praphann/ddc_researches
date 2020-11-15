@extends('layout.main')


@section('css-custom')
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- DatePicker Style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">

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
            <li class="breadcrumb-item active"> แก้ไขข้อมูลโครงการวิจัย </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<!-- /.content-header -->

  <section class="content">
    <div class="container">

    <!-- START EDIT RESEARCH PROJECT -------------------------------------------------->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title"> แก้ไขข้อมูลโครงการวิจัย </h3>
            </div>

            <!-- <form role="form"> -->
            <form action="{{ route('journal.save') }}" method="POST">
              @csrf

              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อบทความ (ENG) </label>
                      <input type="text" class="form-control" name="article_name_en" value="{{ $data->pro_name_th }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อบทความ (TH) </label>
                      <input type="text" class="form-control" name="article_name_th" value="{{ $data->pro_name_th }}">
                    </div>
                  </div>
                </div>




                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อโครงการ (ภาษาไทย) </label>
                      <input type="text" class="form-control" name="pro_name_th" value="{{ $data->pro_name_th }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInput1"> ชื่อโครงการ (ภาษาอังกฤษ) </label>
                      <input type="text" class="form-control" name="pro_name_en" value="{{ $data->pro_name_en }}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleSelect1"> ตำแหน่งในโครงการวิจัย </label>
                      <!-- <select class="form-control" name="pro_position">
                        <option value="" disabled="true" selected="true" >กรุณาเลือก</option>
                        <option> ผู้วิจัยหลัก </option>
                        <option> ผู้วิจัยหลัก-ร่วม </option>
                        <option> ผู้วิจัยร่วม </option>
                        <option> ผู้ช่วยวิจัย </option>
                        <option> ที่ปรึกษาโครงการ </option>
                      </select> -->

                      <select class="form-control" name="pro_position">
                        <option value="{{ '1' }}"> {{ 'ผู้วิจัยหลัก' }} </option>
                        <option value="{{ '2' }}"> {{ 'ผู้วิจัยหลัก-ร่วม' }} </option>
                        <option value="{{ '3' }}"> {{ 'ผู้วิจัยร่วม' }} </option>
                        <option value="{{ '4' }}"> {{ 'ผู้ช่วยวิจัย' }} </option>
                        <option value="{{ '5' }}"> {{ 'ที่ปรึกษาโครงการ' }} </option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleSelect1"> จำนวนผู้ร่วมวิจัย </label>
                      <select class="form-control" name="pro_co_researcher" required>
                        <option value="" disabled="true" selected="true" >กรุณาเลือก</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleDatepicker1"> ปี พ.ศ. ที่เริ่มโครงการ </label>
                      <input type="text" class="form-control" name="pro_start_date" value="{{ $data->pro_start_date }}">

                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleDatepicker1"> ปี พ.ศ. ที่เสร็จสิ้นครงการ </label>
                      <input type="text" class="form-control" name="pro_end_date" value="{{ $data->pro_end_date }}">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleSelect1"> โครงการได้ตีพิมพ์ </label>
                      <select class="form-control" name="publish_status" required>
                        <option value="" disabled="true" selected="true" > กรุณาเลือก </option>
                        <option> ใช่ </option>
                        <option> ไม่ใช่ </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer">
                <a class="btn btn-danger float-left" href="{{ route('page.research') }}">
                  <i class="fas fa-arrow-alt-circle-left"></i>
                    ย้อนกลับ
                </a>

                <button type="submit" class="btn btn-success float-right" value="บันทึกข้อมูล">
                  <i class="fas fa-save"></i> &nbsp;บันทึกข้อมูล </button>
              </div>

            </form>
            <br>

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
      <!-- END EDIT RESEARCH PROJECT -------------------------------------------------->

    </div>
</section>
@stop('contents')



@section('js-custom-script')

<!-- START DatePicker Style -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yy/mm/dd',
        autoclose: true,
        todayHighlight: true
    });
</script>

<script>
    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yy/mm/dd',
        autoclose: true,
        todayHighlight: true
    });
</script>
<!-- END DatePicker Style -->

@stop('js-custom-script')
