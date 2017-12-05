<?php
            
/*try{
   $bdd = new PDO('mysql:host=grangeprylprojet.mysql.db;dbname=grangeprylprojet;charset=utf8', 'grangeprylprojet', '2Tmq9cW5');
   echo "connexion OK";
}*/

try
    {
        //paramètre de connexion local
        $host='povf.myd.infomaniak.com';
        $bdd='povf_projet';
        $user='povf_maxime';
        $pwd='Maxime-123456789';
             
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