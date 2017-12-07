<?php
/**
 * Created by PhpStorm.
 * User: Ju'
 * Date: 30/10/2017
 */
function html_header($title, $style = array(), $script = array())
{
    $link = '';
    if(count($style) != 0) {
        foreach ($style as $lien){
            $link .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"./css/$lien\">\n";
        }
    }
    if(count($script) != 0) {
        foreach ($script as $lien){
            $link .= "<link type=\"text/javascript\" href=\"./js/$lien\">\n";
        }
    }
    return '
    <head>
        <title>'.$title.'</title>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="./images/Logo.png">
		
		<!-- Bootstrap css/js -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="js/Font Awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="css/mediaBoxes.css">
		<!-- Styles communs -->
		<link rel="stylesheet" type="text/css" href="./css/template.css">
		
		<!-- Style spécifique -->
		'.$link.'
	</head>';
}