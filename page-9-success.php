<?php
    session_start();
    include('DB/session_page8.php');

    // include_once("/LoginV1/DB/insert_info.php")."<br>";
/*    echo $_SESSION["Team_Name"] ."<br>";
 
    echo "page 3"."<br>";
    echo $_SESSION["Team_Type"] ."<br>";
    echo $_SESSION["University"] ."<br>";
    echo $_SESSION["Member"] ."<br>";
    echo $_SESSION["Adviser"] ."<br>";
    echo $_SESSION["Email"] ."<br>";
    echo $_SESSION["Daystartcamp"]."<br>";  
  
    echo "page 4"."<br>"; 
    echo $_SESSION["Pic"] ."<br>";
    echo $_SESSION["Tiltle"] ."<br>";
    echo $_SESSION["NameThai"] ."<br>";
    echo $_SESSION["NameEng"] ."<br>";
    echo $_SESSION["NickName"] ."<br>";
    echo $_SESSION["Tell"] ."<br>";
    echo $_SESSION["BirthDay"] ."<br>";
    echo $_SESSION["SizeShirt"] ."<br>";
    echo $_SESSION["Food"] ."<br>";
    echo $_SESSION["FoodAllergies"] ."<br>";    
    echo $_SESSION["Province"] ."<br>";
    echo $_SESSION["HowManySisBro"] ."<br>";  
    echo $_SESSION["YourRank"] ."<br>";
  
    echo "page 5"."<br>";
    echo $_SESSION["NameSchool"] ."<br>";
    echo $_SESSION["MajorSchool"] ."<br>";
    echo $_SESSION["University"] ."<br>";
    echo $_SESSION["Major"] ."<br>";
    echo $_SESSION["Level"] ."<br>";
    echo $_SESSION["GPA"]."<br>";
    echo $_SESSION["SubFavorite"]."<br>";
    echo $_SESSION["SubUnprofessional"] ."<br>";
    echo $_SESSION["AbilityOutstanding"] ."<br>";
    echo $_SESSION["WhyChoose"] ."<br>";    
      
    echo "page 6"."<br>";
    echo $_SESSION["PlanAfterSchool"] ."<br>";
    echo $_SESSION["MajorSchool"]."<br>";
    echo $_SESSION["ClarifyPlan"]."<br>";
    echo $_SESSION["LookFuture"] ."<br>";
    echo $_SESSION["WorldInvention"]."<br>"; 
      
    echo "page 7"."<br>";  
    echo $_SESSION["YourIdolWhoWhy"] ."<br>";
    echo $_SESSION["YourMotto"] ."<br>";
    echo $_SESSION["HowToManager"] ."<br>";
  
    echo "page 8"."<br>";  
    echo $_SESSION["Feeling"] ."<br>";
    echo $_SESSION["inspiration"] ."<br>";
    echo $_SESSION["Featured"] ."<br>";
    echo $_SESSION["expectation"] ."<br>";
    echo $_SESSION["knowledge"] ."<br>";
*/
    include("DB/insert_info.php");
    session_destroy()   
?>
<!DOCTYPE html>
<html>

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
				<form class="login100-form validate-form" >			
								
                    <div style="display: block; margin-left: auto; margin-right: auto; width:50%;"> 
                        <img style="display: block; margin-left: auto; margin-right: auto; width:70%;"  src="images/checked.png"> 
                    </div>

                    <div class="container-login100-form-btn" style="padding-bottom:50px">
                        <h3 style="padding-bottom:30px; color:#00b300; text-shadow: 0 0 10px #66ff66;"> Successfully !!! </h3><br>
                        
                        <button class="login100-form-btn" formaction="../LoginV1/Homepage.php">
                            <i class="fa fa-home" aria-hidden="true"></i> ...ไปหน้าแรก 
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
	
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>


