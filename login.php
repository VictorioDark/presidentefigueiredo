<?php
$senha = $_GET["senha"];
$email = $_GET["email"];
$servername = "localhost";
$database = "allfigueiredo";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	


  $sql = "SELECT * FROM fotos WHERE nome LIKE oi";
 
  $resultado = mysqli_query($sql);
  $img = mysqli_fetch_object($resultado);
 
  header("Content-type: image/jpeg");
echo $id;
$inseto = $img->img;
echo $img;
	?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>


  <img src="<?= $img->imagem; ?>" height="42" width="42">
  </body>
</html>