
<!Doctype html>
<html>
    <head>
        <title>ส่วนหัวของ  HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<style>
    body{
        font-family: "Sarabun", sans-serif;
    }
    </style>
    </head>

        <body>
        <div class= "container mt-4">
            <h1><b>Workshop #HTML - FORM</b></h1>

            <from>
                    <!--ชื่อ-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                </div>
                <div class="col">
                    <input id="fname" class="form-control">
                </div>
            </div>

                    <!--สกุล-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="lname">สกุล</label>
                </div>
                <div class="col">
                    <input id="lname" class="form-control">
                </div>
            </div>

                    <!--วันเกิด-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="bdate">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="data" id="bdata" class="form-control">
                    </div>
                </div>

                    <!--อายุ-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="age">อายุ</label>
                    </div>
                    <div class="col">
                        <input type="number" id="age" class="form-control">
                    </div>
                </div>
                
                    <!--เพศ-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label>เพศ</label>
                    </div>
                    <div class="col">
                        <input type="radio" name="gender">ชาย
                        <input type="radio" name="gender" class="ms-3">หญิง
                    </div>
                </div>
                
                    <!--รูป-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label>รูป</label>
                    </div>
                    <div class="col">
                        <input type="file">
                    </div>
                </div>

                    <!--ที่อยู่-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label form="address">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="address" class="form-control" rows="4"></textarea>
                    </div>
                </div>

                    <!--สีที่ชอบ-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select id="color" class="form-control" style="width: 150px;">
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
                    </div>
                </div>

                    <!--แนวเพลง-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                        <label for="color">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input type="radio" name="music">เพื่อชีวิต
                        <input type="radio" name="music" class="ms-3">ลูกทุ่ง
                        <input type="radio" name="music" class="ms-3">อื่นๆ
                    </div>
                </div>

                    <!--ยินยอม-->
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-4">
                    </div>
                    <div class="col">
                        <input type="checkbox">ยินยอมให้เก็บข้อมูล
                    </div>
                </div>

                <!--ปุ่ม-->
            <div class="row mt-4">
                <div class="col-sm-12 col-md-4"></div>
                <div class="col">
                    <button type="reset" class="btn" style="background-color: white; color: black; border: 1px solid black;">
                        Reset
                    </button>
                    <button type="submit" class="btn" style="background-color: green;color:white">
                        Submit
                    </button>
                </div>
            </div>
            </from>

        </dib>
        </body>
</html>
