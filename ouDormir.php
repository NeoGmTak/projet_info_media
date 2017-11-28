<?php require_once 'libs.php'; ?>

<!DOCTYPE html>
<html>
    <?php echo html_header('Où dormir', array('styleOuDormir.css'));  ?>
    
    <body id="ouDormir">
        <?php
            include 'header.html';
        ?>
        <div class="container">    
            <div class="row" id="filtreOuDormir">
                <div class="col-md-2">
                    <a href="#" id="filtreTout">Tout</a>
                </div>
                
                <div class="col-md-3">
                    <a href="#" id="filtreHotel">Hôtel</a>
                </div>
                
                <div class="col-md-3">
                    <a href="#" id="filtreAuberge">Auberge</a>
                </div>
                
                <div class="col-md-3">
                    <a href="#" id="filtreChambreHote">Chambre d'Hôte</a>
                </div>
            </div>
            
            <!-- Cartes descriptives des lieux -->
            
            <div class="row lieuRepos"></div> 
            
        </div>
    </body>
</html>

<script>
    $('#filtreTout').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=1&page=\'ouDormir\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRepos').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRepos').append('<div class="col-md-2 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreHotel').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'hotel\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRepos').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRepos').append('<div class="col-md-2 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreAuberge').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'auberge\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRepos').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRepos').append('<div class="col-md-2 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreChambreHote').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'chambre-hote\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRepos').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRepos').append('<div class="col-md-2 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
</script>