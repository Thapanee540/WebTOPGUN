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
				<form class="login100-form validate-form" action="feelings.php" method="POST" >
					
					<span class="login101-form-title">
						ทีม : 
						<?php
							// echo $_POST["Group"];
						?>
                    </span>
                    
					<table>
						<tr>							
							<td>
                                <table>
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            บุคคลในดวงใจของคุณคือใคร เพราะอะไร 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อบุคคลในดวงใจของคุณคือใคร เพราะอะไร">
										        <input class="input100" type="text" name="YourIdolWhoWhy" id="YourIdolWhoWhy" placeholder="เช่น พี่ตูน บอดี้สลัม">
								
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
                                            คติประจำใจของคุณคืออะไร 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกคติประจำใจของคุณ">
										        <input class="input100" type="text" name="YourMotto" id="YourMotto" placeholder="เช่น อยากเห็นคนไทยบินได้">
								
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
                                            หากมีปัญหา และอุปสรรคในการทำงาน เราจะมีวิธีการจัดการอย่างไร ยกตัวอย่างประกอบได้
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อชื่อมหาวิทยาลัย ที่ท่านกำลังศึกษาอยู่">
                                                <input class="input100" type="text" id = "HowToManager" name="HowToManager"  placeholder="เช่น เรือเล็กควรออกจากฝั่ง">
                                                
								            </div>
                                        </td>
                                    </tr>
                                </table>
									
							</td>
							
                        </tr>
                        
					</table>
					

					<div class="container-login100-form-btn" style="padding-bottom:50px">
						<button class="login100-form-btn" type="submit" >
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