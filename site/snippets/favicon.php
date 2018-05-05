<?php 
if (!$site->favicon()->empty()):;
	$favicon = $site->files()->find($site->favicon());

	function favicon($file, $size, $rel, $type = null){
		$path = thumb($file, array('width' => $size, 'height' => $size, 'crop' => true, 'upscale' => true))->url();
		echo "<link rel=\"".$rel."\" sizes=\"".$size."x".$size."\" href=\"".$path."\">";
	}

	favicon($favicon, 57, "apple-touch-icon");
	favicon($favicon, 60, "apple-touch-icon");
	favicon($favicon, 72, "apple-touch-icon");
	favicon($favicon, 76, "apple-touch-icon");
	favicon($favicon, 114, "apple-touch-icon");
	favicon($favicon, 120, "apple-touch-icon");
	favicon($favicon, 144, "apple-touch-icon");
	favicon($favicon, 152, "apple-touch-icon");
	favicon($favicon, 180, "apple-touch-icon");
	favicon($favicon, 114, "apple-touch-icon");

	favicon($favicon, 32, "icon");
	favicon($favicon, 192, "icon");
	favicon($favicon, 96, "icon");
	favicon($favicon, 16, "icon");
	
endif;
?>