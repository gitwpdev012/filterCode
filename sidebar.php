<h1>This is sidebar.php file</h1>





  
    

    <?php if ( is_active_sidebar( 'sidebar' ) )
    { ?>
  <aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar' ); ?>
  </aside>
<?php } ?>
