<?php
$senha = $_GET["senha"];
$email = $_GET["email"];
$servername = "localhost";
$database = "";
$username = "";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
echo "Connected successfully!";
$result = mysqli_query($conn, "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'");
    if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
echo "OPAAAA!";
header('Status: 301 Moved Permanently', false, 301);    
header('Location: cadastro.html');    
}
else{
unset ($_SESSION['email']);
unset ($_SESSION['senha']);
header('location:cadastro.php');
   
  }
	?>
