<?php
    session_start();
    include('DB/session_page8.php');

    // include_once("/LoginV1/DB/insert_info.php")."<br>";
    echo $_SESSION["Team_Name"] ."<br>";
 
    echo "page 3"."<br>";
    echo $_SESSION["Team_Type"] ."<br>";
    echo $_SESSION["University"] ."<br>";
    echo $_SESSION["Member"] ."<br>";
    echo $_SESSION["Adviser"] ."<br>";
    echo $_SESSION["Email"] ."<br>";  
  
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
      
?>

