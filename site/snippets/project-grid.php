<ul class="projects-list">

<?php 

  if($page->isHomePage()):
    $projects = page($page->contentsource())->children()->visible();
  else:
    $projects = $page->children()->visible();
  endif;

  
foreach($projects as $project):
  
  if($page->gridcol() == "one"):
    $mult = 2;
  else:
    $mult = 1;
  endif;


  // Grid / Masonry Settings
  if (!$page->gridcol()->empty()):
    $grid = $page->gridcol();
  else:
    $grid = "three";
  endif;


  if($page->aspectratio() == "original"):
    $crop = false;
    $gridtype = "masonry";
  else:
    $crop = true;
    $gridtype = "grid";
  endif;

  $aspectw = 500*$mult;
  $aspecth = 500*$mult;

  switch ($page->aspectratio()) {
    case "original":
      $aspectw = 500*$mult;
      $aspecth = 500*$mult;
      break;
    case "square":
      $aspectw = 500*$mult;
      $aspecth = 500*$mult;
      break;
    case "fourxfivep":
      $aspectw = 400*$mult;
      $aspecth = 500*$mult;
      break;
    case "fourxfive":
      $aspectw = 500*$mult;
      $aspecth = 400*$mult;
      break;
    case "fivexsevenp":
      $aspectw = 500*$mult;
      $aspecth = 700*$mult;
      break;
    case "fivexseven":
      $aspectw = 700*$mult;
      $aspecth = 500*$mult;
      break;
    case "twoxthreep":
      $aspectw = 400*$mult;
      $aspecth = 600*$mult;
      break;
    case "twoxthree":
      $aspectw = 600*$mult;
      $aspecth = 400*$mult;
      break;
    case "sixteenxninep":
      $aspectw = 540*$mult;
      $aspecth = 960*$mult;
      break;
    case "sixteenxnine":
      $aspectw = 960*$mult;
      $aspecth = 540*$mult;
      break;
  }?>


  <li<?=" class=\"".$gridtype." ".$grid."\"";?>>

    <?php
    if(!$project->images()->empty()):;
        if (!$project->thumbnail()->empty()):
          $thumbnail = $project->images()->findBy('filename', $project->thumbnail());
        else:
          $thumbnail = $project->images()->sortBy('sort', 'asc')->first();
        endif;
    ?>

    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo thumb($thumbnail, array('width' => $aspectw, 'height' => $aspecth, 'crop' => $crop, 'quality' => 85, 'upscale' => true))->url(); ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>

  </li>

  <?php endforeach ?>
</ul>




