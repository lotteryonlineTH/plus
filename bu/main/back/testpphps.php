

<?php



include_once("./function.php");
$objCon = connectDB(); // เชื่อมต่อฐานข้อมูล
$strSQLcase = "SELECT COUNT(*) A FROM numbetall";
$objQuerycase = mysqli_query($objCon, $strSQLcase);

$rowcase = mysqli_num_rows($objQuerycase);
$f = mysqli_fetch_assoc($objQuerycase);
















if(!empty($_FILES)){
$path = "assets/images/P3/";
$name = $_FILES['upload']['name'];
$tmp = $_FILES['upload']['tmp_name'];
$aadas="product_0".$f['A'];
$numbetsproduct=$f['A'];
	if(strlen($name)){
	list($txt, $ext) = explode(".", $name);
				$new_file_name = $aadas.".".$ext;
				move_uploaded_file($tmp,$path.$new_file_name);

            $data = $_POST;
            $u_id = $aadas;
            $n_name = $data['upload_name'];



            $strSQL = "INSERT INTO
            numbetall(
                `uid`,
                `numbet_id`,
                `status`

            ) VALUES (
                '$numbetsproduct',
                '$n_name',
                '0'
            )";
            $objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));
if ($objQuery) {

    echo '<script>alert("เพิ่มสำเร็จค่ะ");window.location="addimglottery.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="register.php";</script>';
}
	}
}














?>
