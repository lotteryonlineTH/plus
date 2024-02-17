<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: mainchacklottery.php"); // redirect ไปยังหน้า index.php
    exit;
}

include_once("./function.php");
$objCon = connectDB(); // เชื่อมต่อฐานข้อมูล
$username = mysqli_real_escape_string($objCon, $_POST['username']); // รับค่า username
$password = mysqli_real_escape_string($objCon, $_POST['password']); // รับค่า password

$strSQL = "SELECT * FROM loginadmin WHERE names = '$username' AND passwords = '$password'";
$objQuery = mysqli_query($objCon, $strSQL);
$row = mysqli_num_rows($objQuery);


if($row) {


   echo '<script>window.location="mainchacklottery.php";</script>';

} else {
    echo '<script>alert("username หรือ password ไม่ถูกต้อง!!");window.location="loginadmin.php";</script>';
}