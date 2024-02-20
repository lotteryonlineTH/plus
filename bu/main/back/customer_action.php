<?php
include_once('./function.php');
$objCon = connectDB();

$data = $_POST;
$name_customer = $data['name_customers'];

$numbet_phone_customer = $data['numbet_phone_customers'];

$namesell = $data['sellname'];
$numbet_idsell = $data['numbet_idsells'];



$strSQLcase = "SELECT * FROM sellproducts WHERE namesell='$namesell'";
$objQuerycase = mysqli_query($objCon, $strSQLcase);

$rowcase = mysqli_num_rows($objQuerycase);
$rowcasess = mysqli_fetch_assoc($objQuerycase);


$strSQLcaseUPDATE = "SELECT * FROM numbetall ";
$objQuerycaseUPDATE = mysqli_query($objCon, $strSQLcase);

$rowcaseUPDATE = mysqli_num_rows($objQuerycaseUPDATE);
$rowcasessUPDATE = mysqli_fetch_assoc($objQuerycaseUPDATE);





$strSQLmain = "INSERT INTO
sellproducts(
    `namesell`,
    `numbet_idsell`,
    `numbet_phone_customer`,
    `name_customer`,
    `statue_numbet_id`

) VALUES (
    '$namesell',
    '$numbet_idsell',
    '$numbet_phone_customer',
    '$name_customer',
    '1'
)";




$strSQLUPDATE = "UPDATE `numbetall` SET `numbet_id`='$numbet_idsell',`status`='1' WHERE `numbet_id`='$numbet_idsell'";











$objQuery = mysqli_query($objCon, $strSQLmain) or die(mysqli_error($objCon));
$objQuery = mysqli_query($objCon, $strSQLUPDATE) or die(mysqli_error($objCon));
if ($objQuery) {
    echo '<script>alert("บันทึกข้อมูลลูกค้าสำเร็จค่ะ");window.location="index.php";</script>';
}
else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="PS.php";</script>';
}
