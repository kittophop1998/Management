<html lang="en">

<!-- Logo accl -->
<link rel="shortcut icon" type="image/x-icon" href="https://www.img.in.th/images/7722f7aaabce1aff9a3e2175d5d8d7ca.png" />

  <title>ระบบจัดการภายใน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Accellum Technology</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li class="active"><a href="/leave">บันทึกการลา</a></li>
      <li><a href="/keepvender">เก็บรูป สินค้า</a></li>
      <!-- <li><a href="#">Page 3</a></li> -->
    </ul>
  </div>
</nav>

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center"> ฟอร์มบันทึกการลา </h1>
                    <hr>
                </div>
                <div class="col-sm-12" style="background-color: #f7f3bc;">
                    <br>
                    <form action="" method="post">
                        <div class="form-group row">
                            <label class="col-2 col-sm-2">
                                ประเภท
                            </label>
                            <div class="col-10 col-sm-4">
                                <select name="leave_type" class="form-control" required>
                                    <option value="">-เลือกประเภทการลา-</option>
                                    <option value="1">-ลาป่วย</option>
                                    <option value="2">-ลากิจ</option>
                                    <option value="3">-ลาพักผ่อน</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-sm-2">
                                เรียน
                            </label>
                            <div class="col-10 col-sm-4">
                                <input type="text" name="leave_boss"  readonly class="form-control" value="หัวหน้าแผนก">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-sm-2">
                                ข้าพเจ้า
                            </label>
                            <div class="col-10 col-sm-4">
                                <input type="text" name="emp_name"  readonly class="form-control" value="นายทดสอบ ระบบ">
                            </div>
                            <label class="col-2 col-sm-1">
                                ตำแหน่ง
                            </label>
                            <div class="col-10 col-sm-4">
                                <input type="text" name="emp_position"  readonly class="form-control" value="ทำทุกอย่าง">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-sm-2">
                                สาเหตุ
                            </label>
                            <div class="col-10 col-sm-5">
                                <textarea name="leave_reason" class="form-control" required placeholder="ระบุสาเหตุการลา"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-sm-2">
                                กำหนด
                            </label>
                            <div class="col-3 col-sm-2">
                                <input type="number" name="leave_day_total"  required min="0" class="form-control" value="0">
                            </div>
                            <label class="col-1 col-sm-1">
                                วัน
                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">
                                ตั้งแต่
                            </label>
                            <div class="col-sm-3">
                                <input type="date" name="leave_day_begin"  required  class="form-control">
                            </div>
                            <label class="col-sm-1">
                                ถึง
                            </label>
                            <div class="col-sm-3">
                                <input type="date" name="leave_day_end"  required  class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">
                                ติดต่อ
                            </label>
                            <div class="col-sm-5">
                                <textarea name="emp_address" class="form-control" required placeholder="ระหว่างลาติดต่อได้ที่"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2">
                            </label>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-success" style="width: 100%">บันทึก</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12" style="margin-top: 20px;">
                    <center> Accellum Technology <br>
                    เป็นบริษัทแห่งนวัตกรรมการการไขปัยหา <br>
                    <a href="https://www.accellum.com" target="_blank">ACCL</a>
                    ||
                    <a href="https://youtube.com" target="_blank">Youtube</a>
                    </center>
                </div>
            </div>
        </div>
