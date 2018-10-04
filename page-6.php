<!DOCTYPE html>
<html lang="en">
<?php
	    session_start();
	    include('DB/session_page5.php');
		
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
	<link rel="stylesheet" type="text/css" href="css/main-3.css">
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
				<form class="login100-form validate-form" action="page-7.php" method="POST">
					
					<span class="login101-form-title">
						ทีม : 
						<?php
							echo $_SESSION["Team_Name"];
						?>
                    </span>
                    
					<table>
						<tr>							
							<td>
                                <table>
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>										        
                                            วางแผนอนาคตไว้อย่างไร หลังจบปริญญาตรี
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกอนาคตที่วางแผนไว้ หลังจบปริญญาตรี">
										        <input class="input100" type="text" name="PlanAfterSchool" id="PlanAfterSchool" placeholder="เช่น จะออกไปแตะขอบฟ้า">
								
                                            </div>
                                        </td>
                                    </tr>
                                </table>
									
							</td>
							
						</tr>
                        
                        <tr>							
							<td>
                                <table>
                                    <tr>
                                        <td class="Table"> 
                                            <!-- <i class="fa fa-graduation-cap" aria-hidden="true"></i>-->
                                            <i class="fa fa-level-up" aria-hidden="true"></i>
                                            โปรดอธิบายถึงเหตุผลการวางแผนอนาคตของคุณ (จากที่ท่านตอบไว้ข้อก่อนหน้า)
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="โปรดอธิบายถึงเหตุผลการวางแผนอนาคตของคุณ (จากที่ท่านตอบไว้ข้อก่อนหน้า)">
										        <input class="input100" type="text" name="ClarifyPlan" id="ClarifyPlan" placeholder="เช่น มีพี่ตูนเป็นไอดอล">
								
                                            </div>
                                        </td>
                                    </tr>
                                </table>
									
							</td>
							
                        </tr>
                        
                        <tr>							
							<td>
                                <table>
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>										        
                                            มองอนาคต ฝัน หรือหวังว่าอีก 10 ปีข้างหน้าอย่างไรบ้าง
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกอนาคตของคุณที่ฝันไว้ในอีก 10 ปีข้างหน้า">
                                                <input class="input100" type="text" list="LookFuture" name="LookFuture" id="LookFuture" placeholder="เช่น อยู่บนอวกาศ">
                                                
								            </div>
                                        </td>
                                    </tr>
                                </table>
									
							</td>
							
                        </tr>
                        
                        <tr>							
							<td>
                                <table>
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>										        
                                            หากได้เป็นนักประดิษฐ์ระดับโลก อยากจะประดิษฐ์ผลงานอะไรเพื่อชาวโลก เพราะอะไร
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกตอบคำถาม หากได้เป็นนักประดิษฐ์ระดับโลก อยากจะประดิษฐ์ผลงานอะไรเพื่อชาวโลก เพราะอะไร">
										        <input class="input100" type="text" name="WorldInvention" id="WorldInvention" placeholder="เช่น ประดิษฐ์รองเท้าที่ใส่วิ่งได้รอบโลกในเสี้ยววินาที">								
                                            </div>
                                        </td>
                                    </tr>
                                </table>
									
							</td>
							
                        </tr>
                        
					</table>
					<p style="color:#ff0000; "> * ตรวจสอบข้อมูลของท่านให้ถูกต้องก่อนกดยืนยันเนื่องจากท่านไม่สามารถแก้ไขข้อมูลด้วยตนเองได้ 
					<br>** หากมีความประสงค์จะแก้ไข แจ้งได้ที่ E-mail: waijanya_s@silpakorn.egu </p>
						
					<div class="container-login100-form-btn" >
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