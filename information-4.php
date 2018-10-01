<!DOCTYPE html>
<html lang="en">
<?php
include("conn/conn.php");
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
	<!-- <link rel="stylesheet" type="text/css" href="css/main-1.css"> -->
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

				<form class="login100-form validate-form" action="education.php" method="POST" >
					
					<span class="login101-form-title">
						ทีม : 
						<?php
							// echo $_POST["Group"];
						?>
					</span>

					<table>
						<tr>
							
							<td>
								Link (รูปนักศึกษา) : 
							</td>
								<td>
									
									<div class="wrap-input100 validate-input" data-validate="Link : รูปนักศึกษา (จะเป็นรูปติดบัตร หรือรูปประจำตัว facebook ก็ได้ แต่ขอให้เห็นใบหน้าของคุณได้อย่างชัดเจน)">
										<input class="input100" type="text" name="LinkPic" id="LinkPic" placeholder="https://.........">
								
										<span class="focus-input100"></span>
										<span class="symbol-input100">
										<i class="fa fa-image" aria-hidden="true"></i>
										</span>
									</div>
									
								</td>
							
						</tr>
						<tr>
							<td>คำนำหน้าชื่อ : </td>
							<td>
							<div class="wrap-input100 validate-input" data-validate="กรุณาเลือกจำนวนสมาชิกในกลุ่ม ">
								<input class="input100" name="University" list="University"  placeholder="กรุณาเลือกคำนำหน้าชื่อ">
								<datalist id="University">    								
									 <?php 
										$read = fopen('titleName.txt','r');
										while($line = fgets($read)){
											echo "<option value=". $line.">"."<br>";
										}
									?>
  								</datalist>								 
								<span class="focus-input100"></span>	
								<span class="symbol-input100">					
								</span>
							</div> </td>
						</tr>

						<tr>
							<td>ชื่อ - นามสกุล (ภาษาไทย) : </td>
							<td>
							<table>

								<td>
									<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อ เป็นภาษาไทย">
										<input class="input100" type="text" name="nameThai" id="nameThai" placeholder="ชื่อ">								
										<span class="focus-input100"></span>										
									</div> 
								</td>
								<td>
									<div class="wrap-input100 validate-input" data-validate="กรุณากรอกนามสกุล เป็นภาษาไทย">
										<input class="input100" type="text" name="LastnameThai" id="LastnameThai" placeholder="นามสกุล">								
										<span class="focus-input100"></span>										
									</div> 
								</td>
							</table>
									</td>					
							
						</tr>

						<tr>
							<td>ชื่อ - นามสกุล (ภาษาอังกฤษ) : </td>
							<td>
								<table>

									<td>
										<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อ เป็นภาษาอังกฤษ">
											<input class="input100" type="text" name="NameEng" id="NameEng" placeholder="Name">								
											<span class="focus-input100"></span>										
										</div> 
									</td>
									<td>
										<div class="wrap-input100 validate-input" data-validate="กรุณากรอกนามสกุล เป็นภาษาอังกฤษ">
											<input class="input100" type="text" name="LastnameEng" id="LastnameEng" placeholder="LastName">								
											<span class="focus-input100"></span>										
										</div> 
									</td>
								</table>
							</td>					
							
						</tr>

						<tr>
							<td>ชื่อเล่น : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อเล่น">
									<input class="input100" type="text" name="NickName" id="NickName" placeholder="ชื่อเล่น">								
									<span class="focus-input100"></span>										
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>เบอร์โทรศัพท์มือถือ : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกเบอร์โทร">
									<input class="input100" pattern="^0([8|9|6])([0-9]{8}$)" type="text" name="NickName" id="NickName" placeholder="0xx-xxx-xxxx" title="ex. 08xxxxx123">								
									<span class="focus-input100"></span>										
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>วัน/เดือน/ปี เกิด : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกวัน/เดือน/ปี เกิด">
									<input class="input100" type="Date" name="BirthDay" id="BirthDay" placeholder="ชื่อเล่น">								
									<!-- <span class="focus-input100"></span>										 -->
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>ไซต์เสื้อ : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกไซต์เสื้อ">
									<input class="input100" type="text" list="SizeShirt" name="SizeShirt"  placeholder=" xx รอบอก xx นิ้ว">
										<datalist id="SizeShirt" >
											<option value="SS รอบอก xx นิ้ว">
											<option value="S รอบอก xx นิ้ว">
											<option value="M รอบอก xx นิ้ว">
											<option value="L รอบอก xx นิ้ว">
											<option value="XL รอบอก xx นิ้ว">
											<option value="XXL รอบอก xx นิ้ว">
											<option value="XXXL รอบอก xx นิ้ว">
										</datalist>											
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>อาหารทั่วไป/มุสลิม : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกประเภทอาหารที่ทานได้">
									<!-- <input class="input100" type="text" list="Food" name="Food" placeholder="อาหารทั่วไป">								 -->
									<select class="input100 input101" type="text" name="Food" id="Food">
										<option value="ทั่วไป">ทั่วไป</option>
										<option value="มังสวิรัติ">มังสวิรัติ</option>
										<option value="มุสลิม">มุสลิม</option>
									</select>										
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>อาหารที่แพ้ : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกอาหารที่แพ้ หากไม่มีให้ใส่  '' ไม่มี ''">
									<input class="input100" type="text" name="FoodAllergies" id="FoodAllergies" placeholder="อาหารที่แพ้ หากไม่มีให้ใส่  '' ไม่มี ''">								
									<span class="focus-input100"></span>										
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>ภูมิลำเนา (โปรดระบุเป็นชื่อจังหวัด) : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อจังหวัด">
									<input class="input100" type="text" name="Province" list="Province" placeholder="จังหวัด....">								
										<datalist id="Province">    								
											 <?php 
												$read = fopen('province.txt','r');
												while($r = fgets($read)){
														echo "<option value=".$r.">";
												}
											?>
  										</datalist>	
									<span class="focus-input100"></span>										
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>ท่านมีพี่ - น้องทั้งหมดกี่คน (รวมตัวท่านด้วย) : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกจำนวนพี่น้อง เช่น เป็นลูกคนเดียวใส่ '' 1 ''">
									<input class="input100" min="1" max="15" type="number" name="HowManySisBro" id="HowManySisBro" placeholder="0">								
									<span class="focus-input100"></span>										
								</div> 									
							</td>		
							
						</tr>

						<tr>
							<td>ท่านเป็นลูกคนเท่าไหร่ : </td>
							<td>								
								<div class="wrap-input100 validate-input" data-validate="กรุณากรอกลำดับในครอบครัวของท่าน เช่น เป็นลูกคนเดียว ใส่ '' 1 '' ">
									<input class="input100" type="number" min="1" max="15" name="YourRank" id="YourRank" placeholder="0">								
									<span class="focus-input100"></span>										
								</div> 									
							</td>		
							
						</tr>

						
					</table>
					

					<div class="container-login100-form-btn" style="padding-bottom:50px">
						<button class="login100-form-btn" type="submit">
										ไปหน้าถัดไป
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

</body>

</html>