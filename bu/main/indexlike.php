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





$data = $_POST;
$inputnuber1 = $data['se'];
$inputnuber2 = $data['see'];
$inputnuber3 = $data['seee']; // เข้ารหัสด้วย md5
$inputnuber4 = $data['seeee'];
$inputnuber5 = $data['seeeee'];
$inputnuber6 = $data['seeeeee'];

if($inputnuber1==null){
$inputnuber1="_";
}
if($inputnuber2==null){
$inputnuber2="_";
}
if($inputnuber3==null){
$inputnuber3="_";
}
if($inputnuber4==null){
$inputnuber4="_";
}
if($inputnuber5==null){
$inputnuber5="_";
}
if($inputnuber6==null){
$inputnuber6="_";
}

$tests=$inputnuber1."".$inputnuber2."".$inputnuber3."".$inputnuber4."".$inputnuber5."".$inputnuber6."%";

$strSQLcaseus = "SELECT * FROM numbetall WHERE numbet_id LIKE '$tests'";

$objQuerycaseus = mysqli_query($objCon, $strSQLcaseus);


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
              <h3>ลอตเตอรี่งวดวันที่ 16 กุมภาพันธ์ 2567</h3>



                <br />

<form id="myForm" method="post" action="indexlike.php" >
              <input inputmode="numeric"  type="search" value=""  id="se" name="se" maxlength="1" size="2" style="height:60px; width:8%;text-align: center;font-size:2rem;">
              <input inputmode="numeric" type="search" value=""  id="see" name="see" maxlength="1" size="2" style="height:60px; width:8%;text-align: center;font-size:2rem;">
              <input inputmode="numeric" type="search" value=""  id="seee" name="seee" maxlength="1" size="2" style="height:60px; width:8%;text-align: center;font-size:2rem;">
              <input inputmode="numeric" type="search" value=""  id="seeee" name="seeee" maxlength="1" size="2" style="height:60px; width:8%;text-align: center;font-size:2rem;">
              <input inputmode="numeric" type="search" value=""  id="seeee" name="seeeee" maxlength="1" size="2" style="height:60px; width:8%;text-align: center;font-size:2rem;">
              <input inputmode="numeric" type="search" value=""  id="seeee" name="seeeeee" maxlength="1" size="2" style="height:60px; width:8%;text-align: center;font-size:2rem;">
              <button type="submit" value="ค้นหา" class="filled-button" style="width:60; height:8; font-size:35px;" >ค้นหา</button>






<div id="sentNunmess"></div>
    <div id="sentNunmesss"></div>
              <div id="sentNunme"></div>


</form>
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



<?php
if($tests=='______%'){
$xu = 1;

                while( $f = mysqli_fetch_assoc($objQuerycase) ) {
                 count($f);
            if($f['status']==0){
              echo "<div class=col-lg-4 col-md-4 all gra>";
              echo "<div class=product-item><a href=about.php?ID=assets/images/P3/product_0$xu.jpg?".$f['numbet_id']."><img src=assets/images/P3/product_0$xu.jpg var=123></a><div class=down-content><h4>จำนวน</h4></a><h6>1</h6></div></div>";;$xu++;
              echo  "</div>";
            }
            else
            {
                echo "<div class=col-lg-4 col-md-4 all gra>";
              echo "<div class=product-item><a class=disabled-link href=about.php?ID=assets/images/P3/product_0$xu.jpg?".$f['numbet_id']."><img src=assets/images/P3/product_0$xu.jpg var=123 class=grayscale></a><div class=down-content><h4>จำนวน</h4></a><h6>1</h6></div></div>";;$xu++;
                  echo  "</div>";
            }
    }
}
else
{

        while( $R = mysqli_fetch_array($objQuerycaseus)) {
        if($R['numbet_id']==$R['numbet_id']){
                 count($R);
            if($R['status']==0){
              echo "<div class=col-lg-4 col-md-4 all gra>";
              echo "<div class=product-item><a href=about.php?ID=assets/images/P3/product_0".$R['uid'].".jpg?".$R['numbet_id']."><img src=assets/images/P3/product_0".$R['uid'].".jpg var=123></a><div class=down-content><h4>จำนวน</h4></a><h6>1</h6></div></div>";;
              echo  "</div>";
            }
            else
            {
                echo "<div class=col-lg-4 col-md-4 all gra>";
              echo "<div class=product-item><a class=disabled-link href=about.php?ID=assets/images/P3/product_0".$R['uid'].".jpg?".$R['numbet_id']."><img src=assets/images/P3/product_0".$R['uid'].".jpg var=123 class=grayscale></a><div class=down-content><h4>จำนวน</h4></a><h6>1</h6></div></div>";;
                  echo  "</div>";
            }

    }







    }




}
    $RS = mysqli_num_rows($objQuerycaseus);
     if($RS==0)
    {
    echo "<div class=col-lg-4 col-md-4 all gra>";

     echo  "</div>";
     echo "<div class=col-lg-4 col-md-4 all gra>";
     echo "<h1>ไม่พบการค้นหา</h1> ";
     echo  "</div>";
    }

    ?>




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


