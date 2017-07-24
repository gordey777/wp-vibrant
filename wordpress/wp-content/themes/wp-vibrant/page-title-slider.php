<?php /* Template Name: Title Slider Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>

  <div class="loading-wrapper">
    <div class="container case_study">
      <div class="row">

        <article  id="post-<?php the_ID(); ?>" <?php post_class('article twelve col img-header'); ?>>
          <div class="with-img">
            <?php easy_breadcrumbs(); ?>
            <div class="text six col">
              <div class="inner-text">
                <h1><?php the_title(); ?></h1>
                <?php the_field('subtitle_content'); ?>
              </div>
            </div>

            <div class="img nine col">
              <?php if( have_rows('title_slider') ): ?>
                <div class="cs-img-header">
                  <?php while ( have_rows('title_slider') ) : the_row(); ?>
                    <?php $image = get_sub_field('img'); ?>
                      <div class="gallery-cell twelve col cs-img-h" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>'); background-size: cover;"<?php endif; ?>></div>
                  <?php  endwhile; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </article>
        <article class="article eight col">
          <?php the_content(); ?>
        </article>
        <div class="spacer one col"></div>

          <?php get_sidebar(); ?>

      </div>
    </div>
  </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
