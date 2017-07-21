<?php /* Template Name: Category page Our-Studies */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>

  <div class="loading-wrapper">
    <div class="container our-case-studies">
      <div class="row">
        <article  id="post-<?php the_ID(); ?>" <?php post_class('article eight col'); ?>>
          <?php easy_breadcrumbs(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      </div>

      <?php

      $args=array(
          'post_type' => 'page',
          'posts_per_page' => 12,
          'post_parent' => get_the_ID()
        );
      $my_query = new wp_query($args);
      if( $my_query->have_posts() ) { ?>
        <div class="row">
          <div id="case_studies">

            <?php while ($my_query->have_posts()) {
              $my_query->the_post(); ?>

              <div class="item four col mosaic-2" <?php if ( has_post_thumbnail()) : ?> style="background-image: url('<?php echo the_post_thumbnail_url('medium'); ?>'); background-size: cover;"<?php endif ?>>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <div class="overlay"></div>
                </a>
                <div class="text">
                  <h2><?php the_title(); ?></h2>
                </div>
              </div>

            <?php } ?>
          </div>
        </div>
      <?php }
      wp_reset_query(); ?>
    </div>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
