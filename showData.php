<html>
    <?php
    include_once("DB/showDB.php");
?>


<head>
	<title>Profile</title>
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
    <!-- <link rel="stylesheet" type="text/css" href="css/main-4.css"> -->
    <link rel="stylesheet" type="text/css" href="css/main-login.css">
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
                <div class="login100-pic" >
					<img src="images/tesa.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" >
					
					<span class="login100-form-title">
						Number : 
						<?php
							echo " ".$row['Number'];
						?>
                    </span>
                    
					<table>
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            Name : 
                                            <?php
							                    echo $row['NameThai']." ".$row['LastnameThai'];
						                    ?>
                                        </td> 
                                    </tr>							
                       
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            Team : 										        
                                            <?php
							                    echo $row['Team'];
						                    ?>
                                        </td> 
                                    </tr>					
                                
                        
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            ห้องพัก :                                            										        
                                            <?php
							                    echo $row['Room'];
						                    ?>
                                        </td> 
                                    </tr>		
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            เตียง : 										        
                                            <?php
							                    echo $row['Bed'];
						                    ?>
                                        </td> 
                                    </tr>							
                                
                                    <tr>
                                        <td class="Table"> 
                                            <i class="fa fa-star" aria-hidden="true"></i>										        
                                            Shirt Size : 										        
                                            <?php
							                    echo $row['Shirtsize'];
						                    ?>
                                        </td> 
                                    </tr>							
                                    
					</table>
					<div class="container-login100-form-btn">
                                <button class="login100-form-btn" formaction="Bro.php">
                                    หน้าถัดไป / Next
                                </button>
                            </div>
                            <p style="color:#c80000; padding-top:10px;">(Please keep this information in your phone)</p>
                    
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