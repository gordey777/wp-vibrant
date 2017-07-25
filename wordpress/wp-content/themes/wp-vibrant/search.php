<?php get_header(); ?>
  <div class="loading-wrapper">
    <div class="container">
      <div class="row">
        <article  class="article nine col">

          <h1><?php echo sprintf( __( '%s Search Results for  ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>
        </article>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
