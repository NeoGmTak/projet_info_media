<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $subject=$_POST['objet'];
    $message=$_POST['msg'];

    $headers ="Envoyé par : $nom $prenom<$email>";

    $dest="maxime.fauchille@gmail.com";
    $body="$message \n\n$headers";

    if(mail($dest,$subject,$body)){
    ?>
<div class="validation">
    <p align="center">Votre mail a bien été envoyé, merci de votre retour.<br></p>
</div>
<?php
    }else{
        ?>
    <div class="validation">
        <p align="center">Une erreur s'est produite. Veuillez-nous excuser pour la gêne occasionnée.<br></p>
    </div>
    <?php
    }
    ?>
