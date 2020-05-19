<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allfigueiredo";
$id = $_GET["pag1"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo $id;
$sql = "SELECT * FROM noticias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["data"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>