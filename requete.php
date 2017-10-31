<?php

include 'connexionBDD.php';

$where = ($_GET['typeEtablissement'] == 1) ? ' WHERE 1' : ' WHERE typeEtablissement ='.$_GET['typeEtablissement'];
$reponse = $bdd->query('SELECT nom FROM OuManger'.$where);
while($donnee = $reponse->fetch()) {
    echo $donnee['nom'];
}

?>