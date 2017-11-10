<?php

include 'connexionBDD.php';

$where = ($_GET['typeEtablissement'] == 1) ? ' WHERE 1' : ' WHERE typeEtablissement ='.$_GET['typeEtablissement'];
$reponse = $bdd->query('SELECT typeEtablissement, nom, description, urlImage FROM OuManger'.$where);
while($donnee = $reponse->fetch()) {
    echo '<img src="'.$donnee['urlImage'].'" alt="image établissement restauration" class="imgEtablissementResto"><br>';
    echo '<h4 class="typeEtabRestau">'.strtoupper($donnee['typeEtablissement']).'</h4><br>';
    echo '<h3 class="nomEtabRestau">'.$donnee['nom'].'</h3><br>';
    echo '<p class="descRestau">'.$donnee['description'].'</p>;';
}

?>