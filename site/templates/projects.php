<?php snippet('header') ?>


  <main class="main" role="main">
    <hr>
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <hr>
  </main>
  

  <?php snippet('project-grid') ?>


<?php snippet('footer') ?>