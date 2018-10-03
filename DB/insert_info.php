<?php
include_once("conn/conn.php");
// session_start();

  $Team_Name = $Team_Pass = "";

  // page 3
  $Team_Type = $_SESSION["Team_Type"] ;
  $University = $_SESSION["University"] ;
  $Member = $_SESSION["Member"] ;
  $Adviser = $_SESSION["Adviser"] ;
  $Email = $_SESSION["Email"] ;  

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

  // page 5
  $NameSchool = $_SESSION["NameSchool"] ;
  $MajorSchool = $_SESSION["MajorSchool"] ;
  $University = $_SESSION["University"] ;
  $Major = $_SESSION["Major"] ;
  $Level = $_SESSION["Level"] ;;
  $_POST["GPA"] = $_SESSION["GPA"];
  $SubFavorite = $_SESSION["SubFavorite"];
  $SubUnprofessional = $_SESSION["SubUnprofessional"] ;
  $AbilityOutstanding = $_SESSION["AbilityOutstanding"] ;
  $WhyChoose = $_SESSION["WhyChoose"] ;    
    
  // page 6
  $PlanAfterSchool = $_SESSION["PlanAfterSchool"] ;
  $MajorSchool = $_SESSION["MajorSchool"];
  $ClarifyPlan = $_SESSION["ClarifyPlan"];
  $LookFuture = $_SESSION["LookFuture"] ;
  $WorldInvention = $_SESSION["WorldInvention"]; 
    
  ///page 7  
  $YourIdolWhoWhy = $_SESSION["YourIdolWhoWhy"] ;
  $YourMotto = $_SESSION["YourMotto"] ;
  $HowToManager = $_SESSION["HowToManager"] ;

  /// page 8  
  $Feeling = $_SESSION["Feeling"] ;
  $inspiration = $_SESSION["inspiration"] ;
  $Featured = $_SESSION["Featured"] ;
  $expectation = $_SESSION["expectation"] ;
  $knowledge = $_SESSION["knowledge"] ;
    
    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Team_Name = test_input($_POST["Team_Name"]);
  $Team_Pass = test_input($_POST["Team_Pass"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$sql_login = "SELECT * FROM team_login WHERE Team_Name = $Team_Name";
$result_login = mysqli_query($conn, $sql_login);
$row_login = mysqli_fetch_array($result_login);
$ID_team = $row_login["ID"];

//insert data
$sql_team_register = "INSERT INTO team_register(ID_team, Team_Type, Team_Name, University, Member, Adviser, Email)
VALUES ($ID_team,[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";


$sql_team_info = "INSERT INTO team_info(ID, Team_ID, Pic, Email, Tiltle, NameThai, NameEng, NickName, Tell, BirthDay, SizeShirt, Food, FoodAllergies, Province, HowManySisBro, YourRank, NameSchool, MajorSchool, University, Major, Level, GPA, SubFavorite, SubUnprofessional, AbilityOutstanding, WhyChoose, PlanAfterSchool, ClarifyPlan, LookFuture, WorldInvention, YourIdolWhoWhy, YourMotto, HowToManager, Feeling, inspiration, Featured, expectation, knowledge, Daystartcamp) 
VALUES (NUll,$ID_team,[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25],[value-26],[value-27],[value-28],[value-29],[value-30],[value-31],[value-32],[value-33],[value-34],[value-35],[value-36],[value-37],[value-38],[value-39])";




// --------------------------------------------------------------------------------------
if (mysqli_query($conn, $sql)) { //ถ้า insert ได้จะเข้า new rec...
    // echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>