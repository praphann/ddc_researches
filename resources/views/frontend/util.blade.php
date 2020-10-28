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
          </div><!-- /.container-fluid -->
        </div>
  <!-- /.content-header -->

<!-- START CONTENT  BOX ------------------------------------------------------->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
              <div class="col-md-12 col-12">
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3> 150 </h3><br>
                    <p> โครงการที่นำไปใช้ประโยชน์ทั้งหมด </p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <!-- <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-3">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3> 53 <sup style="font-size: 20px"> % </sup></h3><br>
                    <p> โครงการที่นำไปใช้ประโยชน์เชิงวิชาการ </p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-brain"></i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
              </div>

              <div class="col-md-3 col-3">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3> 44 </h3><br>
                    <p> โครงการที่นำไปใช้ประโยชน์เชิงสังคม/ชุมชน </p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-users"></i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
              </div>

              <div class="col-md-3 col-3">
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3> 23 </h3><br>
                    <p> โครงการที่นำไปใช้ประโยชน์เชิงนโยบาย </p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-chalkboard-teacher"></i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
              </div>

              <div class="col-md-3 col-3">
                <div class="small-box bg-purple">
                  <div class="inner">
                    <h3> 65 </h3><br>
                    <p> โครงการที่นำไปใช้ประโยชน์เชิงพาณิชย์ </p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-donate"></i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
              </div>
            </div>
            <br>
<!-- END CONTENT  BOX --------------------------------------------------------->

<!-- START FORM  INSERT MEMBER ------------------------------------------------>
          <section class="content">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title"> แบบฟอร์มการนำไปใช้ประโยชน์ </h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-info btn-sm" aria-expanded="true" data-card-widget="collapse" data-toggle="tooltip">
                      <i class='fab fa-stack-overflow' style='font-size:18px'> เพิ่มข้อมูล </i>
                    <!-- TABLE HEAD  BUTTON REMOVE ------------------------------>
                    <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button> -->
                  </div>
                </div>

              <div class="card-body">
                <form role="form">

              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <lebel for="prefix"> โครงการที่ </lebel>
                      <select class="form-control" id="prefix" name="prefix" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="PRO_01">PRO_01</option>
                        <option value="PRO_02">PRO_02</option>
                        <option value="PRO_03">PRO_03</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <lebel for="fname_th"> ชื่อโครงการ (th-en) </lebel>
                      <input type="text" class="form-control" name="fname_th" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <lebel for="lname_th"> การนำไปใช้ประโยชน์ </lebel>
                      <select class="form-control" id="lname_th" name="lname_th" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="เชิงวิชาการ">เชิงวิชาการ</option>
                        <option value="เชิงสังคม/ชุมชน">เชิงสังคม/ชุมชน</option>
                        <option value="เชิงนโยบาย">เชิงนโยบาย</option>
                        <option value="เชิงพาณิชย์">เชิงพาณิชย์</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <lebel for="files"> แนบไฟล์ </lebel>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="files">
                        <label class="custom-file-label" for="files">Choose file</label>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <lebel for="prefix"> โครงการที่ </lebel>
                      <select class="form-control" id="prefix" name="prefix" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="PRO_01">PRO_01</option>
                        <option value="PRO_02">PRO_02</option>
                        <option value="PRO_03">PRO_03</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <lebel for="fname_th"> ชื่อโครงการ (th-en) </lebel>
                      <input type="text" class="form-control" name="fname_th" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <lebel for="lname_th"> การนำไปใช้ประโยชน์ </lebel>
                      <select class="form-control" id="lname_th" name="lname_th" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="เชิงวิชาการ">เชิงวิชาการ</option>
                        <option value="เชิงสังคม/ชุมชน">เชิงสังคม/ชุมชน</option>
                        <option value="เชิงนโยบาย">เชิงนโยบาย</option>
                        <option value="เชิงพาณิชย์">เชิงพาณิชย์</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <lebel for="files"> แนบไฟล์ </lebel>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="files">
                        <label class="custom-file-label" for="files">Choose file</label>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <lebel for="prefix"> โครงการที่ </lebel>
                      <select class="form-control" id="prefix" name="prefix" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="PRO_01">PRO_01</option>
                        <option value="PRO_02">PRO_02</option>
                        <option value="PRO_03">PRO_03</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <lebel for="fname_th"> ชื่อโครงการ (th-en) </lebel>
                      <input type="text" class="form-control" name="fname_th" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <lebel for="lname_th"> การนำไปใช้ประโยชน์ </lebel>
                      <select class="form-control" id="lname_th" name="lname_th" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="เชิงวิชาการ">เชิงวิชาการ</option>
                        <option value="เชิงสังคม/ชุมชน">เชิงสังคม/ชุมชน</option>
                        <option value="เชิงนโยบาย">เชิงนโยบาย</option>
                        <option value="เชิงพาณิชย์">เชิงพาณิชย์</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <lebel for="files"> แนบไฟล์ </lebel>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="files">
                        <label class="custom-file-label" for="files">Choose file</label>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <lebel for="prefix"> โครงการที่ </lebel>
                      <select class="form-control" id="prefix" name="prefix" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="PRO_01">PRO_01</option>
                        <option value="PRO_02">PRO_02</option>
                        <option value="PRO_03">PRO_03</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <lebel for="fname_th"> ชื่อโครงการ (th-en) </lebel>
                      <input type="text" class="form-control" name="fname_th" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <lebel for="lname_th"> การนำไปใช้ประโยชน์ </lebel>
                      <select class="form-control" id="lname_th" name="lname_th" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="เชิงวิชาการ">เชิงวิชาการ</option>
                        <option value="เชิงสังคม/ชุมชน">เชิงสังคม/ชุมชน</option>
                        <option value="เชิงนโยบาย">เชิงนโยบาย</option>
                        <option value="เชิงพาณิชย์">เชิงพาณิชย์</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <lebel for="files"> แนบไฟล์ </lebel>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="files">
                        <label class="custom-file-label" for="files">Choose file</label>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <lebel for="prefix"> โครงการที่ </lebel>
                      <select class="form-control" id="prefix" name="prefix" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="PRO_01">PRO_01</option>
                        <option value="PRO_02">PRO_02</option>
                        <option value="PRO_03">PRO_03</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <lebel for="fname_th"> ชื่อโครงการ (th-en) </lebel>
                      <input type="text" class="form-control" name="fname_th" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-group">
                      <lebel for="lname_th"> การนำไปใช้ประโยชน์ </lebel>
                      <select class="form-control" id="lname_th" name="lname_th" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="เชิงวิชาการ">เชิงวิชาการ</option>
                        <option value="เชิงสังคม/ชุมชน">เชิงสังคม/ชุมชน</option>
                        <option value="เชิงนโยบาย">เชิงนโยบาย</option>
                        <option value="เชิงพาณิชย์">เชิงพาณิชย์</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <lebel for="files"> แนบไฟล์ </lebel>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="files">
                        <label class="custom-file-label" for="files">Choose file</label>
                      </div>
                    </div>
                  </div>
              </div>

              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <div class="form-check text-center">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ตรวจสอบความถูกต้อง</label>
                  </div>
                  </div>
                </div>
                <br>

                <br>
                <div class="col-md-12">
                  <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-success">บันทึก</button>
                  </div>
                  </div>
                </div>
              </div>

                </form>
              </div>
            </div>
          </section>
