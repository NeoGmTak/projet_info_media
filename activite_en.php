<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="./images/Logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vieux Lyon - Activities</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/onepage-scroll.css">

    <link rel="stylesheet" href="css/activite.css">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/style_footer.css">

    <!--[if lt IE 9]>
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
                                    <h2 class="heading">Visits of Lyon in Segway</h2>
                                    <p>The company ComhiC, official Segway dealer, offers you to discover the city of Lyon in Segway or electric bicycle, on sessions from 1h to 3h.
                                        You will be accompanied by an instructor who will train you to drive a Segway to ensure a safe ride.</p>
                                    <p class="text-muted"><em>Please click on a picture for more information</em></p>
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
                            <p>Discover the many bars of Old Lyon. Real meeting places, come and enjoy a good cold beer with friends. You can also enjoy a gourmet coffee or cappuccino with bugs at any time of the day.</p>
                        </div>
                    </div>
                    <div class="row row-museum2">
                        <div class="col-md-6 col-sm-12 col-xs-12 museum-data">
                            <h2 class="heading">Coffee Theatre</h2>
                            <p>Come and discover the ambiance of the cafés théâtres du Vieux Lyon such as the Gerson space, whose shows are based on humour: One Man Show, Comedy or even a set of comedians.</p>
                            <p>Discover also the unavoidable shows of the Theatre la Maison de Guignol, which offers its very famous "Spectacles de Guignol" during the day and its "Spectacles de Café Théâtre" in the evening.</p>
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
                                <h2 class="heading">Sports activities</h2>
                                <p>Escape by practising thrilling sports such as paragliding flights, ULM baptisms, via ferrata, canyoning and rafting. In winter, find activities such as snowmobiling, tobogganing and igloos.
                                    Find more information on the website of the organizer <a href="https://lyon.takamaka.fr" target="_blank">Takamaka</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--</div>-->
            </div>
        </section>
    </div>
</div>

<!--<footer>
    <?php /*include 'footer.html'; */?>
</footer>-->
    
<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/jquery.onepage-scroll.js"></script>
<script src="js/front.js"></script>
</body>
</html>