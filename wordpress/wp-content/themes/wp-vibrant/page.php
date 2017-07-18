<?php get_header(); ?>

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
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

  <?php endwhile; endif; ?>



<?php get_footer(); ?>
