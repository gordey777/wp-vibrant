<?php /* Template Name: Leadership */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>
  <div class="loading-wrapper">
    <div class="container">
      <div class="row">
        <article  id="post-<?php the_ID(); ?>" <?php post_class('article twelve col'); ?>>
          <?php easy_breadcrumbs(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        </article>

      </div>


      <?php if( have_rows('leadship') ): ?>
      <div class="row">
        <div id="leadership">
          <?php $name = 0; ?>
          <?php while ( have_rows('leadship') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>


            <div class="item four col" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['sizes']['medium']; ?>'); background-size: cover;"<?php endif; ?>>
              <a href="#person-<?php echo $name; ?>">
                <div class="overlay"></div>
                <div class="text">
                  <h2><?php the_sub_field('name'); ?></h2>
                  <h3><?php the_sub_field('position'); ?></h3>
                </div>
              </a>
            </div>
            <?php $name ++ ?>
          <?php  endwhile; ?>

        </div>
      </div>
      <div id="descriptions" class="row">
        <?php $name_cont = 0; ?>
        <?php while ( have_rows('leadship') ) : the_row(); ?>
          <div id="person-<?php echo $name_cont; ?>" class="person row">
            <div class="title">
              <h2><?php the_sub_field('name'); ?><span class="job-title"> | <?php the_sub_field('position'); ?></span></h2>
              <div class="tooltip">
                <a href="#top">
                  <div class="tooltip-wrapper">
                    <span>Back to top</span>
                  </div>
                  <span class="icon-arrow-up"></span>
                </a>
              </div>
            </div>
            <div class="text nine col">
              <?php the_sub_field('content'); ?>
            </div>
          </div>
          <?php $name_cont ++ ?>
        <?php  endwhile; ?>
      </div>
      <?php endif; ?>

    </div>
  </div>

  <?php endwhile; endif; ?>



<?php get_footer(); ?>
