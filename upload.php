<?php 
    session_start();
?>

<!doctype html>
<html>
<head>
</head>
<body>
<div class="container">
    <?php 
    include_once('conectar.php');
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
        $mysqli = $mysqli->close();
        ?>