<?php

//RELIER CONEXION BDD

require "conexion.php";


$sql = "SELECT * FROM `patients`"; 

$dataObject = $conexion->query($sql);

$data = $dataObject->fetchAll(PDO::FETCH_ASSOC);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2b371e877c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ajout-patient.php">Ajout patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="liste-patients.php">Liste patients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ajout-rdv.php">Ajout RDV</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-danger" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1 class="d-flex justify-content-center">AJOUT RDV</h1>


<form action="ajout-rdv2.php" method="post">
  <ul>
   <li> <select name="idPatients" id="">
    <?php 
    foreach($data as $key => $value) {  ?>

    <option value="<?=$value['id'] ?> " >
    
    <?= $value['firstname'] ?>

    <?= $value['lastname'] ?>
       
    </option>
<?php } ?>





</select> </li> <br>
        <li>   
        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required><br>
        </li><br>
        <li>
        <label for="heure">Heure :</label>
        <input type="time" id="heure" name="heure" required><br>
        </li><br>
      

        <button type="submit" class="btn btn-danger btn-lg">Envoyer</button>
</ul>
    </form>


  





</ul>

</form>




</body>

<script src="index.js"></script>
</html>