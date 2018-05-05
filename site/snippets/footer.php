  <footer class="footer" role="contentinfo">
    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>
  </footer>
  </div><!-- site-wrapper -->
  
  <?php 
        echo js('assets/js/flickity.min.js');

  if($page->aspectratio() == "original"):
        echo js('assets/js/jquery-1.11.3.min.js');
        echo js('assets/js/imagesloaded.pkgd.min.js');
        echo js('assets/js/masonry-3.3.0.min.js');
  endif;?>

  <script>

    var navigation = responsiveNav(".nav-collapse", {
      customToggle: "#js-toggle"
    });
    
    <?php if($page->aspectratio() == "original"):?>
    var $container = $('.projects-list');
    
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.masonry',
        columnWidth: '.masonry',
        percentPosition: true
      });
    });
    <?php endif; ?>

  </script>
</body>
</html>