<?php
session_start(); // เปิดใช้งาน session
if (isset($_SESSION['user_login'])) { // ถ้าเข้าระบบอยู่
    header("location: index.php"); // redirect ไปยังหน้า index.php
    exit;
}

include_once("./function.php");
$objCon = connectDB(); // เชื่อมต่อฐานข้อมูล
$username = mysqli_real_escape_string($objCon, $_POST['username']); // รับค่า username
$password = mysqli_real_escape_string($objCon, $_POST['password']); // รับค่า password

$strSQL = "SELECT * FROM user WHERE u_username = '$username' AND u_password = md5('$password')";
$objQuery = mysqli_query($objCon, $strSQL);
$row = mysqli_num_rows($objQuery);


if($row) {
    $res = mysqli_fetch_assoc($objQuery);
    $_SESSION['user_login'] = array(
        'id' => $res['u_id'],
        'fullname' => $res['u_fullname'],
        'Nunberlevel' => $res['u_level'],
        'Nunber' => $res['u_username'],
        'Accountbkk' => $res['u_account'],
        'NunberAccount' => $res['number_account']

    );


   echo '<script>window.location="index.php";</script>';
} else {
    echo '<script>alert("username หรือ password ไม่ถูกต้อง!!");window.location="login.php";</script>';
}