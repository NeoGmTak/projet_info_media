<?php

include 'connexionBDD.php';

$where = ($_GET['typeEtablissement'] == 1) ? ' WHERE 1' : ' WHERE typeEtablissement ='.$_GET['typeEtablissement'];
$reponse = $bdd->query('SELECT typeEtablissement, nom, description, urlImage FROM OuManger'.$where);
while($donnee = $reponse->fetch()) {
    echo "<img src=\"".$donnee['urlImage']."\" alt=\"image établissement restauration\" class=\"imgEtablissementResto\"> <br> <h4 class=\"typeEtabRestau\">".strtoupper($donnee['typeEtablissement'])."</h4> <h3 class=\"nomEtabRestau\">".$donnee['nom']."</h3><p class=\"descRestau\">".$donnee['description']."</p><br>;";
}

?>