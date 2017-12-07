<?php require_once 'libs.php'; ?>

<!DOCTYPE html>
<html>
    <?php echo html_header('Où dormir', array('styleOuDormir.css'));  ?>
    <head>
        <link rel="stylesheet" href="css/uber-google-maps.min.css">
    </head>
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
        
        <div class="container-fluid">
            <div class="bg_plan">
                <h1 class="plan">Plan interactif</h1>
            </div>

            <div id="map-container"></div>            
        </div>
        
        <script src="js/uber-google-maps.min.js"></script>
        <script>
            ;(function ( $, window, document, undefined ) { $(document).ready(function() {$("#map-container").UberGoogleMaps({"positionType":"search","lat":"45.7629811","lng":"4.828019899999958","zoom":"15","width":640,"height":480,"responsive":1,"searchQuery":"Vieux Lyon, 69005 Lyon, France","language":"en","markers":[{"id":"45.765831523410405_4.8278045654296875","lat":45.765831523410405,"lng":4.8278045654296875,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Collège Hôtel"},{"id":"45.7630023652255_4.825894832611084","lat":45.7630023652255,"lng":4.825894832611084,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Villa Florentine"},{"id":"45.76520283399076_4.827868938446045","lat":45.76520283399076,"lng":4.827868938446045,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Hôtel Saint Paul"},{"id":"45.75915507866229_4.824349880218506","lat":45.75915507866229,"lng":4.824349880218506,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Auberge de Jeunesse HI Lyon"},{"id":"45.7602030040149_4.826222062110901","lat":45.7602030040149,"lng":4.826222062110901,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"Le Chat Perché"},{"id":"45.76180479473289_4.82674241065979","lat":45.76180479473289,"lng":4.82674241065979,"icon":"preset","icon_url":"http://webcraft.cc/uploads/uber-google-maps/editor/img/uber-google-maps/icons/66.png","title":"La loge des Avocats"}],"infoWindows":[{"id":6882,"marker_id":"45.765831523410405_4.8278045654296875","title":"Collège Hôtel","subtitle":"Hôtel","phone":"04 72 10 05 05","address":"5 Place Saint-Paul, 69005 Lyon","email":"contact@ermitage-college-hotel.com","web":"college-hotel.com","content":"","open":0},{"id":11933,"marker_id":"45.76520283399076_4.827868938446045","title":"Hôtel Saint-Paul","subtitle":"Hôtel","phone":"04 78 28 13 29","address":"6 Rue Lainerie, 69005 Lyon","email":"reservation@hotelsaintpaul.eu","web":"hotelsaintpaul.eu","content":"","open":0},{"id":16640,"marker_id":"45.7630023652255_4.825894832611084","title":"Villa Florentine","subtitle":"Hôtel","phone":"04 72 56 56 56","address":"25 Montée Saint-Barthélémy, 69005 Lyon","email":"florentine@relaischateaux.com","web":"http://www.villaflorentine.com/fr/","content":"","open":0},{"id":20689,"marker_id":"45.7602030040149_4.826222062110901","title":"Le chat Perché","subtitle":"Chambre d'hôte ","phone":"06 12 47 37 64","address":"2 Avenue du Doyenné, 69005 Lyon","email":"lechatperche.lyon@gmail.com","web":"le-chat-perche.com","content":"","open":0},{"id":42569,"marker_id":"45.75915507866229_4.824349880218506","title":"Auberge de jeunesse HI Lyon","subtitle":"Auberge de jeunesse","phone":"04 78 15 05 50","address":"41-45 Montée du Chemin Neuf, 69005 Lyon","email":"lyon@hifrance.org","web":"hifrance.org","content":"","open":0},{"id":72541,"marker_id":"45.76180479473289_4.82674241065979","title":"La loge des Avocats","subtitle":"Chambre d'hôte","phone":"06 59 27 09 15","address":"8 Rue de la Bombarde, 69005 Lyon","email":"info@mon-hotel-particulier-lyon.com","web":"mon-hotel-particulier-lyon.com","content":"","open":0}],"showInfoWindowsOn":"click","animateMarkers":1,"style_type":"default","style_index":0,"style_array_custom":"[]","auto_sign_in":0,"fullscreen_enabled":0,"disable_scroll":0,"load_api":1,"style_array":[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}],"title":"","shortcode":""});}); })( jQuery, window, document );
        </script>
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
                    $('.row.lieuRepos').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
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
                    $('.row.lieuRepos').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
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
                    $('.row.lieuRepos').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
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
                    $('.row.lieuRepos').append('<div class="col-md-3 col-sm-4 col-xs-6 carteLieu">'+tabLieux[i]+'</div>').fadeIn(1000);
                }
            },
            error : function(resultat, statut, erreur){
                console.log(erreur);
            }
        });
    });
</script>