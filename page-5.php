<!DOCTYPE html>
<html lang="en">
    <?php
	    session_start();
	    include('DB/session_page4.php');
		
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
				<form class="login100-form validate-form" action="page-6.php" method="POST">
					
					<span class="login101-form-title">
						ทีม : 
						<?php
							echo $_SESSION['Team_Name'];
						?>
                    </span>
                    
					<table>
						<tr>							
							<td>
                                <table>
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>										        
                                            ชื่อโรงเรียน ระดับมัธยมปลายของท่าน 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อโรงเรียน ระดับมัธยมปลายของท่าน">
										        <input class="input100" type="text" name="NameSchool" id="NameSchool" placeholder="โรงเรียนxxxx">
								
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
                                            สายการเรียน ระดับมัธยมปลายของท่าน 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกสายการเรียน ระดับมัธยมปลายของท่าน">
										        <input class="input100" type="text" name="MajorSchool" id="MajorSchool" placeholder="เช่น วิทย์ฯ - คณิตฯ">
								
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
                                            ชื่อมหาวิทยาลัย ที่ท่านกำลังศึกษาอยู่
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกชื่อชื่อมหาวิทยาลัย ที่ท่านกำลังศึกษาอยู่">
                                                <input class="input100" type="text" list="University" name="University"  placeholder="มหาวิทยาลัยxxxx">
                                                <datalist id = "University">
                                                <?php 
										            $read = fopen('university.txt','r');
										            while($line = fgets($read)){
											        echo "<option value=". $line.">"."<br>";
										            }
									            ?>
                                                </datalist>
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
                                            สาขาวิชา (ภาควิชา) ที่ท่านกำลังศึกษาอยู่ 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกสาขาวิชา (ภาควิชา) ที่ท่านกำลังศึกษาอยู่">
										        <input class="input100" type="text" name="Major" id="Major" placeholder="สาขาวิชา xxx">								
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
                                            ชั้นปีการศึกษาปัจจุบัน 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกชั้นปีการศึกษาปัจจุบัน">
										        <input class="input100" type="number" min="1" max="8" name="Level" id="Level" placeholder="1">
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
                                            เกรดเฉลี่ยปัจจุบัน 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกเกรดเฉลี่ยปัจจุบัน">
										        <input class="input100" type="text" name="GPA" id="GPA" placeholder="เช่น 4.00">
								
										        </span>
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
                                            วิชาที่ชอบมากที่สุด 
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกวิชาที่ชอบมากที่สุด">
										        <input class="input100" type="text" name="SubFavorite" id="SubFavorite" placeholder="เช่น วิชาxxx">
								
										        </span>
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
                                            วิชาที่ไม่ถนัดที่สุด
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกวิชาที่ไม่ถนัดที่สุด">
										        <input class="input100" type="text" name="SubUnprofessional" id="SubUnprofessional" placeholder="เช่น วิชาxxx">
								
										        </span>
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
                                            ความสามารถที่โดดเด่น
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกความสามารถที่โดดเด่น">
										        <input class="input100" type="text" name="AbilityOutstanding" id="AbilityOutstanding" placeholder="เช่น พิมพ์ดีดได้ 200 คำ/นาที">
								
										        </span>
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
                                            ทำไมถึงเลือกเรียนสาขาวิศวกรรมศาสตร์ หรือ ทางเทคโนโลยี
                                        </td> 
                                    </tr>							
                                    <tr>
                                        <td> 
                                            <div class="wrap-input100 validate-input" data-validate="กรุณากรอกเหตุผลลือกเรียนสาขาวิศวกรรมศาสตร์ หรือ ทางเทคโนโลยี">
										        <input class="input100" type="text" name="WhyChoose" id="WhyChoose" placeholder="เช่น ชอบเล่นเกมส์">
								
										        </span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
									
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
<?php
	require_once("no_Back.php");
?>

					
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