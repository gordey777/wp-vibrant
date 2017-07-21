<?php /* Template Name: History */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>
  <div class="loading-wrapper">
    <div class="container">
      <div class="row">
        <article  id="post-<?php the_ID(); ?>" <?php post_class('article nine col'); ?>>
          <?php easy_breadcrumbs(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        </article>

      </div>
      <?php if( have_rows('history_slider') ): ?>
        <div class="row timeline">
          <?php while ( have_rows('history_slider') ) : the_row(); ?>
          <div class="gallery-cell timeline-year">
            <div class="text"><?php the_sub_field('year'); ?></div>
          </div>
          <?php  endwhile; ?>
        </div>
        <div class="row year">
          <?php while ( have_rows('history_slider') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>
            <article class="article gallery-cell twelve col">
              <?php if ( !empty($image)) : ?>
                <img src="<?php echo $image['url']; ?>">
              <?php endif; ?>
              <div class="eight col"><?php the_sub_field('content'); ?></div>
            </article>
          <?php  endwhile; ?>
        </div>
      <?php endif; ?>


    </div>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
