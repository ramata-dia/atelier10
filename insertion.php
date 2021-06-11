
<?php
require_once 'connection.php';
try {
$sql = "INSERT INTO etudiant (nom,prenom,age,date)
VALUES ('mariame','ba',25,now())";
$sql = "INSERT INTO etudiant (nom,prenom,age,date)
VALUES ('fatou','diallo',23,now())";
  $conn->exec($sql);
  echo "New record created successfully : \n";
 
}catch(PDOException $e) {
  echo $sql . "\n" . $e->getMessage();

$conn = null;
   } 
  ?>