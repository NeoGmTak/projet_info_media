<?php require_once 'libs.php'; ?>

<!DOCTYPE html>
<html>
    <?php echo html_header('Où manger', array('styleOuManger.css'));  ?>
    
    <body id="ouManger">
        <?php
            include 'header.html';
        ?>
        <div class="container">    
            <div class="row" id="filtreOuManger">
                <div class="col-md-2">
                    <a href="#" id="filtreTout">Tout</a>
                </div>
                
                <div class="col-md-2">
                    <a href="#" id="filtreFastFood">Fast-Food</a>
                </div>
                
                <div class="col-md-2">
                    <a href="#" id="filtreRestaurant">Restaurant</a>
                </div>
                
                <div class="col-md-2">
                    <a href="#" id="filtreBoulangerie">Boulangerie</a>
                </div>
                
                <div class="col-md-3">
                    <a href="#" id="filtreBouchonLyonnais">Bouchon Lyonnais</a>
                </div>
            </div>
            
            <!-- Cartes descriptives des lieux -->
            
            <div class="row lieuRestauration"></div> 
            
        </div>
    </body>
</html>

<script>
    $('#filtreTout').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=1',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRestauration').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRestauration').append('<div class="carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreFastFood').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'fast-food\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRestauration').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRestauration').append('<div class="carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreRestaurant').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'restaurant\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRestauration').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRestauration').append('<div class="carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreBoulangerie').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'boulangerie\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRestauration').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRestauration').append('<div class="carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreBouchonLyonnais').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'bouchon-lyonnais\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRestauration').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRestauration').append('<div class="carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
</script>