<!DOCTYPE html>
<html lang="en">
	<?php
	session_start();
	require_once("DB/createLogin-DB.php");
	// include('DB/session_page3.php');
		
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
	<link rel="stylesheet" type="text/css" href="css/main-2.css">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Kanit|Prompt" rel="stylesheet">
</head>
<style>
	
</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<!-- <div class="login100-pic js-tilt" data-tilt>
					<img src="images/tesa.jpg" alt="IMG">
				</div> -->

				<form class="login100-form validate-form" action="page-4.php" method="POST">
					<span class="login100-form-title">
					<!-- <span class="#"> -->
						ลงทะเบียน TESA TOP GUN Rally 
						
					</span>
					<span class="login101-form-title">
						ทีม : 
						<?php
							echo $_SESSION['Team_Name'];
						?>
					</span>

					<table>
						<tr>
							<td>ประเภททีม : </td>
							<td>
							<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อทีม !!! ">
								<input class="input100" type="text" list="Team_Type" name="Team_Type" placeholder="แข่งขันจริง / สังเกตการณ์">
								<datalist id="Team_Type">
									<option value="แข่งขันจริง">
									<option value="สังเกตการณ์">
								</datalist>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-users" aria-hidden="true"></i>
								</span>
							</div> </td>
						</tr>
						<tr>
							<td>มหาวิทยาลัย : </td>
							<td>
							<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อมหาวิทยาลัย ">
								<input class="input100" name="University" list="University"  placeholder="มหาวิทยาลัย...">
								<datalist id="University">    								
									 <?php 
										$read = fopen('university.txt','r');
										while($line = fgets($read)){
											echo "<option value=". $line.">"."<br>";
										}
									?>
  								</datalist>								 
								<span class="focus-input100"></span>	
								<span class="symbol-input100">					
									<i class="fa fa-graduation-cap" aria-hidden="true"></i>
								</span>
							</div> </td>
						</tr>

						<tr>
							<td>จำนวนสมาชิก : </td>
							<td> 
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อมหาวิทยาลัย ">
									<!-- <input class="input100" name="University"  placeholder="มหาวิทยาลัย..."> -->
										<select  class="input100" name="Member" id="Member"> 
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>										
  										</select>				 
														
						
								</div>
							 </td>
						</tr>

						<tr>
							<td>อาจารย์ที่ปรึกษา : </td>
							<td>
							<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่ออาจารย์ที่ปรึกษา">
								<input class="input100" type="text" name="Adviser" id="Adviser" placeholder="ชื่ออาจารย์ที่ปรึกษา">
								
								<span class="focus-input100"></span>
								<span class="symbol-input100">
								<i class="fa fa-user" aria-hidden="true"></i>
								</span>
							</div> </td>
						</tr>

						<tr>
							<td>E-mail อาจารย์ที่ปรึกษา : </td>
							<td>
							<div class="wrap-input100 validate-input" data-validate="กรุณากรอก email หัวหน้าทีม เช่น example@example.xyz">
								<input class="input100" type="text" name="email" id="Email" placeholder="example@example.xyz">
								
								<span class="focus-input100"></span>
								<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div> </td>
						</tr>

                        <tr>
                            <td> 									        
                                ท่านประสงค์จะเข้าพักที่ค่ายในวันที่ :
							</td> 
                                    
                            <td> 
                                <div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูลวันที่ท่านประสงค์เข้าพักที่ค่าย">
									<input class="input100" type="Date" name="Daystartcamp" id="Daystartcamp" >
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</span>
                                </div>
                            </td>
                        </tr>
                                
					</table>
					<h6 style="color:#ff0000; font-size:"> * ตรวจสอบข้อมูลของท่านให้ถูกต้องก่อนกดยืนยันเนื่องจากท่านไม่สามารถแก้ไขข้อมูลด้วยตนเองได้ หากมีความประสงค์จะแก้ไข แจ้งได้ที่ E-mail: sajjaporn.w@gmail.com </h6>
					
					<div class="container-login100-form-btn" style="padding-bottom:50px">
						<button class="login100-form-btn" type="submit">
										ไปหน้าถัดไป
						</button>
					</div>

					<!-- <h6 style="color:#ff0000"> * ตรวจสอบข้อมูลของท่านให้ถูกต้องก่อนกดไปหน้าถัดไป </h6> -->


					
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

<?php
	require_once("no_Back.php");
?>

</body>

</html>