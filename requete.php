<?php

include 'connexionBDD.php';

$where = ($_GET['typeEtablissement'] == 1) ? ' WHERE 1 AND page='.$_GET['page'] : ' WHERE typeEtablissement ='.$_GET['typeEtablissement'];
$reponse = $bdd->query('SELECT typeEtablissement, nom, description, urlImage FROM etablissement'.$where);
while($donnee = $reponse->fetch()) {
    echo '<img src="'.$donnee['urlImage'].'" alt="image établissement" class="imgEtablissement"><br>';
    echo '<h4 class="typeEtab">'.strtoupper($donnee['typeEtablissement']).'</h4><br>';
    echo '<h3 class="nomEtab">'.$donnee['nom'].'</h3><br>';
    echo '<p class="desc">'.$donnee['description'].'</p>;';
}

?>