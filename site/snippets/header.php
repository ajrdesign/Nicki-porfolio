<!DOCTYPE html>
<!--
  ___       ___   _______     ______      ______     _______    __
  \  \     /  /  |   ____|  .' ____ \   .' ____ \   |   ____|  |  |    
   \  \   /  /   |  |___    | (___ \_|  | (___ \_|  |  |___    |  |      
    \  \ /  /    |   ___|    _.____`.    _.____`.   |   ___|   |  |    
     \  '  /     |  |____   | \____) |  | \____) |  |  |____   |  |_____ 
      \___/      |_______|   \______.'   \______.'  |_______|  |________|
   
  Portfolio Theme by Ian Cox available at https://gum.co/vessel
-->

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo js('assets/js/responsive-nav.min.js') ?>
  <?php echo css('assets/css/screen.css') ?>
  <?php snippet('themecss') ?>
  <?php snippet('favicon') ?>
  

</head>
<body id="theme">

  <div class="site-wrapper">
  <header class="header" role="banner">
    <div class="logo-wrapper">
    <a id="js-toggle" class="nav-toggle">&#x2630;</a>
    <a class="logo" href="<?php echo url() ?>">
      <?php if(!$site->logo()->empty()):?>

        <?php if($site->files()->find($site->logo())->extension() == "svg"):?>          
          <?php echo file_get_contents($site->files()->find($site->logo())->url());?>
        <?php else: ?>
          <img src="<?= thumb($site->files()->find($site->logo()), array('height' => 300))->url(); ?>" alt="<?php echo $site->title()->html() ?>" />
        <?php endif; ?> 

      <?php else: ?>
        <h1><?php echo $site->title()->html() ?></h1>
      <?php endif; ?>  
    </a>
    </div>
    <?php snippet('menu') ?>
  </header>