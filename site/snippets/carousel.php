<?php 

if(!$page->carousel()->empty()):
$imageNames = explode(",", $page->carousel());
$thumburl = array();

	if(count($imageNames)>0): 
		
		foreach ($imageNames as $imageName):
			$thumburl[] = $page->images()->findBy('filename', $imageName);
		endforeach;?>
	
		<div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true, "imagesLoaded": true, "prevNextButtons": true }'>
		    <?php foreach ($thumburl as $image):?>
		  			<div class="gallery-cell">
		    			<img src="<?= thumb($image, array('width' => 1000, 'height' => 500, 'crop' => 'resize', 'quality' => 85, 'upscale' => true))->url();?>">
					</div>
		    <?php endforeach; ?>
		</div>
	
	<?php endif; ?>

<?php endif; ?>