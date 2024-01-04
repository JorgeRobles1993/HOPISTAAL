<?php

require_once "conexion.php";

if (!empty($_GET['dateHour'])
&& !empty($_GET['idPatients'])) {


    
    $sql = "INSERT INTO `appointments`(`dateHour`, `idPatients`) VALUES ('"
            . $_GET['dateHour']. "', '"
            . $_GET['idPatients'] ."')";
            
            
        
         $conexion->query($sql);
    
         header("Location: liste-rdv.php");
}else{

}