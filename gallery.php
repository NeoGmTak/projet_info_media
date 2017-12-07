<?php require_once 'libs.php'; ?>

<!doctype html>
<html lang="fr">

    <?php echo html_header('Galerie Photo',array('demo.css','style_footer.css')); ?>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/Logo.png" alt="Logo du site" id="logoNavbar"/></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="culture.php">Culture</a></li>
            <li><a href="#">Activités</a></li>
            <li><a href="ouManger.php">Où Manger ?</a></li>
            <li><a href="ouDormir.php">Où Dormir ?</a></li>
            <li><a href="gallery.php">Galerie Photo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<!-- end container -->

	<div class="grid-section">

		<div class="headline">
			<h2>Galerie Photo</h2>
		</div>

		<div class="content grid-container">

		<!--  ================== MEDIA BOXES ================== -->
        
        <div class="filters-container">
            
            <ul class="custom-filter" id="filter">
              <li><a class="selected" href="#" data-filter="*">Tout</a></li>
              <li><a href="#" data-filter=".visiter">Visiter</a></li>
              <li><a href="#" data-filter=".manger">Manger</a></li>
            </ul>
        </div>

        <div id="grid">

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x500.jpg">
                        <div data-width="752" data-height="500" data-thumbnail="images/752x500.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Primatiale Saint-Jean</div>
                            </div>
                        </div>
                    </div>
                </div>
              
        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/test.jpg">
                        <div data-width="752" data-height="1000" data-thumbnail="images/test.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Tour de la Primatiale Saint-Jean</div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x560.jpg">
                        <div data-width="752" data-height="560" data-thumbnail="images/752x560.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Temple du change</div>
                            </div>
                        </div>
                    </div>
                </div>
             
        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x1125.jpg">
                        <div data-width="752" data-height="1125" data-thumbnail="images/752x1125.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Rue du Vieux Lyon</div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box manger">
                    <div class="media-box-image mb-open-popup" data-src="images/752x424.jpg">
                        <div data-width="752" data-height="424" data-thumbnail="images/752x424.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Taco Taco</div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x501.jpg">
                        <div data-width="752" data-height="500" data-thumbnail="images/752x501.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Antiquaille</div>
                            </div>
                        </div>
                    </div>
                </div>
                
        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box manger">
                    <div class="media-box-image mb-open-popup" data-src="images/752x498.jpg">
                        <div data-width="752" data-height="498" data-thumbnail="images/752x498.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Le comptoir du Boeuf</div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box manger">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Boulangerie du palais</div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box manger">
                    <div class="media-box-image mb-open-popup" data-src="images/752x564.jpg">
                        <div data-width="752" data-height="564" data-thumbnail="images/752x564.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Mezzo di Pasta</div>
                            </div>
                        </div>
                    </div>
                </div>
                
        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x1128.jpg">
                        <div data-width="752" data-height="1128" data-thumbnail="images/752x1128.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Eglise Saint-George</div>
                            </div>
                        </div>
                    </div>
                </div>   

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box manger">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_1.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_1.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Les Lyonnais</div>
                            </div>
                        </div>
                    </div>
                </div>  

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_2.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_2.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Eglise Saint-Paul</div>
                            </div>
                        </div>
                    </div>
                </div> 

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_3.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_3.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Musée Miniature et Cinéma</div>
                            </div>
                        </div>
                    </div>
                </div>      

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box manger">
                    <div class="media-box-image mb-open-popup" data-src="images/752x496.jpg">
                        <div data-width="752" data-height="496" data-thumbnail="images/752x496.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Cosy Corner</div>
                            </div>
                        </div>
                    </div>
                </div> 
                
        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_4.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_4.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Vue sur Saint-Jean</div>
                            </div>
                        </div>
                    </div>
                </div> 
                
        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_5.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_5.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Cachot de Saint-Pothin</div>
                            </div>
                        </div>
                    </div>
                </div> 

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_6.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_6.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Antiquaille</div>
                            </div>
                        </div>
                    </div>
                </div>    

		<!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box manger">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_7.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_7.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Le François Villon</div>
                            </div>
                        </div>
                    </div>
                </div>  
		
		<!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_8.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_8.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Eglise Saint-George</div>
                            </div>
                        </div>
                    </div>
                </div>   

        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x502_9.jpg">
                        <div data-width="752" data-height="502" data-thumbnail="images/752x502_9.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Gare Saint-Paul</div>
                            </div>
                        </div>
                    </div>
                </div> 
                
        <!-- -------------------------- BOX MARKUP -------------------------- -->      
                <div class="media-box visiter">
                    <div class="media-box-image mb-open-popup" data-src="images/752x424_2.jpg">
                        <div data-width="752" data-height="424" data-thumbnail="images/752x424_2.jpg" ></div>
                        
                        <div class="thumbnail-overlay overlay-always-visible">
                            <div class="thumbnail-overlay-animated" data-from="top">
                            	<div class="media-box-title">Tour de la Primatiale Saint-Jean</div>
                            </div>
                        </div>
                    </div>
                </div>                         
              
       	</div> <!-- #grid -->

        <!--  ================== END MEDIA BOXES ================== -->

		</div> <!-- #grid-container -->

	</div>

	<div class="fixed fancybox-compensate-for-scrollbar">
		<div class="to-top">
			<i class="glyphicon glyphicon-chevron-up"></i>
		</div>
	</div>

    <footer>
        <?php include 'footer.html'; ?>
    </footer>
    
    <script src="js/menu.js"></script>
    
	<!-- jQuery 1.8+ -->
	<script src="js/jQuery/jquery-1.11.3.min.js"></script>
	
	<!-- Media Boxes JS files -->
	<script src="js/Isotope/jquery.isotope.min.js"></script>
	<script src="js/imagesLoaded/jquery.imagesLoaded.min.js"></script>
	<script src="js/Transit/jquery.transit.min.js"></script>
	<script src="js/jQuery Easing/jquery.easing.js"></script>
	<script src="js/Waypoints/waypoints.min.js"></script>
	<script src="js/Modernizr/modernizr.custom.min.js"></script>
	<script src="js/jquery.mediaBoxes.dropdown.js"></script>
	<script src="js/jquery.mediaBoxes.js"></script>

	<script>

	    $('#grid').mediaBoxes({
	    	filterContainer: '#filter',
	    	search: '#search',
	    	columns: 3,
	    	boxesToLoadStart: 9,
	    	boxesToLoad: 9,
	    	horizontalSpaceBetweenBoxes: 30,
        	verticalSpaceBetweenBoxes: 30,
        	minBoxesPerFilter: 20,
        	deepLinkingOnFilter: false,
        	fancybox: {
        		thumbs : { autoStart : true },    // Display thumbnails on opening/closing
        	}
	    }); 

	    $('#grid2').mediaBoxes({
	    	filterContainer: '#filter2',
	    	search: '#search',
	    	columns: 3,
	    	boxesToLoadStart: 10,
	    	boxesToLoad: 9,
	    	horizontalSpaceBetweenBoxes: 20,
        	verticalSpaceBetweenBoxes: 20,
        	minBoxesPerFilter: 20,
        	deepLinkingOnFilter: false,
	    }); 

	</script>


	<!-- Bootstrap JS file -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script src="js/demo.js"></script>


</body>
</html>