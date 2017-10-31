<?php
            
/*try{
   $bdd = new PDO('mysql:host=grangeprylprojet.mysql.db;dbname=grangeprylprojet;charset=utf8', 'grangeprylprojet', '2Tmq9cW5');
   echo "connexion OK";
}*/

try
    {
        //paramètre de connexion local
        $host='localhost';
        $bdd='g4infomedia';
        $user='root';
        $pwd='sparadrap2802';
             
        // On se connecte à la base de donnée
        $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd.';charset=utf8', $user, $pwd);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
         
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout                                                
        die('Erreur : '.$e->getMessage());
    }

?>