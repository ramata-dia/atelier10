<?php
require 'connexion.php';
require 'insertion.php';
try {
    //Recupération des données dans la base de données
  $req = $conn->query("SELECT nom, prenom FROM Etudiant ORDER BY nom ");
  if ($req === false ){
      die("Une erreur est survenue ! \n");
  }else {
    while($result = $req->fetch(PDO::FETCH_ASSOC)):
        //Affichage des etudiants dans la base de données
        echo $result['nom'].' '.$result['prenom']."\n";
    endwhile;

      
      //Afichage sur le navigateur
        echo'<h1>Liste des Etudiants</h1>';
        echo'<table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Age</th>
                    <th>Classe</th>
                    <th>Date Inscription</th>
                </tr>';
                while($result = $req->fetch(PDO::FETCH_ASSOC)):
                    echo '<tr>';
                        echo'<td>';
                            echo $result['id'];
                        echo'</td>';
                        echo'<td>';
                            echo $result['nom'];
                        echo'</td>';
                        echo'<td>';
                            echo $result['prenom'];
                        echo'</td>';
                        echo'<td>';
                            echo $result['age'];
                        echo'</td>';
                        echo'<td>';
                            echo $result['classe'];
                        echo'</td>';
                        echo'<td>';
                            echo $result['date_inscription'];
                        echo'</td>';
                    echo'</tr>';    
                endwhile;
        echo '</table>';
       
    }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
