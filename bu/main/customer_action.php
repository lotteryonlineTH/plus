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

$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
//เดือนภาษาไทย
$ThMonth = array ( "01", "02", "03", "04","05", "06", "07", "08","09", "10", "11", "12");
$sums="";

$myDATE = date("Y-m-d"); //อาจมาจากฐานข้อมูล
$months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
$dayss = date("d",strtotime($myDATE)); // ค่าวันที่(1-31)
 date_default_timezone_set('asia/bangkok');
  $years = date("Y",strtotime($myDATE))+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.
$datetimes = date('H:i:s');

$sums=$dayss."/".$ThMonth[$months]."/".$years." ".$datetimes;



$sum=

$strSQLmain = "INSERT INTO
sellproducts(
    `namesell`,
    `numbet_idsell`,
    `numbet_phone_customer`,
    `name_customer`,
    `statue_numbet_id`,
    `times_u`

) VALUES (
    '$namesell',
    '$numbet_idsell',
    '$numbet_phone_customer',
    '$name_customer',
    '1',
    '$sums'
)";




$strSQLUPDATE = "UPDATE `numbetall` SET `numbet_id`='$numbet_idsell',`status`='1' WHERE `numbet_id`='$numbet_idsell'";











$objQuery = mysqli_query($objCon, $strSQLmain) or die(mysqli_error($objCon));
$objQuery = mysqli_query($objCon, $strSQLUPDATE) or die(mysqli_error($objCon));
if ($objQuery) {
    echo '<script>alert("บันทึกข้อมูลลูกค้าสำเร็จค่ะ");window.location="index.php";</script>';

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "THCKhuwUQxaqbA3MxSJAOIxfGvKB4APIaObGztZEgO7";
	$sMessage = $namesell."ขายเลข".$numbet_idsell." ลูกค้า ".$name_customer." เบอร์โทรลูกค้า ".$numbet_phone_customer." วันที่ซื้อ ".$sums;




	$chOne = curl_init();
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt( $chOne, CURLOPT_POST, 1);
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage);
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec( $chOne );

	//Result error
	if(curl_error($chOne))
	{
		echo 'error:' . curl_error($chOne);
	}
	else {
		$result_ = json_decode($result, true);

	}
	curl_close( $chOne );


}
else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="PS.php";</script>';
}
