<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vieux Lyon - Activité</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- onepage scroll stylesheet-->
    <link rel="stylesheet" href="css/onepage-scroll.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/activite.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/style_footer.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<?php
include 'header.html';
?>
<div class="wrapper">
    <div class="main">
        <!-- page 1-->
        <section id="page1">
            <!--<div class="overlay"></div>-->
            <div class="content-head">
                <div class="to-bottom">
                    <div class="container-fluid clearfix menu-nav">
                        <div class="row row-page1">
                            <div class="col-xs-4 vignette vignette_red">
                                <a href="#" id="monument-link">
                                    <img src="images/icones/map.png" alt="Sites et monuments" class="img-responsive icone-vignette">
                                    <h3>Visites</h3>
                                </a>
                            </div>
                            <div class="col-xs-4 vignette vignette_black">
                                <a href="#" id="museum-link">
                                    <img src="images/icones/beer.png" alt="Musées" class="img-responsive icone-vignette">
                                    <h3>Sorties</h3>
                                </a>
                            </div>
                            <div class="col-xs-4 vignette vignette_red">
                                <a href="#" id="trip-link">
                                    <img src="images/icones/bike.png" alt="Visites guidées" class="img-responsive icone-vignette">
                                    <h3>Sport</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page 2-->
        <section id="page2">
            <!--<div class="content">-->
                <div class="container-fluid clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 descr-monuments">
                            <div class="row page2-left-content">
                                <div class="col-md-12 content-descr" id="culture-content1">
                                    <h2 class="heading">Visites de Lyon en Segway</h2>
                                    <p>L'entreprise ComhiC, concessionnaire officiel Segway, vou propose de découvrir la ville de Lyon en Segway ou vélo électrique, sur des séances de 1h à 3h.
                                        Vous serez accompagné d'un instructeur qui va vous former à la conduite d'un Segway afin de vous assurer une balade en toute sécurité.</p>
                                    <p class="text-muted"><em>Veuillez cliquer sur une photo pour avoir plus d'informations</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 photo-monuments">
                            <div class="row">
                                <div class="col-sm-6 vignette-photo-monuments" id="culture-image1">
                                    <!--<img src="images/culture-image1.jpg" alt="" class="img-responsive">-->
                                </div>
                                <div class="col-sm-6 vignette-photo-monuments" id="culture-image2">
                                    <!--<img src="images/culture-image2.jpg" alt="" class="img-responsive">-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 vignette-photo-monuments" id="culture-image3">
                                    <!--<img src="images/culture-image3.jpg" alt="" class="img-responsive">-->
                                </div>
                                <div class="col-sm-6 vignette-photo-monuments" id="culture-image4">
                                    <!--<img src="images/culture-image4.jpg" alt="" class="img-responsive">-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 vignette-photo-monuments" id="culture-image5">
                                    <!--<img src="images/culture-image5.jpg" alt="" class="img-responsive">-->
                                </div>
                                <div class="col-sm-6 vignette-photo-monuments" id="culture-image6">
                                    <!--<img src="images/culture-image6.jpg" alt="" class="img-responsive">-->
                                </div>
                            </div>
                        </div>
                    </div>
                <!--</div>-->
            </div>
        </section>
        <!-- page 3 - class section-gray adds gray background-->
        <section id="page3" class="section-gray">
            <div class="content-museum">
                <div class="container-fluid clearfix">
                    <div class="row row-museum1">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <img src="images/culture-miniatures.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 museum-data">
                            <h2 class="heading">Bar</h2>
                            <p>Découvrez les nombreux bars du Vieux Lyon. Véritables lieux de rencontre, venez apprécier une bonne bière bien fraîche entre amis.</p>
                            <p>Vous pouvez aussi déguster un café gourmand ou un cappuccino avec des bugnes à n'importe quel moment de la journée.</p>
                        </div>
                    </div>
                    <div class="row row-museum2">
                        <div class="col-md-6 col-sm-12 col-xs-12 museum-data">
                            <h2 class="heading">Café Théâtre</h2>
                            <p>Venez découvrir l'ambiance des cafés théâtres du Vieux Lyon comme l'espace Gerson, dont les spectacles sont axés sur l'humour: One Man Show, Comédie ou encore plateau d'humoristes.</p>
                            <p>Découvrez aussi les spectacles incontournables du Théâtre la Maison de Guignol, qui vous propose ses très réputés "Spectacles de Guignol" en journée et ses "Spectacles de Café Théâtre" le soir.</p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <img src="images/culture-guignol.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="page4">
            <div class="container-fluid clearfix">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 photo-traboules">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 vignette-photo-traboules" id="culture-traboule1">
                                <!--<img src="images/culture-image1.jpg" alt="" class="img-responsive">-->
                            </div>
                            <div class="col-sm-6 col-xs-6 vignette-photo-traboules" id="culture-traboule2">
                                <!--<img src="images/culture-image2.jpg" alt="" class="img-responsive">-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 vignette-photo-traboules" id="culture-traboule3">
                                <!--<img src="images/culture-image5.jpg" alt="" class="img-responsive">-->
                            </div>
                            <div class="col-sm-6 col-xs-6 vignette-photo-traboules" id="culture-traboule4">
                                <!--<img src="images/culture-image6.jpg" alt="" class="img-responsive">-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 descr-traboules">
                        <div class="row page4-right-content">
                            <div class="col-md-12 col-md-12 col-xs-12 content-descr">
                                <h2 class="heading">Lyon et ses Traboules</h2>
                                <p>La ville de Lyon dénombre environ 500 traboules, dont 215 sont suitées dans le Vieux Lyon. Elles datent de la Renaissance et ont été construites suivant le modèle du patio romain avec ses galeries et le puits dans la cour.</p>
                                <p>Les traboules servaient principalement à accéder aux bords de Saône et à accéder d'une rue à l'autre rapidement.</p>
                                <p>De nos jours, la plupart des traboules sont privés mais certaines restent ouvertes au public et sont entretenues à 70% par la ville de Lyon.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--</div>-->
            </div>
        </section>
    </div>
</div>

<footer>
    <?php include 'footer.html'; ?>
</footer>
    
<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/jquery.onepage-scroll.js"></script>
<script src="js/front.js"></script>
<script src="js/culture.js"></script>
</body>
</html>