<?php
session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: login.php"); // redirect ไปยังหน้า login.php
    exit;
}

$user = $_SESSION['user_login'];

include_once("./function.php");
$objCon = connectDB(); // เชื่อมต่อฐานข้อมูล
$strSQLcase = "SELECT * FROM numbetall";
$objQuerycase = mysqli_query($objCon, $strSQLcase);

$rowcase = mysqli_num_rows($objQuerycase);











?>



<!DOCTYPE html>
<html lang="en">
<style>
.disabled-link {
  pointer-events: none;
}
</style>
<style>
img {
    width: auto;
    height: auto;
    float: auto;
    max-width: auto;
}

.blur {-webkit-filter: blur(4px);filter: blur(4px);}
.brightness {-webkit-filter: brightness(250%);filter: brightness(250%);}
.contrast {-webkit-filter: contrast(180%);filter: contrast(180%);}
.grayscale {-webkit-filter: grayscale(100%);filter: grayscale(100%);}
.huerotate {-webkit-filter: hue-rotate(180deg);filter: hue-rotate(180deg);}
.invert {-webkit-filter: invert(100%);filter: invert(100%);}
.opacity {-webkit-filter: opacity(50%);filter: opacity(50%);}
.saturate {-webkit-filter: saturate(7); filter: saturate(7);}
.sepia {-webkit-filter: sepia(100%);filter: sepia(100%);}
.shadow {-webkit-filter: drop-shadow(8px 8px 10px green);filter: drop-shadow(8px 8px 10px green);}
</style>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<style>
.disabled-link {
  pointer-events: none;
}
</style>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<style>
input[type=number] {
    -moz-appearance:textfield;
}
input::-webkit-outer-spin-button,
 input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=770%;, initial-scale=0.5, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

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
    <header class="" >
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>หวย <em>ออนไลน์</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">หน้าแรก
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="index.php">คำสั่งซื้อ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="safes.php">ตู้เซฟของฉัน</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php" >ข้อมูลขอฉัน</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" ><?php echo $user['fullname']; ?></a>

              </li>
              <li class="nav-item">
              <a class="nav-link" href="logout_action.php" >ออกจากระบบ</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
             <!-- <h4>ค้นหาเลข</h4>-->
<script src="https://cdn.logwork.com/widget/countdown.js"></script>

<?php
echo "<meta charset='utf-8'>";
function ThDate()
{
$da="";
$ints="";
//วันภาษาไทย
$ThDay = array ( "อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์" );
//เดือนภาษาไทย
$ThMonth = array ( "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );

//$date = new DateTime();
//$date->setTimezone(new DateTimeZone('Asia/Bangkok'));
//echo $date->format(DateTime::RFC1123) . "\n";
//วันที่ ที่ต้องการเอามาเปลี่ยนฟอแมต

    //$date = date("Y-m-d");



    //echo $date." / ".$time;
$myDATE = date("Y-m-d"); //อาจมาจากฐานข้อมูล
$myDATEs = date("m");

//กำหนดคุณสมบัติ
//echo  $myDATEsd;
//$months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)
$day = date("d",strtotime($myDATE)); // ค่าวันที่(1-31)
$years = date("Y",strtotime($myDATE))+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

if($day>1 && $day<=16)
{
    $da=16;

    $months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)

    return "
		ลอตเตอรี่งวดวันที่ $da
		 $ThMonth[$months]
		 $years";
}
else
{
   $da=1;
   if($myDATEs =="1"){
        $ints="2";
   }
   if($myDATEs =="2"){
        $ints="3";
   }
   if($myDATEs =="3"){
        $ints="4";
   }if($myDATEs =="4"){
        $ints="5";
   }
   if($myDATEs =="5"){
        $ints="6";
   }
   if($myDATEs =="6"){
        $ints="7";
   }
   if($myDATEs =="7"){
        $ints="8";
   }
   if($myDATEs =="8"){
        $ints="9";
   }
   if($myDATEs =="9"){
        $ints="10";
   }
   if($myDATEs =="10"){
        $ints="11";
   }
   if($myDATEs =="11"){
        $ints="12";
   }
   if($myDATEs =="12"){
        $ints="1";
   }



   $months = date($ints,strtotime($myDATE))-1; // ค่าเดือน (1-12)
   //$da=1;

}


return "
		ลอตเตอรี่งวดวันที่ $da
		 $ThMonth[$months]
		 $years";

}


$ThMonthnum = array ( "01", "02", "03", "04","05", "06", "07", "08","09", "10", "11", "12");
$ThMonth = array ( "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม" );


$myDATE = date("Y-m-d"); //อาจมาจากฐานข้อมูล
$months = date("m",strtotime($myDATE))-1; // ค่าเดือน (1-12)

