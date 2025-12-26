@extends('template.default')
@section('header','File Default')
@section('title','Workshop FORM')
@section('content')

<h1>Workshop #HTML - FORM</h1>

<form id="myForm" method="post" enctype="multipart/form-data">
    @csrf

    <!-- ชื่อ -->
    <div class="mt-3">
        <label>ชื่อ</label>
        <input id="fname" name="fname" class="form-control">
        <div class="invalid-feedback">โปรดระบุชื่อ</div>
    </div>

    <!-- สกุล -->
    <div class="mt-3">
        <label>สกุล</label>
        <input id="lname" name="lname" class="form-control">
        <div class="invalid-feedback">โปรดระบุสกุล</div>
    </div>

    <!-- วันเกิด -->
    <div class="mt-3">
        <label>วัน/เดือน/ปีเกิด</label>
        <input type="date" id="bdate" name="bdate" class="form-control">
        <div class="invalid-feedback">โปรดระบุวันเกิด</div>
    </div>

    <!-- อายุ -->
    <div class="mt-3">
        <label>อายุ</label>
        <input type="number" id="age" name="age" class="form-control">
        <div class="invalid-feedback">โปรดระบุอายุ</div>
    </div>

    <!-- เพศ -->
    <div class="mt-3">
        <label>เพศ</label><br>
        <input type="radio" name="gender" value="ชาย"> ชาย
        <input type="radio" name="gender" value="หญิง" class="ms-3"> หญิง
        <div id="genderError" class="text-danger mt-1" style="display:none;">
            โปรดเลือกเพศ
        </div>
    </div>

    <!-- รูป -->
    <div class="mt-3">
        <label>รูป</label>
        <input type="file" name="photo" class="form-control">
    </div>

    <!-- ที่อยู่ -->
    <div class="mt-3">
        <label>ที่อยู่</label>
        <textarea id="address" name="address" class="form-control" rows="3"></textarea>
        <div class="invalid-feedback">โปรดระบุที่อยู่</div>
    </div>

    <!-- สีที่ชอบ -->
    <div class="mt-3">
        <label>สีที่ชอบ</label>
        <select id="color" name="color" class="form-control" style="width:200px;">
            <option value="">-- เลือกสี --</option>
            <option>สีแดง</option>
            <option>สีฟ้า</option>
            <option>สีน้ำเงิน</option>
            <option>สีเขียว</option>
            <option>สีเหลือง</option>
            <option>สีดำ</option>
            <option>สีขาว</option>
            <option>สีชมพู</option>
            <option>สีส้ม</option>
            <option>สีม่วง</option>
            <option>สีน้ำตาล</option>
            <option>สีเทา</option>
        </select>
        <div class="invalid-feedback">โปรดเลือกสีที่ชอบ</div>
    </div>

    <!-- แนวเพลง -->
    <div class="mt-3">
        <label>แนวเพลงที่ชอบ</label><br>
        <input type="radio" name="music" value="เพื่อชีวิต"> เพื่อชีวิต
        <input type="radio" name="music" value="ลูกทุ่ง" class="ms-3"> ลูกทุ่ง
        <input type="radio" name="music" value="อื่นๆ" class="ms-3"> อื่นๆ
        <div id="musicError" class="text-danger mt-1" style="display:none;">
            โปรดเลือกแนวเพลงที่ชอบ
        </div>
    </div>

    <!-- ยินยอม -->
    <div class="mt-3">
        <input type="checkbox" id="agree" name="agree" value="1">
        ยินยอมให้เก็บข้อมูล
        <div id="agreeError" class="text-danger mt-1" style="display:none;">
            กรุณายินยอมให้เก็บข้อมูล
        </div>
    </div>

    <!-- ปุ่ม -->
    <div class="mt-4">
        <button type="reset" class="btn btn-outline-dark">Reset</button>
        <button type="button" class="btn btn-success" onclick="clickMe()">Submit</button>
    </div>

</form>
@endsection

@push('scripts')
<script>
let clickMe = function () {

    let pass = true;

    let fname = document.getElementById('fname');
    if (fname.value == "") {
        fname.classList.add('is-invalid');
        pass = false;
    } else fname.classList.remove('is-invalid');

    let lname = document.getElementById('lname');
    if (lname.value == "") {
        lname.classList.add('is-invalid');
        pass = false;
    } else lname.classList.remove('is-invalid');

    let bdate = document.getElementById('bdate');
    if (bdate.value == "") {
        bdate.classList.add('is-invalid');
        pass = false;
    } else bdate.classList.remove('is-invalid');

    let age = document.getElementById('age');
    if (age.value == "" || age.value <= 0) {
        age.classList.add('is-invalid');
        pass = false;
    } else age.classList.remove('is-invalid');

    let gender = document.querySelector('input[name="gender"]:checked');
    document.getElementById('genderError').style.display = gender ? "none" : "block";
    if (!gender) pass = false;

    let address = document.getElementById('address');
    if (address.value == "") {
        address.classList.add('is-invalid');
        pass = false;
    } else address.classList.remove('is-invalid');

    let color = document.getElementById('color');
    if (color.value == "") {
        color.classList.add('is-invalid');
        pass = false;
    } else color.classList.remove('is-invalid');

    let music = document.querySelector('input[name="music"]:checked');
    document.getElementById('musicError').style.display = music ? "none" : "block";
    if (!music) pass = false;

    let agree = document.getElementById('agree');
    document.getElementById('agreeError').style.display = agree.checked ? "none" : "block";
    if (!agree.checked) pass = false;

    if (pass) {
        document.getElementById('myForm').submit();
    }
}
</script>
@endpush
