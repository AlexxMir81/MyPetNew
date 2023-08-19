<?php
 require_once("../config.php");
       $myPet->happiness = $_SESSION["happiness"];

        $myPet->toGame();

      $_SESSION["happiness"]=$myPet->happiness;
       header("location:/");
?>