$dayss = date("d",strtotime($myDATE)); // ค่าวันที่(1-31)
 date_default_timezone_set('asia/bangkok');
 $years = date("Y",strtotime($myDATE))+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.
 $yearsP = date("Y",strtotime($myDATE)); // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

    $datetimes = date('H:i:s');
    $timess = date("H");

    if(($dayss>=17  && $dayss<=19))
    {

        echo "<a href=https://logwork.com/countdown-timer class=countdown-timer data-timezone=Asia/Bangkok data-date=".$yearsP."-".$ThMonthnum[$months]."-20 06:00>รอบใหม่จะพร้อมให้บริการในวันที่  20 ".$ThMonth[$months]." ".$years."</a>";
    }
    if(($dayss==16) && ($timess>=12 && $timess<=24))
    {
     echo "<a href=https://logwork.com/countdown-timer class=countdown-timer data-timezone=Asia/Bangkok data-date=".$yearsP."-".$ThMonthnum[$months]."-20 06:00>รอบใหม่จะพร้อมให้บริการในวันที่  20 ".$ThMonth[$months]." ".$years."</a>";
    }
    if(($dayss==1) && ($timess>=12 && $timess<=24))
    {

        echo "<a href=https://logwork.com/countdown-timer class=countdown-timer data-timezone=Asia/Bangkok data-date=".$yearsP."-".$ThMonthnum[$months]."-05 06:00>รอบใหม่จะพร้อมให้บริการในวันที่ 05 ".$ThMonth[$months]."  ".$years."</a>";
    }
    if(($dayss>=02  && $dayss<=05))
    {
          echo "<a href=https://logwork.com/countdown-timer class=countdown-timer data-timezone=Asia/Bangkok data-date=".$yearsP."-".$ThMonthnum[$months]."-05 06:00>รอบใหม่จะพร้อมให้บริการในวันที่ 05 ".$ThMonth[$months]."  ".$years."</a>";
    }

    if(($dayss>=20  && $dayss<16))
    {

        echo '<script>window.location="index.php";</script>';
   }
       if(($dayss>=5  && $dayss<16))
    {

        echo '<script>window.location="index.php";</script>';
   }
    else
    {
        //echo '<script>window.location="index.php";</script>';
    }





?>

                <br />


            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">







<div class="col-lg-4 col-md-4 all gra">


 </div>









                </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

          </div>
        </div>
      </div>
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
        const images = [
'assets/images/product_06.jpg',
'https://media.geeksforgeeks.org/wp-content/uploads/20230306120634/unnamed.jpg'
        ];
         const container = document.getElementById('image-container');

        for (let i = 0; i < images.length; i++) {
            const img = document.createElement('img');
            img.src = images[i];
            container.appendChild(img);

            "<div class="col-lg-4 col-md-4 all dessss">"
            "          <div class="product-item">"
            "            <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>"
            "            <div class="down-content">"
            "              <a href="#"><h4>จำนวน</h4></a>"
            "              <h6>1</h6>"
            "            </div>"
            "          </div>"
            "        </div>"

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

var dataID3 = arrID[1].split("&");
var dataID22 =dataID3[1].split("see=");
var dataID11 =dataID3[0].split("se=");
var dataID33 =dataID3[2].split("seee=");
var dataID44 =dataID3[3].split("seeee=");
var dataID55 =dataID3[4].split("seeeee=");
var dataID66 =dataID3[5].split("seeeeee=");

var inputNuner=['156845','256845','156846'];
var result="";
let text = "";
if(dataID11[1]!=""){
    if(dataID11[1]==1)
    {
             for (i=0; i<inputNuner.length; i++) {
                    if(result = inputNuner[i].substring(0,1)==1)
                    {
                       document.getElementById("sentNunme").innerHTML=text += inputNuner[i] + "<br>";

                      //  document.getElementById("sentNunme").innerHTML=x = x+"<div class=product-item><a href=about.html?ID=assets/images/P1/product_0"+i+".jpg><img src=assets/images/P1/product_01.jpg var=123></a><div class=down-content><a href=#><h4>จำนวน</h4></a><h6>1</h6></div></div>";

                    }

            }



    }
//document.getElementById("sentNunme").innerHTML=dataID11[1]+dataID22[1]+dataID33[1]+dataID44[1]+dataID55[1]+dataID66[1];
}
else if(dataID22[1]!=""){
document.getElementById("sentNunme").innerHTML=dataID11[1]+dataID22[1]+dataID33[1]+dataID44[1]+dataID55[1]+dataID66[1];
}




</script>

<script>
function myFunction() {
  alert("ฟังก์ชั่นนี้จะเปิดใช้งานเร็วๆนี้");
}
</script>

  </body>

</html>


