<?php require_once 'libs.php'; ?>
<!DOCTYPE html>
<html>
	<?php
    echo html_header('Page d\'accueil', array('test.css'));
    ?>
	<body>

		<div id="flex_container">
			<div id="slide1" class="container-fluid">
				<img src="./images/background_slide1.jpeg">
			</div>

			<div id="slide2">

				<div>
					<img src="./images/acceuil.jpeg" class="menu">
				</div>
				<div>
					<img src="./images/culture.jpg" class="menu">
				</div>
				<div>
					<img src="./images/ou_manger.jpg" class="menu">
				</div>
				<div>
					<img src="./images/ou_dormir.jpg" class="menu">
				</div>
				<div>
					<img src="./images/activites.jpg" class="menu">
				</div>
				<div>
					<img src="./images/galerie.jpg" class="menu">
				</div>

			</div>
			<div id="slide3">

				<div id="photos">
					
				</div>
				<div id="presentation">
					
				</div>
					
			</div>
		</div>

	</body>
</html>