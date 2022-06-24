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
       <form enctype="multipart/form-data" method="POST" >
            <div class="row">
            <div class="col">
      
            <table class="table table-dark table-hover">
            <thead>
                <tr>
                  <th scope="col bg-light"> </th>
                  <th scope="col">1º Bimestre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <th scope="row">Matemática</th>
                <th scope="row"><input type="number" name="mat" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Português</th>
                <th scope="row"><input type="number" name="port" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">História</th>
                <th scope="row"><input type="number" name="hist" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Geografia</th>
                <th scope="row"><input type="number" name="geo" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Filosofia</th>
                <th scope="row"><input type="number" name="filo" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Sociologia</th>
                <th scope="row"><input type="number" name="socio" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Literatura</th> 
                <th scope="row"><input type="number" name="lit" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Lingua Inglesa</th>
                <th scope="row"><input type="number" name="ing" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Biologia</th>
                <th scope="row"><input type="number" name="bio" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Química</th>
                <th scope="row"><input type="number" name="qui" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Física</th>
                <th scope="row"><input type="number" name="fisi" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Artes</th>
                <th scope="row"><input type="number" name="art" id="" min="0" max="10" step=".5" "></th>
                </tr>
               
              </tbody>
            </table>
            <button type="submit" class="btn btn-light"> Enviar dados </button>
            </form>
            </div>
            <div class="col">
            <h2 class="text-light"> Dados relacionados a nota </h2>
    </div>
            

            <hr class="mt-2">

            <?php
if($_POST){
  include_once("conectar.php");
    $matematica = $_POST['mat'];
    $portugues = $_POST['port'];
    $geografia = $_POST['geo'];
    $historia = $_POST['hist'];
    $literatura = $_POST['lit'];
    $filosofia = $_POST['filo'];
    $sociologia = $_POST['socio'];
    $ingles = $_POST['ing'];
    $biologia = $_POST['bio'];
    $quimica = $_POST['qui'];
    $fisica = $_POST['fisi'];
    $artes = $_POST['art'];

$sql = "insert into b_um (nota_mat,nota_port,nota_geo,nota_hist,
nota_lit,nota_filo,nota_socio,nota_ing,nota_bio,nota_qui,nota_fisi,nota_art) values 
('$matematica','$portugues','$geografia','$historia','$literatura','$filosofia','$sociologia',
'$ingles','$biologia','$quimica','$fisica','$artes',)";


}

  $mysqli = $mysqli->close();

?>