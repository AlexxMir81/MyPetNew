<?php
 require_once("../config.php");
       $myPet->satiety = $_SESSION["satiety"];

        $myPet->toEat();

      $_SESSION["satiety"]=$myPet->satiety;
       header("location:/");
?>