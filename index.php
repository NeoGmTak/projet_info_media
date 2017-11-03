<?php require_once 'libs.php'; ?>
<!DOCTYPE html>
<html>
	<?php
    echo html_header('Page d\'accueil', array('accueil.css'));
    ?>
	<body>
		<div class="container-fluid">
            <header class="accueil">
                <div class="row justify-content-md-center">
                    <div class="col-md-2 logo">
                        <img src="images/Logo.png" alt="Logo Vieux Lyon" class="img-fluid">
                    </div>
                </div>
                <div class="jumbotron text-accueil">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros mauris, porta non orci ut, tristique euismod magna. Phasellus non dictum tellus. Vestibulum dictum urna elit, vel ullamcorper tellus lobortis sit amet. Ut pulvinar eget nibh sit amet pretium. Cras at ex ac justo pulvinar dignissim.</p>
                </div>
                <div class="down">
                    <p>Plus d'informations...</p>
                    <img src="images/bottom_arrow.png" alt="Bouton descendre">
                </div>
            </header>
            <section class="menu">
                <div class="row">
                    <ul class="accordion-group" id="accordion">
                        <li style="background-image: url('images/accueil.jpeg');" onclick="javascript:location.href = '#'">
                            <div class="accordion-overlay"></div>
                            <h3>Accueil</h3>
                            <section class="hidden-xs">
                                <article>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum placerat neque at lectus dictum, sed tincidunt lacus blandit. Ut congue diam eget urna tempus, maximus viverra risus porttitor. </p>
                                </article>
                            </section>
                        </li>
                        <li class="out" style="background-image: url('images/culture.jpg');" onclick="javascript:location.href = 'culture.php'">
                            <div class="accordion-overlay"></div>
                            <h3>Culture</h3>
                            <section class="hidden-xs">
                                <article>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum placerat neque at lectus dictum, sed tincidunt lacus blandit. Ut congue diam eget urna tempus, maximus viverra risus porttitor. </p>
                                </article>
                            </section>
                        </li>
                        <li style="background-image: url('images/activites.JPG');" onclick="javascript:location.href = 'activites.php'">
                            <div class="accordion-overlay"></div>
                            <h3>Activités</h3>
                            <section class="hidden-xs">
                                <article>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum placerat neque at lectus dictum, sed tincidunt lacus blandit. Ut congue diam eget urna tempus, maximus viverra risus porttitor. </p>
                                </article>
                            </section>
                        </li>
                        <li style="background-image: url('images/ou_manger.jpg');" onclick="javascript:location.href = 'ouManger.php'">
                            <div class="accordion-overlay"></div>
                            <h3>Où manger ?</h3>
                            <section class="hidden-xs">
                                <article>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum placerat neque at lectus dictum, sed tincidunt lacus blandit. Ut congue diam eget urna tempus, maximus viverra risus porttitor. </p>
                                </article>
                            </section>
                        </li>
                        <li style="background-image: url('images/ou_dormir.jpg');" onclick="javascript:location.href = 'ouDormir.php'">
                            <div class="accordion-overlay"></div>
                            <h3>Où dormir ?</h3>
                            <section class="hidden-xs">
                                <article>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum placerat neque at lectus dictum, sed tincidunt lacus blandit. Ut congue diam eget urna tempus, maximus viverra risus porttitor. </p>
                                </article>
                            </section>
                        </li>
                        <li style="background-image: url('images/galerie.jpg');" onclick="javascript:location.href = 'planinteractif.php'">
                            <div class="accordion-overlay"></div>
                            <h3>Plan interactif</h3>
                            <section class="hidden-xs">
                                <article>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum placerat neque at lectus dictum, sed tincidunt lacus blandit. Ut congue diam eget urna tempus, maximus viverra risus porttitor. </p>
                                </article>
                            </section>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="presentation">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 mos4">
                        <div class="gallery_container">
                            <div id="box1">
                                <img src="images/cathedrale_saint_jean.jpg" alt="Cathédrale Saint Jean - Vieux Lyon">
                            </div>
                            <div id="box2">
                                <img src="images/pass_st_georges.jpg" alt="Passerelle St Georges">
                            </div>
                        </div>
                        <div class="gallery_container">
                            <div id="box3">
                                <img src="images/rue_vieux_lyon.jpeg" alt="Rue du vieux Lyon">
                            </div>
                            <div id="box4">
                                <img src="images/autre_rue_vieux_lyon.jpg" alt="Rue du vieux Lyon">
                            </div>
                        </div>
                </div>
            </section>
		</div>
        <script src="js/animation_accueil.js" type="text/javascript"></script>
	</body>
</html>