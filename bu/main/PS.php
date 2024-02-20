<?php
session_start();
if (!isset($_SESSION['user_login'])) { // ถ้าไม่ได้เข้าระบบอยู่
    header("location: login.php"); // redirect ไปยังหน้า login.php
    exit;
}

$user = $_SESSION['user_login'];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing - About Page</title>

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
    <header class="">
      <nav class="navbar navbar-expand-lg">
       <div class="container">
          <a class="navbar-brand" href="products.html"><h2>หวย <em>ออนไลน์</em></h2></a>
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
              <li class="nav-item active">
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
   <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">

            </div>
          </div>
        </div>
      </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>ชำระเงิน</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
                <div id="demourl"></div>

            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">

             <center>    <h5><B>ค่าบริการ</B></h5><br/><br/>
              <h5>ค่าลอตเตอรี่        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     80    บาท</h5><br />
              <h5>ค่าบํารุงเว็บไซต์    &nbsp;         25    บาท</h5><br />
              <h5>รวมเป็นเงิน         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     105   บาท</h5><br />
             <center> <h5>โอนผ่านธนาคารกสิกร</h5><br />
                 <h5>นาย สุกิจ เลิศนิทัศน์</h5><br />
                 <div class="col-md-4">
                     <div class="down-content">
                 <img src="assets/images/QR.jpg" >
                 </div> </div>

<br/><br/>

                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPopUp">บันทึกข้อมูลลูกค้า</button>
             <div id="data"></div>
             </center>
            </div>
          </div>
        </div>
      </div>
    </div>



<div class="modal fade" id="myPopUp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ข้อมูลลูกค้า</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="customer_action.php">
         <div class="mb-3">
                    <label for="name_customers" class="form-label">ชื่อ - สกุล(ไม่บังคับ)</label>
                    <input type="text" class="form-control" id="name_customers" name="name_customers" placeholder="ชื่อ - สกุล" required>
                </div>
                <div class="mb-3">
                    <label for="เบอร์โทร" inputmode="numeric"  class="form-label">เบอร์โทร</label>
                    <input type="text" class="form-control" id="numbet_phone_customers" maxlength="10" name="numbet_phone_customers" placeholder="เบอร์โทร" required>
                 <input type="hidden" id="sellname" name="sellname" value="<?php echo $user['fullname']; ?>"><br>
                 <div id="demourlsent"></div>

                </div>



      </div>
      <div class="modal-footer">

        <button type="submit"  class="btn btn-primary" >บันทึกข้อมูล</button>
</form>
      </div>

    </div>
  </div>
</div>







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

var dataIDd = arrID[2].split("=");

var dataID = arrID[1].split("=");
// แบ่งอีกครั้งด้วย =  จะได้
// dataID[0]="ID";
// dataID[1]="4";
var ID = dataID[1];



document.getElementById("demourlsent").innerHTML="<input type=hidden id=numbet_idsells name=numbet_idsells value="+dataIDd+">";




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
    $(document).ready(function(){
        let number = 600;
        var counter = setInterval(() => {
            $("#data").html( number );
            number--;
            if( number == -1 ) {
                clearInterval( counter );
                $("#data").html( "การสั่งซื้อไม่สำเร็จ" );
            }
        }, 1000);
    });
</script>
    <script>
function myFunction() {
  alert("ฟังก์ชั่นนี้จะเปิดใช้งานเร็วๆนี้");
}
</script>
  </body>

</html>
