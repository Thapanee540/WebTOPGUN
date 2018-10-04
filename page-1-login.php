<!DOCTYPE html>
<html lang="en">

<head>
	<title>เข้าสู่ระบบ TESA TOP GUN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
	<link rel="icon" type="image/jpg" href="images/tesa.jpg" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main-1.css">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Kanit|Prompt" rel="stylesheet">
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/tesa.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" onsubmit="Javascript:return confirmPwd()" action="Homepage.php">
					<span class="login100-form-title">
						ยินดีต้อนรับ
					</span>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อทีม !!! ">
						<input class="input100" type="text" name="Team_Name" id="Team_Name" placeholder="ชื่อทีม">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-users" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกรหัสผ่าน !!! ">
						<input class="input100" type="password" maxlength="8" name="Team_Pass" id="Team_Pass" placeholder="รหัสผ่าน">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							เข้าสู่ระบบ
						</button>
					</div>
					

					<div class="text-center p-t-70">
						<a class="txt2 button-create" href="page-2-register.php" >
							คลิกที่นี้เพื่อสร้างทีม
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
		<script language="Javascript">
		function confirmPwd() {
			var pwd = (document.forms["formCreate"]["Team_pass"].value);
			var count = document.forms["formCreate"]["Team_pass"].value.length;
			var size = 6;
			if(count < size){
				alert("กรุณาใส่ password อย่างน้อย 6 ตัวอักษร");
				return false;
			}
		}
	</script>
</body>

</html>