<?php
 require_once("../config.php");
       $myPet->happiness = $_SESSION["happiness"];
       $myPet->satiety = $_SESSION["satiety"];
       $myPet->sleep = $_SESSION["sleep"];
        $myPet->decreaseIndicators();

      $_SESSION["happiness"]=$myPet->happiness;
      $_SESSION["satiety"]=$myPet->satiety;
      $_SESSION["sleep"]=$myPet->sleep;
       header("location:/");
?>