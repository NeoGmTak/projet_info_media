<?php require_once 'libs.php'; ?>

<!DOCTYPE html>
<html>
    <?php echo html_header('Où manger', array('css/styleOuManger.css'));  ?>
    <head>
        <?php 
            include 'head.html';
        ?>
        <!--<style>
            background-image: url("images/backgroundOuManger.jpg");
        </style>-->
    </head>
    
    <body id="ouManger">
        <div class="container">
            <?php
                include 'header.html';
            ?>
            
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
                
                <div class="col-md-2">
                    <a href="#" id="filtreBouchonLyonnais">Bouchon Lyonnais</a>
                </div>
            </div>
            
            <!-- Cartes descriptives des lieux -->
            
            <div class="row lieuRestauration">
                <!-- Version en dur
                <div class="col-md-2 divLieuRepas fastfood">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image fast-food">
                    </div>
                    
                    <div class="row">
                        <h2>Fast-Food 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                
                <div class="col-md-offset-1 col-md-2 divLieuRepas restaurant">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image restaurant">
                    </div>
                    
                    <div class="row">
                        <h2>Restaurant 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                
                <div class="col-md-offset-1 col-md-2 divLieuRepas boulangerie">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image boulangerie">
                    </div>
                    
                    <div class="row">
                        <h2>Boulangerie 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                
                <div class="col-md-offset-1 col-md-2 divLieuRepas bouchonLyonnais">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image bouchon lyonnais">
                    </div>
                    
                    <div class="row">
                        <h2>Bouchon 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>                
            
            
            
                <div class="col-md-2 divLieuRepas fastfood">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image fast-food">
                    </div>
                    
                    <div class="row">
                        <h2>Fast-Food 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                
                <div class="col-md-offset-1 col-md-2 divLieuRepas restaurant">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image restaurant">
                    </div>
                    
                    <div class="row">
                        <h2>Restaurant 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                
                <div class="col-md-offset-1 col-md-2 divLieuRepas boulangerie">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image boulangerie">
                    </div>
                    
                    <div class="row">
                        <h2>Boulangerie 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div>
                
                <div class="col-md-offset-1 col-md-2 divLieuRepas bouchonLyonnais">
                    <div class="row">
                        <img src="images/imageResto.jpg" alt="Image bouchon lyonnais">
                    </div>
                    
                    <div class="row">
                        <h2>Bouchon 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                </div> -->                
            </div> 
            
            <!-- Cartes lieux restauration : version BDD -->
            
        </div>
    </body>
</html>

<script>
    $('#filtreTout').click(function(){
        /*$('.restaurant').css("display", "inline-block");
        $('.fastfood').css("display", "inline-block");
        $('.boulangerie').css("display", "inline-block");
        $('.bouchonLyonnais').css("display", "inline-block");*/
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=1',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                $('.lieuRestauration').html(nomEtablissement);
            },
            error : function(resultat, statut, erreur){
                alert(erreur);
            }
        });
    });
    
    $('#filtreFastFood').click(function(){
        /*$('.restaurant').css("display", "none");
        $('.fastfood').css("display", "inline-block");
        $('.fastfood').css("margin-left", "0");
        $('.boulangerie').css("display", "none");
        $('.bouchonLyonnais').css("display", "none");*/
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'fast-food\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                $('.lieuRestauration').html(nomEtablissement);
            },
            error : function(resultat, statut, erreur){
                alert(erreur);
            }
        });
    });
    
    $('#filtreRestaurant').click(function(){
        /*$('.restaurant').css("display", "inline-block");
        $('.restaurant:first-child').css("margin-left", "0");
        $('.fastfood').css("display", "none");
        $('.boulangerie').css("display", "none");
        $('.bouchonLyonnais').css("display", "none");*/
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'restaurant\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                $('.lieuRestauration').html(nomEtablissement);
            },
            error : function(resultat, statut, erreur){
                alert(erreur);
            }
        });
    });
    
    $('#filtreBoulangerie').click(function(){
        /*$('.restaurant').css("display", "none");
        $('.fastfood').css("display", "none");
        $('.boulangerie').css("display", "inline-block");
        $('.boulangerie').css("margin-left", "0");
        $('.bouchonLyonnais').css("display", "none");*/
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'boulangerie\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                $('.lieuRestauration').html(nomEtablissement);
            },
            error : function(resultat, statut, erreur){
                alert(erreur);
            }
        });
    });
    
    $('#filtreBouchonLyonnais').click(function(){
        /*$('.restaurant').css("display", "none");
        $('.fastfood').css("display", "none");
        $('.boulangerie').css("display", "none");
        $('.bouchonLyonnais').css("display", "inline-block");
        $('.bouchonLyonnais').css("margin-left", "0");*/
        $.ajax({
            url: 'requete.php', //ressource ciblée
            type : 'GET',
            data : 'typeEtablissement=\'bouchon-lyonnais\'',
            dataType : 'html',
            success : function(nomEtablissement, statut){
                $('.lieuRestauration').html(nomEtablissement);
            },
            error : function(resultat, statut, erreur){
                alert(erreur);
            }
        });
    });
</script>