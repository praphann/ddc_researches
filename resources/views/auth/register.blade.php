<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<!-- Google Font: Source Sans Pro -->
<link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>

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

</head>

<!-- START Register MEMBER ---------------------------------------------------->

<br>
<!-- BLANK -->
</br>

<div class="content-header">
  <div class="container text-center">
    <h3><b> Register </b> DDC Researcher </h3>
  </div>
</div>

<section class="content">
<div class="container">

<div class="row justify-content-center">
  <div class="col-md-12">
    <div class="card card-gray">
      <h5 class="card-header"> แบบฟอร์มลงทะเบียน </h5>

    <form role="form">
    <div class="card-body">
      <div class="row">
          <div class="col-md-2">
            <div class="form-group">
            <b><lebel for="prefix">คำนำหน้าชื่อ</lebel></b>
            <select  class="form-control" id="prefix" name="prefix" required>
                <option value='0'>-- โปรดระบุ --</option>
                @foreach($prefix as $val)
                <option value="{{ $val }}" {{ (collect(old('$val'))->contains($val)) ? 'selected':'' }}>{{ $val }}</option>
                @endforeach
            </select>
            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group">
            <b><lebel for="fname_th">ชื่อ (ภาษาไทย)</lebel></b>
            <input type="text" class="form-control" name="fname_th" placeholder="ชื่อ (ภาษาไทย)" required>
            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group">
            <b><lebel for="lname_th">นามสกุล (ภาษาไทย)</lebel></b>
            <input type="text" class="form-control" name="lname_th" placeholder="นามสกุล (ภาษาไทย)" required>
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
            <b><lebel for="fname_en">ชื่อ (ภาษาอังกฤษ)</lebel></b>
            <input type="text" class="form-control" name="fname_en" placeholder="ชื่อ (ภาษาอังกฤษ)" required>
            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group">
            <b><lebel for="lname_en">นามสกุล (ภาษาอังกฤษ)</lebel></b>
            <input type="text" class="form-control" name="lname_en" placeholder="นามสกุล (ภาษาอังกฤษ)" required>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
            <b><lebel for="gender">เพศ</lebel></b>
            <select  class="form-control" id="gender" name="gender" required>
                <option value='0'>-- โปรดระบุ --</option>
                @foreach($gender as $val)
                <option value="{{ $val }}" {{ (collect(old('$val'))->contains($val)) ? 'selected':'' }}>{{ $val }}</option>
                @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <b><lebel for="birthdate">ปี พ.ศ. เกิด</lebel></b>
            <input type="text" id="datepicker8"  placeholder="วัน/เดือน/ปีเกิด" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="cid">เลขบัตรประจำตัวประชาชน</lebel></b>
            <input type="text" class="form-control" name="cid" placeholder="X-XXX-XXXXX-XX-X" maxlength="13" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="nrms_id">รหัสนักวิจัย (ถ้ามี)</lebel></b>
            <input type="text" class="form-control" name="nrms_id" placeholder="รหัสนักวิจัย" maxlength="30">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="orcid_id">เลขบัตรประจำตัวนักวิจัย (ถ้ามี)</lebel></b>
            <input type="text" class="form-control" name="orcid_id" placeholder="เลขบัตรประจำตัวนักวิจัย" maxlength="30">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="position">ตำแหน่ง</lebel></b>
            <input type="text" class="form-control" autocomplete="off" id="position"
                   name="position" value="{{ old('position') }}" placeholder="-- โปรดระบุ --" required>
            </div>
        </div>

         <div class="col-md-6">
            <div class="form-group">
              <b><lebel for="edu_class">ระดับการศึกษาสูงสุด</lebel></b>
              <select  class="form-control" id="edu_class" name="edu_class" required>
                  <option value='0'>-- โปรดระบุ --</option>
                  @foreach($edu_class as $val)
                  <option value="{{ $val }}" {{ (collect(old('$val'))->contains($val)) ? 'selected':'' }}>{{ $val }}</option>
                  @endforeach
              </select>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="dep_id">หน่วยงาน</lebel></b>
            <select class="form-control" id="dep_id" name="dep_id" required>
              <option value="0">-- โปรดระบุ --</option>
              @foreach($dep as $val)
              <option value="{{ $val->id }}" {{ (collect(old('dep'))->contains($val->id)) ? 'selected':'' }}>{{ $val->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="dep_address">ที่อยู่หน่วยงาน (ที่สามารถติดต่อได้)</lebel></b>
            <textarea type="text" class="form-control" name="dep_address" placeholder="ที่อยู่หน่วยงาน"></textarea>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="email">E-Mail</lebel></b>
            <input type="email" class="form-control" name="email" placeholder="อีเมล" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <b><lebel for="tel">เบอร์โทรศัพท์</lebel></b>
            <input type="text" class="form-control" name="tel" maxlength="10" placeholder="เบอร์โทรศัพท์" required>
          </div>
        </div>
      </div>


      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <b><lebel for="password">Password</lebel></b>
            <input type="password" class="form-control" maxlength="8" placeholder="Password 8 Max" required>
            </div>
          </div>

        <div class="col-md-6">
          <div class="form-group">
          <b><lebel for="conpassword">Confirm Password</lebel></b>
          <input type="password" class="form-control" maxlength="8" placeholder="Retype password 8 Max" required>
          </div>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-mb-12 mr-auto ml-auto">
          <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-mb-12 mr-auto ml-auto">
          <div class="form-group">
            <a href="{{ route('login') }}" class="text-center"> >> ฉันเป็นสมาชิกแล้ว << </a>
          </div>
        </div>
      </div>
    </div>
  </form>
  </div>
</div>
</div>
</div>
</section>

<!-- END Register MEMBER ------------------------------------------------------>



<!-- SCRIPT ------------------------------------------------------------------->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
    $('#datepicker8').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

<script src="{{ asset('plugins/autocomplete/autocomplete.js') }}"></script>
<script>
$(document).ready(function() {
    var position = "{{$position}}".split("|");
    autocomplete(document.getElementById("position"), position );
});
</script>

</html>
