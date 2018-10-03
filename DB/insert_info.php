<?php
include_once("conn/conn.php");

  $Team_Name ="";
  $Team_Type = $University = $Member = $Adviser = $Email = "";
  
  $Team_Name = $_SESSION["Team_Name"];

  // page 3
  $Team_Type = $_SESSION["Team_Type"] ;
  $University = $_SESSION["University"] ;
  $Member = $_SESSION["Member"] ;
  $Adviser = $_SESSION["Adviser"] ;
  $Email = $_SESSION["Email"] ;  
  $Daystartcamp = $_SESSION["Daystartcamp"];
  $Pic = $Tiltle = $NameThai = $NameEng = $NickName = $Tell = $BirthDay =  $SizeShirt = $Food = $FoodAllergies = $Province = $HowManySisBro =  $YourRank = "";

  // page 4
  $Pic = $_SESSION["Pic"] ;
  $Tiltle = $_SESSION["Tiltle"] ;
  $NameThai = $_SESSION["NameThai"] ;
  $NameEng = $_SESSION["NameEng"] ;
  $NickName = $_SESSION["NickName"] ;
  $Tell = $_SESSION["Tell"] ;
  $BirthDay = $_SESSION["BirthDay"] ;
  $SizeShirt = $_SESSION["SizeShirt"] ;
  $Food = $_SESSION["Food"] ;
  $FoodAllergies = $_SESSION["FoodAllergies"] ;    
  $Province = $_SESSION["Province"] ;
  $HowManySisBro = $_SESSION["HowManySisBro"] ;  
  $YourRank = $_SESSION["YourRank"] ;

  $NameSchool = $MajorSchool = $University = $Major = $Level = $GPA= $SubFavorite = $SubUnprofessional =         $AbilityOutstanding = $WhyChoose = "";

  // page 5
  $NameSchool = $_SESSION["NameSchool"] ;
  $MajorSchool = $_SESSION["MajorSchool"] ;
  $University = $_SESSION["University"] ;
  $Major = $_SESSION["Major"] ;
  $Level = $_SESSION["Level"] ;;
  $GPA = $_SESSION["GPA"];
  $SubFavorite = $_SESSION["SubFavorite"];
  $SubUnprofessional = $_SESSION["SubUnprofessional"] ;
  $AbilityOutstanding = $_SESSION["AbilityOutstanding"] ;
  $WhyChoose = $_SESSION["WhyChoose"] ;    
    
  $PlanAfterSchool = $MajorSchool = $ClarifyPlan = $LookFuture = $WorldInvention = ""; 

  // page 6
  $PlanAfterSchool = $_SESSION["PlanAfterSchool"] ;
  $MajorSchool = $_SESSION["MajorSchool"];
  $ClarifyPlan = $_SESSION["ClarifyPlan"];
  $LookFuture = $_SESSION["LookFuture"] ;
  $WorldInvention = $_SESSION["WorldInvention"]; 
    
  $YourIdolWhoWhy = $YourMotto = $HowToManager = "";

  ///page 7  
  $YourIdolWhoWhy = $_SESSION["YourIdolWhoWhy"] ;
  $YourMotto = $_SESSION["YourMotto"] ;
  $HowToManager = $_SESSION["HowToManager"] ;

  $Feeling = $inspiration = $Featured = $expectation = $knowledge = "";

  /// page 8  
  $Feeling = $_SESSION["Feeling"] ;
  $inspiration = $_SESSION["inspiration"] ;
  $Featured = $_SESSION["Featured"] ;
  $expectation = $_SESSION["expectation"] ;
  $knowledge = $_SESSION["knowledge"] ;
   
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql_login = "SELECT * FROM team_login WHERE Team_Name = '$Team_Name'";
$result_login = mysqli_query($conn, $sql_login);
$row_login = mysqli_fetch_assoc($result_login);
$ID_team = $row_login["ID"];

// echo ">>>> id team".$row_login["ID"]."<br>";
if (mysqli_query($conn, $sql_login)) { //ถ้า insert ได้จะเข้า new rec...
  // echo "New record created successfully sql_login"."<br>";
  // echo ">>>> id team".$row_login["ID"]."<br>";
} else {
  echo "Error: " . $sql_login . "<br>" . mysqli_error($conn);
}


//insert data
$sql_team_register = "INSERT INTO team_register(ID_team, Team_Type, Team_Name, University, Member, Adviser, Email,Daystartcamp)
VALUES ('$ID_team', '$Team_Type', '$Team_Name', '$University', '$Member', '$Adviser', '$Email', '$Daystartcamp')";


$sql_team_info = "INSERT INTO team_info(ID, Team_ID, Pic, Email, Tiltle, NameThai, NameEng, NickName, Tell, BirthDay, SizeShirt, Food, FoodAllergies, Province, HowManySisBro, YourRank, NameSchool, MajorSchool, University, Major, Levels, GPA, SubFavorite, SubUnprofessional, AbilityOutstanding, WhyChoose, PlanAfterSchool, ClarifyPlan, LookFuture, WorldInvention, YourIdolWhoWhy, YourMotto, HowToManager, Feeling, inspiration, Featured, expectation, knowledge) 
VALUES (NULL,'$ID_team', '$Pic', '$Email', '$Tiltle', '$NameThai', '$NameEng', '$NickName', '$Tell', '$BirthDay', '$SizeShirt', '$Food','$FoodAllergies', '$Province', '$HowManySisBro', '$YourRank', '$NameSchool', '$MajorSchool', '$University', '$Major', '$Level', '$GPA','$SubFavorite', '$SubUnprofessional', '$AbilityOutstanding', '$WhyChoose', '$PlanAfterSchool', '$ClarifyPlan', '$LookFuture','$WorldInvention', '$YourIdolWhoWhy', '$YourMotto', '$HowToManager', '$Feeling', '$inspiration', '$Featured', '$expectation', '$knowledge')";




// --------------------------------------------------------------------------------------
if (mysqli_query($conn, $sql_team_register)) { //ถ้า insert ได้จะเข้า new rec...
    // echo "New record created successfully team_register"."<br>";
} else {
    echo "Error: " . $sql_team_register . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sql_team_info)) { //ถ้า insert ได้จะเข้า new rec...
  // echo "New record created successfully sql_team_info"."<br>";
} else {
  echo "Error: " . $sql_team_info . "<br>" . mysqli_error($conn);
}

// echo "---------insert OK!!---------";
mysqli_close($conn);

?>