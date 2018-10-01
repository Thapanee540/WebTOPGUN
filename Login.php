<!DOCTYPE html>
<html>

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
	<link rel="stylesheet" type="text/css" href="css/main-login.css">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Kanit|Prompt" rel="stylesheet">
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic " >
					<img src="images/tesa.jpg" alt="Logo TESA TOP GUN">
				</div>

				<form class="login100-form validate-form" method="POST" action="showData.php">
					<span class="login100-form-title">
						TESA TOP GUN RALLY <br>Register
					</span>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อเป็นภาษาไทย หรือ Eng">
						<input class="input100" type="text" name="Name" id="Name" placeholder="ชื่อ / name">
						<!-- <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-users" aria-hidden="true"></i>
						</span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกนามสกุลเป็น ภาษาไทย หรือ Eng">
						<input class="input100" type="text" name="Lastname" id="Lastname" placeholder="นามสกุล / surname">
						<!-- <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span> -->
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							เข้าสู่ระบบ
						</button>
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
			var pwd = (document.forms["formCreate"]["pass"].value);
			var count = document.forms["formCreate"]["pass"].value.length;
			var size = 6;
			if(count < size){
				alert("กรุณาใส่ password อย่างน้อย 6 ตัวอักษร");
				return false;
			}
		}
	</script>
</body>

</html>