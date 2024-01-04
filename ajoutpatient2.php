<?php

require_once "conexion.php";

if (!empty($_GET['firstname'])
&& !empty($_GET['lastname'])
&& !empty($_GET['email'])
&& !empty($_GET['telephone'])
&& !empty($_GET['birthdate'])) {


    
    $sql = "INSERT INTO `patients`(`firstname`, `lastname`, `mail`, `phone`, `birthdate`) VALUES ('"
            . $_GET['firstname']. "', '"
            . $_GET['lastname']. "', '"
            . $_GET['email']. "', '" 
            . $_GET['telephone'] . "', '"
            . $_GET['birthdate'] ."')";
            
            
        
         $conexion->query($sql);
    
         header("Location: liste-patients.php");
}else{


    echo "requete invalide";
}