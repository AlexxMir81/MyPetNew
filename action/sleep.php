<?php
 require_once("../config.php");
       $myPet->sleep = $_SESSION["sleep"];

        $myPet->toSleep();

      $_SESSION["sleep"]=$myPet->sleep;
       header("location:/");
?>