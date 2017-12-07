<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Masonry</title>

    <!-- load fonts from google -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700%7CRoboto:400,500,700%7CRoboto+Condensed%7CLato:400,700" rel="stylesheet" type="text/css">

    <!-- load css for cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="../../cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="../../cubeportfolio/css/cubeportfolio.css">
    <link rel="stylesheet" type="text/css" href="../../../css/template.css">

</head>

<?php

require_once('../../../header.html');
require_once('../../../libs.php');


?>

<h1>Galerie photo</h1>

<body style="max-width: 1200px; width: 97%; margin: 100px auto; min-height: 1000px;">
    <div id="js-filters-masonry" class="cbp-l-filters-alignRight">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
            Tous <div class="cbp-filter-counter"></div>
        </div>
        <div data-filter=".identity" class="cbp-filter-item">
            Visiter <div class="cbp-filter-counter"></div>
        </div>
        <div data-filter=".web-design" class="cbp-filter-item">
            Manger <div class="cbp-filter-counter"></div>
        </div>
        <div data-filter=".graphic" class="cbp-filter-item">
            Dormir <div class="cbp-filter-counter"></div>
        </div>
    </div>

    <div id="js-grid-masonry" class="cbp">
        <div class="cbp-item identity">
            <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/c77b8c" class="cbp-caption cbp-lightbox" data-title="Easy Note<br>by Cosmin Capitanu">
                <div class="cbp-caption-defaultWrap">
                    <img src="../../cubeportfolio/img/img1.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Easy Note</div>
                            <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design">
            <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/a78bc9" class="cbp-caption cbp-lightbox" data-title="The Gang Blue<br>by Cosmin Capitanu">
                <div class="cbp-caption-defaultWrap">
                    <img src="../../cubeportfolio/img/img2.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">The Gang Blue</div>
                            <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic identity">
            <a href="https://www.youtube.com/watch?v=3wbvpOIIBQA" class="cbp-caption cbp-lightbox" data-title="Tiger<br>by Cosmin Capitanu">
                <div class="cbp-caption-defaultWrap">
                    <img src="../../cubeportfolio/img/img3.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Tiger</div>
                            <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic">
            <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/6eee29" class="cbp-caption cbp-lightbox" data-title="Flat Roman Typeface Ui<br>by Cosmin Capitanu">
                <div class="cbp-caption-defaultWrap">
                    <img src="../../cubeportfolio/img/img4.jpg" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Flat Roman</div>
                            <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity">
            <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/701d46" class="cbp-caption cbp-lightbox" data-title="Seemple* Music<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="http://scriptpie.com/cubeportfolio/img/?i=380x570/0fb6fc" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Seemple* Music</div>
                            <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item graphic">
            <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/2c0110" class="cbp-caption cbp-lightbox" data-title="Remind~Me More<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="http://scriptpie.com/cubeportfolio/img/?i=380x360/cca519" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Remind~Me More</div>
                            <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item web-design">
            <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/8d285b" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="http://scriptpie.com/cubeportfolio/img/?i=380x360/2dcd64" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Workout Buddy</div>
                            <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity">
            <a href="http://vimeo.com/156783#" class="cbp-caption cbp-lightbox" data-title="Volume Knob<br>by Paul Flavius Nechita">
                <div class="cbp-caption-defaultWrap">
                    <img src="http://scriptpie.com/cubeportfolio/img/?i=380x360/8ef4af" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Volume Knob</div>
                            <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cbp-item identity">
            <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/edd61b" class="cbp-caption cbp-lightbox" data-title="Ski * Buddy<br>by Tiberiu Neamu">
                <div class="cbp-caption-defaultWrap">
                    <img src="http://scriptpie.com/cubeportfolio/img/?i=380x570/8c6fd2" alt="">
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">Ski * Buddy</div>
                            <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <footer>
        <?php include 'footer.html'; ?>
    </footer>
    <!-- load jquery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- load cubeportfolio -->
    <script type="text/javascript" src="../../cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

    <!-- init cubeportfolio -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