<!-- END FORM  INSERT MEMBER -------------------------------------------------->

<!-- START TABLE LIST MEMBER -------------------------------------------------->
          <section class="content">
            <div class="card">
              <div class="card-body">
                <h5>รายชื่อโครงการที่นำไปใช้ประโยชน์</h5>
                <table style="width:100%" id="example" class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="text-align:center">ลำดับที่</th>
                            <th style="text-align:center">รหัสโครงการ</th>
                            <th style="text-align:center">ชื่อโครงการ</th>
                            <th style="text-align:center">การนำไปใช้ประโยชน์</th>
                            <th style="text-align:center">สถานะการตรวจสอบ</th>
                            <th style="text-align:center">จัดการข้อมูล</th>
                        </tr>
                    </thead>

                    <tbody style="width:100%" id="example" class="table table-striped projects">
                        <tr>
                            <td  style="text-align:center">
                                    1
                            </td>
                            <td  style="text-align:center">
                                    PRO_01
                            </td>
                            <td>
                                <a>
                                    โครงการ ก
                                </a>
                                <br/>
                                <small>
                                    Project A
                                </small>
                            </td>
                            <td  style="text-align:center">
                              <a>
                                    เชิงวิชาการ
                              </a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-warning">รอการอนุมัติ</span>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td  style="text-align:center">
                                    2
                            </td>
                            <td  style="text-align:center">
                                    PRO_01
                            </td>
                            <td>
                                <a>
                                    โครงการ ก
                                </a>
                                <br/>
                                <small>
                                    Project A
                                </small>
                            </td>
                            <td  style="text-align:center">
                              <a>
                                    เชิงพาณิชย์
                              </a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-danger">ไม่อนุมัติ</span>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td  style="text-align:center">
                                    3
                            </td>
                            <td  style="text-align:center">
                                    PRO_02
                            </td>
                            <td>
                                <a>
                                    โครงการ ข
                                </a>
                                <br/>
                                <small>
                                    Project B
                                </small>
                            </td>
                            <td  style="text-align:center">
                              <a>
                                    เชิงนโยบาย
                              </a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-warning">รอการอนุมัติ</span>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td  style="text-align:center">
                                    4
                            </td>
                            <td  style="text-align:center">
                                    PRO_03
                            </td>
                            <td>
                                <a>
                                    โครงการ ค
                                </a>
                                <br/>
                                <small>
                                    Project C
                                </small>
                            </td>
                            <td  style="text-align:center">
                              <a>
                                    เชิงสังคม/ชุมชน
                              </a>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">อนุมัติแล้ว</span>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </section>

        </div>
      </section>
<!-- END TABLE LIST MEMBER ---------------------------------------------------->

@stop('contents')

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
        'copy', 'csv', 'excel', 'print'
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
