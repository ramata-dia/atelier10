
<?php
$servername = "localhost"; // la base de donnée est dans le local
$username = "root"; // nom d'utilisation de la base de donnée
$password = "";
$bbd = "etudiant";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$bbd", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "la connection du base de donnée est avec succée : \n";
} catch(PDOException $e) {
  echo "erreur de connection: \n " . $e->getMessage();
}
?>