<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('DB/session_page7.php');
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
				<form class="login100-form validate-form" action="page-9-success.php" method="POST">
					
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
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            รู้จักโครงการนี้ได้อย่างไร 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูลว่ารู้จักโครงการนี้ได้อย่างไร">
										        <input class="input100" type="text" name="Feeling" id="Feeling" placeholder="เช่น โพสใน facebook">
								
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
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            อะไรเป็นแรงบันดาลใจในการเข้าร่วมโครงการครั้งนี้ 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกแรงบันดาลใจในการเข้าร่วมโครงการครั้งนี้">
										        <input class="input100" type="text" name="inspiration" id="inspiration" placeholder="เช่น อยากประดิษฐ์รองทเ้าให้พี่ตูน">
								
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
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            จุดเด่น หรือความสามารถพิเศษของเรา ที่จะช่วยให้ทีมประสบความสำเร็จคืออะไร
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกจุดเด่น หรือความสามารถพิเศษของเราที่จะช่วยให้ทีมประสบความสำเร็จ">
                                                <input class="input100" type="text" id = "Featured" name="Featured"  placeholder="เช่น หน้าตา">
                                                
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
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            สิ่งที่คาดหวังว่าจะได้รับจากการร่วมโครงการนี้
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกสิ่งที่คาดหวังว่าจะได้รับจากการร่วมโครงการนี้">
                                                <input class="input100" type="text" id = "expectation" name="expectation"  placeholder="เช่น ประดิษฐ์รองเท้าให้พี่ตูนได้">
                                                
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
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            เคยได้ยิน หรือมีความรู้ความเข้าใจเกี่ยวกับระบบสมองกลฝังตัว (Embedded Systems) มาก่อนหรือไม่
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกข้อมูล">
                                                <input class="input100" type="text" id = "knowledge" name="knowledge"  placeholder="เช่น ไม่เคยเลยเจ้าค่ะ">
                                                
								            </div>
                                        </td>
                                    </tr>
                                </table>
									
							</td>
							
                        </tr>
                        
                    </table>
                    
					<h6 style="color:#ff0000; font-size:"> * ตรวจสอบข้อมูลของท่านให้ถูกต้องก่อนกดยืนยันเนื่องจากท่านไม่สามารถแก้ไขข้อมูลด้วยตนเองได้ หากมีความประสงค์จะแก้ไข แจ้งได้ที่ E-mail: sajjaporn.w@gmail.com </h6>
					

					<div class="container-login100-form-btn" style="padding-bottom:50px">
                        
						<button class="login100-form-btn" type="submit"> ยืนยันการการกรอกข้อมูล </button>
                                
					</div>
                    
                    <!-- <h6 style="color:#ff0000"> * ตรวจสอบข้อมูลของท่านให้ถูกต้องก่อนกดยืนยัน </h6> -->

                    
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