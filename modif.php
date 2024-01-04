<?php

//RELIER CONEXION BDD

require "conexion.php";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        MODIFIER PATIENT

        <?php
        if(!empty($_GET['id'])){
            
            $sql = "UPDATE `patients` SET lastname = lastname, firstname = firstname, mail = mail, phone = phone, birthdate = birthdate WHERE id = id";
            
            $dataObject = $conexion->query($sql);
            
            $data = $dataObject->fetchAll(PDO::FETCH_ASSOC);
            
            
            
        }

        ?>

<form action="modif.php" method="get" class="">
    <ul>
    <li>
    <i class="fa-solid fa-file-signature fa-2xl"></i> <input type="text" placeholder="first name" name="firstname" id=""> 
    </li> <br>
    <li>
    <i class="fa-solid fa-file-signature fa-2xl"></i> <input type="text" placeholder="last name" name="lastname" id=""> 
    </li> <br>
    <li>
    <i class="fa-solid fa-envelope fa-bounce fa-2xl"></i> <input type="email" placeholder="email" name="email" id="" >
    </li> <br>
    <li> 
    <i class="fa-solid fa-phone fa-shake fa-2xl"></i> <input type="text" placeholder="telephone" name="telephone" id=""> 
    </li> <br>
    <li> 
    <input type="date" placeholder="birthdate" name="birthdate" id=""> 
    </li> <br>



    <button type="submit" class="btn btn-danger btn-lg">Envoyer</button>

</body>
</html>