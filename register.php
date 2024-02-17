<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="register-box bg-light p-5 rounded mt-3">
            <h1>ลงทะเบียน</h1>
            <form method="post" action="register_action.php">
                <div class="mb-3">
                    <label for="u_fullname" class="form-label">ชื่อ - สกุล</label>
                    <input type="text" class="form-control" id="u_fullname" name="u_fullname" placeholder="ชื่อ - สกุล" required>
                </div>
                <div class="mb-3">
                    <label for="เบอร์โทร" class="form-label">เบอร์โทร</label>
                    <input type="text" inputmode="numeric" maxlength="10"class="form-control" id="u_username" name="u_username" placeholder="เบอร์โทร" required>
                </div>
                <div class="mb-3">
                    <label for="u_password" class="form-label">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="u_password" name="u_password" placeholder="รหัสผ่าน" required>
                </div>
                  <div class="mb-3">
                    <label for="u_account" class="form-label">ธนาคาร</label>
                    <select id="u_account" name="u_account" class="form-select">
                        <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                        <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                        <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                        <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                        <option value="ธนชาต">ธนชาต</option>
                        <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="number_account" class="form-label">เลขบัญชี</label>
                    <input type="text" inputmode="numeric" maxlength="13" class="form-control" id="number_account" name="number_account" placeholder="เลขบัญชี" required>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">ลงทะเบียน</button>
                <a href="login.php" class="w-100 btn btn-lg btn-danger mt-3">ยกเลิก</a>
            </form>
        </div>
    </div>
</body>

</html>