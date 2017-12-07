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
        ?><div class="validation"><p align="center" >Votre mail a été envoyé<br></p>
            <p>Vous allez bientot etre redirigé vers la page d'acceuil<br>
                Si vous n'etes pas redirigé au bout de 3 secondes cliquez <a href="http://grangepro.ch/vieux-lyon/index.php">ici</a></p></div><?php
        }else{
            ?><div class="validation"><p align="center" >Une erreur s'est produite<br></p>
        <p>Vous allez bientot etre redirigé vers la page d'acceuil<br>
                Si vous n'etes pas redirigé au bout de 3 secondes cliquez <a href="http://grangepro.ch/vieux-lyon/index.php">ici</a></p></div><?php
        }
        ?>
        <META http-equiv="refresh" content="3; URL=http://grangepro.ch/vieux-lyon/index.php"></META>