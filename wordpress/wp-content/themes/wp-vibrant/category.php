<?php get_header(); ?>
<?php
$body___class = '';
$cat_arr = array(9, 11, 10); //ID categories of light theme

if ( is_category( $cat_arr ) || in_category( $cat_arr ) || post_is_in_descendant_category( $cat_arr ) ) {
    $body___class = 'light';
 }
else {
  $body___class = 'dark';
} ?>



  <div class="loading-wrapper">
    <div class="container">
      <div class="row">
        <article class="article single index twelve col">
          <?php $term = 'category_' . get_queried_object()->cat_ID; ?>

          <?php $posts = get_field('top_news', $term);

          if( $posts ): ?>
            <h5>Featured News Articles</h5>
              <?php foreach( $posts as $post): ?>
              <?php setup_postdata($post); ?>
                <?php if ( has_post_thumbnail()) { ?>
                  <div class="feat-entry four col" style="background: url(<?php the_post_thumbnail_url('medium'); ?>); background-size: cover;">
                 <?php } else { ?>
                 <div class="feat-entry four col" style="background: #ccc; background-size: cover;">

                <?php } ?>

                  <a href="<?php the_permalink(); ?>">
                    <div class="overlay"></div>
                  </a>
                  <div class="text">
                    <a href="http://www.vibrantmedia.com/greatest-barrier-augmented-virtual-realities-apps-accessories/">
                      <p><?php the_time('j F Y'); ?></p>
                    </a>
                    <p><?php the_category(', '); ?></p>
                    <h2><?php the_title(); ?></h2>
                  </div>
                </div>
            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>
          <?php endif; ?>


          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>

        </article>
      </div>
    </div>
  </div>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
