<?php

    $_SESSION["Pic"] = $_POST["Pic"];
    $_SESSION["Tiltle"] = $_POST["Tiltle"];
    $_SESSION["NameThai"] = $_POST["NameThai"] + " " +$_POST["LastnameThai"];
    $_SESSION["NameEng"] = $_POST["NameEng"]+ " " +$_POST["LastnameEng"];
    $_SESSION["NickName"] = $_POST["NickName"];
    $_SESSION["Tell"] = $_POST["Tell"];
    $_SESSION["BirthDay"] = $_POST["BirthDay"];
    $_SESSION["SizeShirt"] = $_POST["SizeShirt"];
    $_SESSION["Food"] = $_POST["Food"];
    $_SESSION["FoodAllergies"] = $_POST["FoodAllergies"];    
    $_SESSION["Province"] = $_POST["Province"];
    $_SESSION["HowManySisBro"] = $_POST["HowManySisBro"];  
    $_SESSION["YourRank"] = $_POST["YourRank"];

?>