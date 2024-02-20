<?php session_start(); // เปิดใช้งาน session ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./css/style.css" rel="stylesheet">
    <title>Login Page</title>
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
		background-image: url('https://getwallpapers.com/wallpaper/full/4/a/3/24383.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		height: 100%;
		font-family: 'Numans', sans-serif;
		}
		.container{
		height: 100%;
		align-content: center;
		}
		.card{
		height: 300px;
		margin-top: 100px;
		margin-bottom: auto;
		width: 400px;
		background-color: rgba(0,0,0,0.5) !important;
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

<body class="text-center">

    <main class="form-signin">
        <form  >
            <h1 class="h3 mb-3 fw-normal"></h1>




        </form>




        <div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<span class="glyphicon glyphicon-lock"> </span>
						<h3>เข้าสู่ระบบ</h3>

					</div>
					<div class="card-body">
						<form ame="formlogin" action="login_action_admin.php" method="POST" id="login" class="form-horizontal">
							<div class="input-group form-group">
								<div class="input-group-prepend">

								</div>

								<input type="text" name="username" id="floatingInput" name="username"  maxlength="10"class="form-control" placeholder="เบอร์โทร">

							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">

								</div>
								<input type="password" name="password" class="form-control" id="floatingPassword" name="password"  placeholder="รหัสผ่าน">
							</div>

							<div class="form-group">

								&nbsp;

								<button class="w-100 btn btn-lg btn-primary" type="submit">เข้าสู่ระบบ</button>


							</div>

						</form>
					</div>

				</div>
			</div>
		</div>








    </main>

</body>

</html>