<?php
include_once('./function.php');
$objCon = connectDB();

$data = $_POST;

$folder = 'assets/images/P3';
delAllFileInfolder($folder);
if (is_dir($folder)&&$folder!='') {
	rmdir($folder);
}
function delAllFileInfolder($folder=''){
	if (is_dir($folder)&&$folder!='') {
		//Get a list of all of the file names in the folder.
		$files = glob($folder . '/*');

		//Loop through the file list.
		foreach($files as $file){
			//Make sure that this is a file and not a directory.
			if(is_file($file)){
				//Use the unlink function to delete the file.
				unlink($file);
			}
		}
	}
}

mkdir("assets/images/P3");


$strSQL = "DELETE FROM numbetall";
$objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));


$strSQLall = "DELETE FROM sellproducts";
$objQuerys = mysqli_query($objCon, $strSQLall) or die(mysqli_error($objCon));


//$strSQL = "DELETE FROM numbetall";


//$objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));
//if ($objQuery) {
    echo '<script>alert("ลบข้อมูลลอตเตอรี่ทั้งหมดสำเร็จค่ะ");window.location="addimglottery.php";</script>';
//} else {
//    echo '<script>alert("พบข้อผิดพลาด");window.location="register.php";</script>';
//}