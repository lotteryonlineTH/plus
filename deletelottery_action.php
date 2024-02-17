<?php
include_once('./function.php');
$objCon = connectDB();

$data = $_POST;
$u_id = $data['u_account'];
$n_name = $data['name_customers'];



$strSQL = "DELETE FROM addlottery";


$objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));
if ($objQuery) {
    echo '<script>window.location="addlottery.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="register.php";</script>';
}