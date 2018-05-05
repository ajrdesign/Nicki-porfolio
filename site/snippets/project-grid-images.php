<style>

  ul.projects-list li img {
    border:3px solid #eeeeee;
    margin-bottom:1.5em;
  }
</style>
<ul class="projects-list">

<?php 

    $projects = $page->images()->offset(1);

  
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

    <a href="<?php echo $project->url() ?>" target="_blank">
      <img src="<?php echo $project->url() ?>">
    </a>

  </li>

  <?php endforeach ?>
</ul>




