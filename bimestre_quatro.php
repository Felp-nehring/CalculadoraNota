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
        <a href="bimestre_um.php" class="btn btn-light ms-2">  1º Bimestre  </a>
       <a href="bimestre_dois.php" class="btn btn-light ms-2">  2º Bimestre  </a>
       <a href="bimestre_tres.php" class="btn btn-light ms-2"> 3º Bimestre  </a>
       <a href="bimestre_quatro.php" class="btn btn-light ms-2">  4º Bimestre  </a>
       <a href="bimestre.php" class="btn btn-light ms-3"> Todos os Bimestres </a> 
       <hr>
       <div class="row">
            <div class="col">
        <form>
        <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col bg-light"> </th>
              <th scope="col">4º Bimestre</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <th scope="row">Matemática</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Português</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">História</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Geografia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Filosofia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Sociologia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Literatura</th> 
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Lingua Inglesa</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Biologia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Química</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Física</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Artes</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
           
          </tbody>
        </table>
        <button type="submit" class="btn btn-light"> Enviar dados </button>
            </form>
            </div>
            <div class="col">
      <h2 class="text-light"> Dados relacionados a nota </h2>
    </div>

        <hr>