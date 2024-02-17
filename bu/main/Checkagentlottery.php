<?php
session_start();




include_once("./function.php");
$objCon = connectDB(); // เชื่อมต่อฐานข้อมูล

include_once("./function.php");
$objCon = connectDB(); // เชื่อมต่อฐานข้อมูล


$strSQLcase = "SELECT DISTINCT namesell FROM sellproducts GROUP BY namesell;";
$objQuerycase = mysqli_query($objCon, $strSQLcase);

$rowcase = mysqli_num_rows($objQuerycase);



$strSQLcasecoun = "SELECT namesell, COUNT(namesell) AS count_word FROM sellproducts GROUP BY namesell";
$objQuerycasecoun = mysqli_query($objCon, $strSQLcasecoun);

$rowcasecoun = mysqli_num_rows($objQuerycasecoun);

$strSQLcasecounnumbet = "SELECT DISTINCT sellproducts.namesell,u_username FROM sellproducts LEFT JOIN user ON sellproducts.namesell = user.u_fullname GROUP BY namesell;";
$objQuerycasecounnumbet  = mysqli_query($objCon, $strSQLcasecounnumbet);

$rowcasecounnumbet = mysqli_num_rows($objQuerycasecounnumbet);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Profile</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

		<!--Made with love by Mutiullah Samim -->
		<!--Bootsrap 4 CDN-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!--Fontawesome CDN-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<!--Custom styles-->
		<link rel="stylesheet" type="text/css" href="styles.css">
		<style type="text/css">
			/* Made with love by Mutiullah Samim*/
		@import url('https://fonts.googleapis.com/css?family=Numans');
		html,body{

		}
		.container{
		height: 100%;
		align-content: center;
		}
		.card{
		height: 350px;
		margin-top: 100px;
		margin-bottom: auto;
		width: 800px;
		background-color: rgba(100,100,205,0.2) !important;
		}
		.social_icon span{
		font-size: 60px;
		margin-left: 10px;
		color: #FFC312;
		}
		.social_icon span:hover{
		color: white;
		cursor: pointer;
		}
		.card-header h3{
		color: white;
		}
		.social_icon{
		position: absolute;
		right: 20px;
		top: -45px;
		}
		.input-group-prepend span{
		width: 50px;
		background-color: #FFC312;
		color: black;
		border:0 !important;
		}
		input:focus{
		outline: 0 0 0 0  !important;
		box-shadow: 0 0 0 0 !important;
		}
		.remember{
		color: white;
		}
		.remember input
		{
		width: 20px;
		height: 20px;
		margin-left: 15px;
		margin-right: 5px;
		}
		.login_btn{
		color: black;
		background-color: #CACFD2;
		width: 170px;
		}
		.login_btn2{
		color: black;
		background-color: #CACFD2;
		width: 170px;
		}
		.login_btn:hover{
		color: black;
		background-color: white;
		}
		.links{
		color: white;
		}
		.links a{
		margin-left: 4px;
		}

		</style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="mainchacklottery.php"><h2>หวย <em>ออนไลน์</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="mainchacklottery.php">หน้าแรก
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Checkagentlottery.php">ตรวจสอบตัวแทนขาย</a>
              </li>
               <li class="nav-item ">
                <a class="nav-link" href="addimglottery.php">เพิ่มใบลอตเตอรี่</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="addlottery.php">เพิ่มรางวัลลอตเตอรี่</a>
              </li>
              <li class="nav-item " >
                <a class="nav-link" href="chacklottery.php">ตรวจสอบรางวัลลอตเตอรี่</a>

              <li class="nav-item">
              <a class="nav-link" href="logout_action_admin.php" >ออกจากระบบ</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">

            </div>
          </div>
        </div>
      </div>



    <div class="best-features about-features">



        </div>
      </div>
    </div>


    <footer>

    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<script>
// ถ้า url เป้น  http://localhost/index.html?ID=4
var strID = window.location.href;
// จะได้ strID  = http://localhost/index.html?ID=4
var arrID = strID.split("?");
// จะได้ arrID เป็น array มีค่า
// arrID[0]="http://localhost/index.html";
// arrID[1]="ID=4";
var dataID = arrID[1].split("=");
// แบ่งอีกครั้งด้วย =  จะได้
// dataID[0]="ID";
// dataID[1]="4";
var ID = dataID[1];
document.getElementById("demourl").innerHTML="<"+"img src="+ID+" >";


</script>

  <script>
// ถ้า url เป้น  http://localhost/index.html?ID=4
var strID = window.location.href;
// จะได้ strID  = http://localhost/index.html?ID=4
var arrID = strID.split("?");
// จะได้ arrID เป็น array มีค่า
// arrID[0]="http://localhost/index.html";
// arrID[1]="ID=4";
var dataID = arrID[1].split("=");
// แบ่งอีกครั้งด้วย =  จะได้
// dataID[0]="ID";
// dataID[1]="4";
var ID = dataID[1];
document.getElementById("demourlsent").innerHTML="<a"+" href=PS.html?ID="+ID+" class=filled-button>กดชำระเงิน";




</script>
  <script>
function myFunction() {
  alert("ฟังก์ชั่นนี้จะเปิดใช้งานเร็วๆนี้");
}
</script>
<div class="container">
 <div class="col-md-6">





                 </div>
  <center>  <h2>  รายการ </h2>

<form method="post" action="Checkagentlotteryss.php">
  <input type="text" id="name_customers"  name="name_customers" maxlength="10" placeholder="เบอร์โทร" style="width:60; height:8; font-size:35px;">
</br></br><input type="submit" value="ค้นหา"style="width:60; height:8; font-size:35px;">&nbsp;&nbsp;&nbsp;
   <input type="button" value="รีเช็ตข้อมูล" onclick="window.location='Checkagentlottery.php'"style="width:60; height:8; font-size:35px;">
</form>
</center>

			<div class="d-flex justify-content-center h-100">

				<div class="card">

					<div class="card-body">
						<form ame="formlogin" action="Checkagentlotteryss.php" method="POST" id="login" class="form-horizontal">
							<div class="input-group form-group">

								<div class="input-group-prepend">



<?php



 echo  "<DIV id=tbl-container>";
     echo  "<TABLE BORDER=1 WIDTH=646 id=tbl>";
     echo "<THEAD>";
          echo  "<tr>";
echo "<TH width=150>ชื่อตัวแทน</TH>";
echo "<TH width=150>ขายลอตเตอรี่ไปแลัว</TH>";
echo "<TH width=150>เบอร์ตัวแทน</TH>";
 echo  "</tr>";
echo "</THEAD>";




while( $f = mysqli_fetch_assoc($objQuerycase) and $u = mysqli_fetch_assoc($objQuerycasecoun) and $P = mysqli_fetch_assoc($objQuerycasecounnumbet)) {

 echo  "<tr>";
    echo "<td><h4>" .$f["namesell"] .  "</h4></td> ";
    echo "<td><h4>" .$u["count_word"] .  "ใบ</h4></td> ";
    echo "<td><h4>" .$P["u_username"] .  "</h4></td> ";

 echo "</tr>";
     }


  echo "</DIV>";


    ?>
				</div>

  </body>

</html>
