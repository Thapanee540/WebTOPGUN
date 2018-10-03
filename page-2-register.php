<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
	<title>ลงทะเบียน TESA TOP GUN</title>
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
<style>
</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/tesa.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" onsubmit="Javascript:return confirmPwd()" action="page-3.php" method="POST" name="formCreate">
					<span class="login100-form-title">
						<!-- <span class="#"> -->
						สร้างทีมของคุณ
					</span>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อทีม !!! ">
						<input class="input100" type="text" name="Team_Name" id="Team_Name" placeholder="ชื่อทีม">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-users" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกรหัสผ่าน !!! ">
						<input class="input100"  maxlength="8" type="password" name="Team_Pass" id="Team_Pass"  placeholder="สร้างรหัสผ่านอย่างน้อย 6 ตัวอักษร">
						<span class="focus-input100"></span>
						<span class="symbol-input100" >
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

					</div>

					<div class="wrap-input100 validate-input" style="padding-left:30px; font-size: 12px">
						<input  type="checkbox" onclick="showPassword()" >					
							   Show Password
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="กรุณากรอกรหัสผ่านอีกครั้ง !!! ">
						<input class="input100" maxlength="8" type="password" name="Repass" id="Repass"  placeholder="ยืนยันรหัสผ่าน">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<span id="result" ></span>
					

					<div class="container-login100-form-btn" style="padding-bottom:50px">
						<button class="login100-form-btn" type="submit" >
							ยืนยันการสร้างทีม
						</button>
					</div>

					<h6 style="color:#ff0000"> * ตรวจสอบข้อมูลของท่านให้ถูกต้องก่อนกดยืนยัน </h6>


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

	<script src="js/strong.js"></script>

<!-- ================= เช็ครหัส ================= -->
	<script language="Javascript">
		function confirmPwd() {
			var pwd = (document.forms["formCreate"]["Team_Pass"].value);
			var chpwd =(document.forms["formCreate"]["Repass"].value);
			var count = document.forms["formCreate"]["Team_Pass"].value.length;
			var size = 6;

			if(count < size){
				alert("กรุณาใส่ password อย่างน้อย 6 ตัวอักษร");
				return false;
			}else if(pwd != chpwd){
				alert("password ไม่ตรงกัน กรุณาใส่ password อีกครั้ง");
				//return false นั้นทำเพื่อไม่ให้ page วิ่งไปหน้าต่อไปครับ ไม่งั้นจะมี popup ขึ้นมาแจ้งเตือนว่า password ไม่ตรงแต่ก็ยังวิ่งไปหน้าต่อไปครับ
				// alert(count);
				return false;
			}
		}

		function checkStr(){
			if(document.forms["formCreate"]["pass"].value.length >= 6){
				alert("กรุณาใส่ password อย่างน้อย 6 ตัวอักษร");
				return false;
			}
		}

// <!-- ================= ดูรหัสผ่าน ================= -->
		function showPassword() {
    		var showPass = document.getElementById("Team_Pass");
    		if (showPass.type === "password") {
        		showPass.type = "text";
    		} else {
        		showPass.type = "password";
			}
			return false;
}

</script>

</body>

</html>