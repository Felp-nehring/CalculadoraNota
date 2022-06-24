<?php
include_once("conectar.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Nota</title>
</head>
<body style="text-align:center;">  
  
    <?php 
    include ("navbar.php")
    ?>
    <div class="container">
        <hr>
<h2 class="text-center text-light"> Calculadora de nota Bimestral</h2>
        <hr>
       <a href="bimestre_um.php"> <button class="btn btn-light"> 1º Bimestre </button> </a>
       <a href="bimestre_dois.php"> <button class="btn btn-light"> 2º Bimestre </button> </a>
       <a href="bimestre_tres.php"> <button class="btn btn-light"> 3º Bimestre </button> </a>
       <a href="bimestre_quatro.php"> <button class="btn btn-light"> 4º Bimestre </button> </a>
       <a href="bimestre.php"> <button class="btn btn-light"> Todos os Bimestres </button> </a>

    <?php 
    include ("bimestre.php")
    ?>
</div>
</body>
</html>