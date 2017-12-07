<?php require_once 'libs.php'; ?>

<!DOCTYPE html>
<html>
    <?php echo html_header('Où manger', array('styleOuManger.css','style_footer.css'));  ?>
    <head>
        <link rel="stylesheet" href="css/uber-google-maps.min.css">
    </head>
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
        
        <div class="container-fluid">
            <div class="bg_plan">
                <h1 class="plan">Plan interactif</h1>
            </div>

            <div id="map-container"></div>            
        </div>
        
        <footer>
            <?php include 'footer.html'; ?>
        </footer>
        
        <script src="js/uber-google-maps.min.js"></script>
        <script>
            ;(function ( $, window, document, undefined ) { $(document).ready(function() {$("#map-container").UberGoogleMaps({"positionType":"search","lat":"45.7629811","lng":"4.828019899999958","zoom":"15","width":640,"height":480,"responsive":1,"searchQuery":"Vieux Lyon, 69005 Lyon, France","language":"fr","markers":[{"id":"45.76178982493907_4.826259613037109","lat":45.76178982493907,"lng":4.826259613037109,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Bouchon Les Lyonnais"},{"id":"45.762635611992934_4.827085733413696","lat":45.762635611992934,"lng":4.827085733413696,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Le comptoir du Boeuf"},{"id":"45.76246346168499_4.827702641487122","lat":45.76246346168499,"lng":4.827702641487122,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Boulangerie Du Palais"},{"id":"45.76580158597966_4.827826023101807","lat":45.76580158597966,"lng":4.827826023101807,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Boulangerie Chez St Paul"},{"id":"45.76573422670173_4.827332496643066","lat":45.76573422670173,"lng":4.827332496643066,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Taco Taco"},{"id":"45.76403899142626_4.8283034563064575","lat":45.76403899142626,"lng":4.8283034563064575,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Mezzo di Pasta"}],"infoWindows":[{"id":422,"marker_id":"45.76178982493907_4.826259613037109","title":"Bouchon Les Lyonnais","subtitle":"Bouchon Lyonnais","phone":"04 78 37 64 82","address":"19 Rue de la Bombarde, 69005 Lyon","email":"restaurantlyonnais@gmail.com","web":" restaurant-lyonnais.com","content":"","open":0},{"id":26306,"marker_id":"45.76246346168499_4.827702641487122","title":"Boulangerie Du Palais","subtitle":"Boulangerie","phone":"04 78 37 09 43","address":"8 Rue du Palais de Justice, 69005 Lyon","email":"Facebook Messenger","web":"https://www.facebook.com/BoulangerieDuPalais/","content":"","open":0},{"id":42830,"marker_id":"45.76573422670173_4.827332496643066","title":"Taco Taco","subtitle":"Fast-Food","phone":"+33 9 53 25 99 87","address":"12 Place Saint-Paul, 69005 Lyon","email":"Facebook Messenger","web":"taco-taco.fr","content":"","open":0},{"id":71914,"marker_id":"45.76403899142626_4.8283034563064575","title":"Mezzo di Pasta","subtitle":"Fast-food","phone":"09 67 45 99 26","address":"7 Rue Saint-Jean, 69005 Lyon","email":"Contact e-mail sur le site","web":"http://www.mezzodipasta.fr","content":"","open":0},{"id":74428,"marker_id":"45.76580158597966_4.827826023101807","title":"Boulangerie Chez St Paul","subtitle":"Boulangerie","phone":"04 78 28 67 85","address":"7 Rue Octavio Mey, 69005 Lyon","email":"saintpaul@boulangeriechezjules.fr","web":"boulangeriechezjules.fr","content":"","open":0},{"id":94874,"marker_id":"45.762635611992934_4.827085733413696","title":"Le Comptoir du Boeuf","subtitle":"Bouchon Lyonnais","phone":"04 78 92 82 35","address":"3 Place Neuve Saint-Jean, 69005 Lyon","email":"contact@comptoirduboeuf.com","web":"comptoirduboeuf.com","content":"","open":0}],"showInfoWindowsOn":"click","animateMarkers":1,"style_type":"default","style_index":0,"style_array_custom":"[]","auto_sign_in":0,"fullscreen_enabled":0,"disable_scroll":0,"load_api":1,"style_array":[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}],"title":"Oumanger","shortcode":""});}); })( jQuery, window, document );
        </script>
    </body>
</html>

<script>
    $(document).ready(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=1&page=\'ouManger\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRestauration').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRestauration').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
    
    $('#filtreTout').click(function(){
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=1&page=\'ouManger\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                var tabLieux = nomEtablissement.split(";");
                $('.row.lieuRestauration').html("").fadeOut(20);
                for(var i = 0; i < tabLieux.length-1; i++){
                    $('.row.lieuRestauration').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
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
                    $('.row.lieuRestauration').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
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
                    $('.row.lieuRestauration').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
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
                    $('.row.lieuRestauration').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
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
                    $('.row.lieuRestauration').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
</script>