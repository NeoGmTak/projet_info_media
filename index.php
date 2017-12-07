<!DOCTYPE html>
<html class="">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="./images/Logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-animation.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/onepage-scroll.css">

    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/style_footer.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function selectLanguage() {
            var nav = navigator.appName;
            var language;

            if (nav == "Microsoft Internet Explorer") {
                language = navigator.browserLanguage;
            }
            else {
                language = navigator.language;
            }
            switch (language) {
                case "fr":
                case "fr-FR":
                case "fr-BE":
                case "fr-CA":
                case "fr-LU":
                case "fr-MC":
                case "fr-CH": break;
                default:
                    window.location.href = "index_en.php";
                    break;
            }
        }
    </script>
</head>
<body onload="selectLanguage();">
<div class="wrapper">
    <div class="main">
        <!-- page 1-->
        <section id="page1">
            <!--<div class="overlay"></div>-->
            <div class="content-head">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4 col-sm-12 logo-background">
                            <img src="images/Logo.png" alt="" class="img-responsive" id="logo-vieux-lyon">
                        </div>
                    </div>
                    <div class="ecart"></div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <!--<h1>Vieux Lyon</h1>-->
                            <p class="italic">Vous retrouverez ici toutes les informations nécessaires à votre visite
                                dans notre quartier.
                                Venez découvrir les merveilles culturelles de l'ère du Moyen-Âge et de la Renaissance
                                ainsi que de nombreux restaurants et hôtels du Vieux Lyon.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="menu-link">
                <div class="icon faa-float animated"><i class="fa fa-angle-double-down"></i></div>
            </a>
        </section>
        <!-- page 2-->
        <section id="page2">
            <div class="content-menu">
                <div class="container-fluid clearfix">
                    <div class="row">
                        <ul class="accordion-group" id="accordion">
                            <li class="out" style="background-image: url('images/culture.jpg');"
                                onclick="javascript:location.href = 'culture.php'">
                                <div class="accordion-overlay"></div>
                                <h3>Culture</h3>
                                <div class="hidden-xs">
                                    <article>
                                        <p>Venez découvrir la culture du Vieux Lyon et en apprendre plus sur notre
                                            quartier.</p>
                                    </article>
                                </div>
                            </li>
                            <li style="background-image: url('images/activites.jpg');"
                                onclick="javascript:location.href = 'activite.php'">
                                <div class="accordion-overlay"></div>
                                <h3>Activités</h3>
                                <div class="hidden-xs">
                                    <article>
                                        <p>Venez visiter les lieux culturels de notre quartier et découvrez les
                                            activités du moment.</p>
                                    </article>
                                </div>
                            </li>
                            <li style="background-image: url('images/ou_manger.jpg');"
                                onclick="javascript:location.href = 'ouManger.php'">
                                <div class="accordion-overlay"></div>
                                <h3>Où manger ?</h3>
                                <div class="hidden-xs">
                                    <article>
                                        <p>Trouvez un restaurant à votre goût et découvrez une gastronomie propre au
                                            Vieux Lyon.</p>
                                    </article>
                                </div>
                            </li>
                            <li style="background-image: url('images/ou_dormir.jpg');"
                                onclick="javascript:location.href = 'ouDormir.php'">
                                <div class="accordion-overlay"></div>
                                <h3>Où dormir ?</h3>
                                <div class="hidden-xs">
                                    <article>
                                        <p>Prolongez votre visite en prenant un des nombreux hôtels disponibles dans le
                                            Vieux Lyon.</p>
                                    </article>
                                </div>
                            </li>
                            <li style="background-image: url('images/galerie.jpg');"
                                onclick="javascript:location.href = '#'">
                                <div class="accordion-overlay"></div>
                                <h3>Galerie photos</h3>
                                <div class="hidden-xs">
                                    <article>
                                        <p>Découvrez nos photos du quartier du Vieux Lyon.</p>
                                    </article>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="page3">
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
                        <div class="row page3-right-content">
                            <div class="col-md-12 col-md-12 col-xs-12 content-descr">
                                <h2 class="heading">Vieux Lyon</h2>
                                <p>Le Vieux Lyon est le quartier médiéval et Renaissance de Lyon comptant environ 7000
                                    habitants.</p>
                                <p>Situé sur les bords de la Saône, au pied de la colline de Fourvière, c'est l'un des
                                    quartiers les plus vastes concernant la période médiévale et Renaissance, qui est
                                    encore resté intact jusqu'à nos jours.</p>
                                <p>Le vieux Lyon se compose de trois quartiers : </p>
                                <ul>
                                    <li>Saint-Georges qui constituait l'extrémité sud de Lyon et communiquait avec
                                        l'extérieur par la porte Saint-Georges, aujourd'hui détruite.
                                    </li>
                                    <li>Saint Jean, le quartier le plus connu avec l'église Saint-Jean. C'est aussi le
                                        quartier le plus touristique de par ses nombreuses curiosités architecturales et
                                        ses traboules.
                                    </li>
                                    <li>Saint-Paul qui desservait la vallée d'Azergues grâce à sa gare construite en
                                        1873.
                                    </li>
                                </ul>
                                <p>C'est dans ce quartier que l'on peut retrouver le Temple du Change ainsi que le
                                    Théâtre la Maison de Guignol. Le quartier est classé dans la liste du "Patrimoine
                                    Mondial" et sa préservation est assurée par l'association "La Renaissance du Vieux
                                    Lyon".</p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--</div>-->
            </div>
        </section>
    </div>
</div>

<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"></script>
<script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" ></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.onepage-scroll.js"></script>
<script src="js/front.js"></script>
</body>
</html>