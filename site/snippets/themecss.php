<style type="text/css">
<?php

//Function to write out CSS overrides from CMS
function themeCSS($value, $selector, $attribute, $unit = null) {
    if(!$value->empty()):
		echo $selector."{";
		echo $attribute.":";
		echo $value.$unit.";";
		echo "}\n";
    endif;	
}


// Text Color
themeCss( $site->textcolor(), "#theme", "color");


// Background Color
themeCss( $site->bgcolor(), "#theme, #theme .site-wrapper", "background-color");


// Button Color
themeCss( $site->linkcolor(), "#theme button, #theme input[type=\"button\"], #theme input[type=\"reset\"], #theme input[type=\"submit\"], #theme button", "background-color");
themeCss( $site->buttontxt(), "#theme button, #theme input[type=\"button\"], #theme input[type=\"reset\"], #theme input[type=\"submit\"], #theme button", "color");
themeCss( $site->linkhover(), "#theme button:hover, #theme button:focus, #theme input[type=\"button\"]:hover, #theme input[type=\"button\"]:focus, #theme input[type=\"reset\"]:hover, #theme input[type=\"reset\"]:focus, #theme input[type=\"submit\"]:hover, #theme input[type=\"submit\"]:focus, #theme button:hover, #theme button:focus", "background-color");


// Imput Boxes
themeCss( $site->linkcolor(), "input[type=\"color\"]:focus, #theme input[type=\"date\"]:focus, #theme input[type=\"datetime\"]:focus, #theme input[type=\"datetime-local\"]:focus, #theme input[type=\"email\"]:focus, #theme input[type=\"month\"]:focus, #theme input[type=\"number\"]:focus, #theme input[type=\"password\"]:focus, #theme input[type=\"search\"]:focus, #theme input[type=\"tel\"]:focus, #theme input[type=\"text\"]:focus, #theme input[type=\"time\"]:focus, #theme input[type=\"url\"]:focus, #theme input[type=\"week\"]:focus, #theme textarea:focus, #theme select[multiple=multiple]:focus, #theme textarea:focus", "border-color");


// Link Color
themeCss( $site->linkcolor(), "#theme a", "color");
themeCss( $site->linkhover(), "#theme a:active, #theme a:focus, #theme a:hover", "color");


// Logo Color
themeCss( $site->logocolor(), "#theme .logo", "color");
themeCss( $site->logocolor(), "#theme .logo svg path", "fill");
themeCss( $site->logocolor(), "#theme .logo svg path", "background-color");

themeCss( $site->logohover(), "#theme .logo:hover", "color");
themeCss( $site->logohover(), "#theme .logo:hover svg path", "fill");
themeCss( $site->logohover(), "#theme .logo:hover svg path", "background-color");


// Logo Settings IF Center
//if($site->logoalignment() == "center"):;
	echo "#theme .logo{ margin-left: auto; margin-right: auto; display: block;}\n";
	echo "#theme .logo img, #theme .logo svg{ margin-left: auto; margin-right: auto; display: block;}\n";
	echo "#theme .logo h1{ text-align: center;}\n";
	echo "#theme .projects-list h3{text-align: center;}\n";
	echo "#theme .menu{ text-align: center;}\n";
	echo "#theme .logo h1{ max-width: 80%; margin-left: auto; margin-right: auto;}\n";
//endif;


// Border Radius
if($page->gridradius() == "500"):;
	$radius = 100;
	$radiusunit = "%";
echo "#theme .projects-list h3{text-align: center; margin: .5em 0 2em 0;}\n";
else:;
	$radius = $page->gridradius();
	$radiusunit = "px";
endif;
echo "#theme .projects-list img{border-radius:".$radius.$radiusunit.";}\n";
echo "#theme .site-wrapper{padding: .025% 5%;}\n";

// Background Image
if(!$site->bgimage()->empty()):	
	$bgimage = thumb($site->files()->find($site->bgimage()), array('width' => 2000, 'height' => 1300, 'crop' => true, 'quality' => 85, 'upscale' => true))->url();
	echo "#theme {background-image: url('".$bgimage."');}\n";
endif;

?>
</style>