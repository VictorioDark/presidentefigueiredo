<?php

$senha = $_POST["senha"];
$email = $_POST["email"];

$servername = "localhost";
$database = "";
$username = "";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
echo "Connected successfully!";

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$email', '$senha')"; 
mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);
echo "Cadastrado com sucesso!<br>";

	?>

