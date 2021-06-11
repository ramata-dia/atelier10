<?php
require_once 'connexion.php';
require_once 'insertion.php';

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom ,prenom,age,date FROM etudiant ORDER BY nom');

while ($donnees = $reponse->fetch())
{
    echo $donnees['nom'].' '.$donnees['prenom'].' '.$donnees['age'] . '<br/>';
}


$reponse->closeCursor();

?>