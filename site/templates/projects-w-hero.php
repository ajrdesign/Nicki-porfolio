<?php snippet('header') ?>

  <main class="main" role="main">
    <hr>
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <hr>
  </main>
  <div class="gallery">
          <div class="gallery-cell">
            <img src="<?php echo $page->url() ?>/<?php echo $page->thumbnail() ?>">
        </div>
  </div>
  

  <?php snippet('project-grid-images') ?>


<?php snippet('footer') ?>