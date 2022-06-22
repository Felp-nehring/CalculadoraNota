    <?php
$servidor = 'localhost'; 
$usuario = 'root';
$senha = '';
$banco = 'calculadora';
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
//check connection
if ( $mysqli -> connect_errno){
  echo "Failed to connect to MySQL: " .$mysqli -> connect_error;
  exit();
}
//else
//echo "Conexão efetuada com sucesso! Programação oo <br>";

?>  




