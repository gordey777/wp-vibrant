<?php get_header(); ?>
  <div class="loading-wrapper">
    <div class="container">
      <div class="row">
        <article  class="article nine col">
          <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
          <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        </article>
        <?php //get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
