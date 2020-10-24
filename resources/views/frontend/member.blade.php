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
            <div class="row">
              <div class="col-md-4 col-4">
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>150</h3>
                    <p> หัวข้อ ??? </p>
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
                    <p> หัวข้อ ??? </p>
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
                    <p> หัวข้อ ??? </p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
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
                  <h3 class="card-title"> แบบฟอร์มลงทะเบียน </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-info btn-sm" aria-expanded="true" data-card-widget="collapse" data-toggle="tooltip">
                      <i class="fas fa-users"> เพิ่มสมาชิก </i></button>
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
                      <lebel for="prefix">คำนำหน้าชื่อ</lebel>
                      <select class="form-control" id="prefix" name="prefix" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="นางสาว">นางสาว</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group">
                      <lebel for="fname_th">ชื่อ (ภาษาไทย)</lebel>
                      <input type="text" class="form-control" name="fname_th" placeholder="" required>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-group">
                      <lebel for="lname_th">นามสกุล (ภาษาไทย)</lebel>
                      <input type="text" class="form-control" name="lname_th" placeholder="" required>
                    </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
            <!-- Blank -->
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <lebel for="fname_en">ชื่อ (ภาษาอังกฤษ)</lebel>
                    <input type="text" class="form-control" name="fname_en" placeholder="" required>
                  </div>
                </div>

                <div class="col-md-5">
                  <div class="form-group">
                    <lebel for="lname_en">นามสกุล (ภาษาอังกฤษ)</lebel>
                    <input type="text" class="form-control" name="lname_en" placeholder="" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <lebel for="gender">เพศ</lebel>
                    <select class="form-control" id="gender" name="gender" required>
                      <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                      <option value="ชาย">ชาย</option>
                      <option value="หญิง">หญิง</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <lebel for="birthdate">วัน/เดือน/ปีเกิด</lebel>
                    <input type="date" class="form-control" name="birthdate" placeholder="" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <lebel for="cid">เลขบัตรประจำตัวประชาชน</lebel>
                    <input type="text" class="form-control" name="cid" placeholder="X-XXX-XXXXX-XX-X" maxlength="13" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lebel for="nrms_id">รหัสนักวิจัย (ถ้ามี)</lebel>
                    <input type="text" class="form-control" name="nrms_id" placeholder="" maxlength="30">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <lebel for="orcid_id">เลขบัตรประจำตัวนักวิจัย (ถ้ามี)</lebel>
                    <input type="text" class="form-control" name="orcid_id" placeholder="" maxlength="30">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lebel for="position">ตำแหน่ง</lebel>
                    <select class="form-control" id="position" name="position" required>
                      <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                      <option value="นายแพทย์">นายแพทย์</option>
                      <option value="นักวิชาการสาธารสุข">นักวิชาการสาธารสุข</option>
                      <option value="นักวิชาการคอมพิวเตอร์">นักวิชาการคอมพิวเตอร์</option>
                    </select>
                  </div>
                </div>

                 <div class="col-md-6">
                    <div class="form-group">
                      <lebel for="edu_class">ระดับการศึกษาสูงสุด</lebel>
                      <select class="form-control" id="edu_class" name="edu_class" required>
                        <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                      </select>
                    </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lebel for="dep_id">หน่วยงาน</lebel>
                    <select class="form-control" id="dep_id" name="dep_id" required>
                      <option value="ไม่ระบุ">-- โปรดระบุ --</option>
                      <option value="หน่วยงาน A">หน่วยงาน A</option>
                      <option value="หน่วยงาน B">หน่วยงาน B</option>
                      <option value="หน่วยงาน C">หน่วยงาน C</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <lebel for="dep_address">ที่อยู่หน่วยงาน (ที่สามารถติดต่อได้)</lebel>
                    <input type="text" class="form-control" name="dep_address" placeholder="">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lebel for="email">อีเมล</lebel>
                    <input type="email" class="form-control" name="email" placeholder="-- โปรดระบุ --" required>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <lebel for="tel">เบอร์โทรศัพท์</lebel>
                    <input type="text" class="form-control" name="tel" placeholder="-- โปรดระบุ --" maxlength="10" required>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <lebel for="password">กำหนดรหัสผ่าน</lebel>
                    <input type="password" class="form-control" name="password" placeholder="8 ตัวอักษร" maxlength="8" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="file">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>

                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
              </div><br>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <div class="form-check text-center">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ตรวจสอบความถูกต้อง</label>
                  </div>
                  </div>
                </div><br>

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
                <h5>รายชื่อสมาชิก</h5>
                <table id="example" class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Project Name
                            </th>
                            <th style="width: 30%">
                                Team Members
                            </th>
                            <th>
                                Project Progress
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    USER 01
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar04.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                                    </div>
                                </div>
                                <small>
                                    57% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
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
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    USER 02
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar04.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                                    </div>
                                </div>
                                <small>
                                    57% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
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
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    USER 03
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="47" aria-volumemin="0" aria-volumemax="100" style="width: 47%">
                                    </div>
                                </div>
                                <small>
                                    47% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
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
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    USER 04
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="77" aria-volumemin="0" aria-volumemax="100" style="width: 77%">
                                    </div>
                                </div>
                                <small>
                                    77% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
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
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    USER 05
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar04.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="60" aria-volumemin="0" aria-volumemax="100" style="width: 60%">
                                    </div>
                                </div>
                                <small>
                                    60% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
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
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    USER 06
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar04.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="12" aria-volumemin="0" aria-volumemax="100" style="width: 12%">
                                    </div>
                                </div>
                                <small>
                                    12% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
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
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    USER 07
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar04.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-volumenow="35" aria-volumemin="0" aria-volumemax="100" style="width: 35%">
                                    </div>
                                </div>
                                <small>
                                    35% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
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
