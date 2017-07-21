<?php /* Template Name: Category page Your-Needs */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php edit_post_link(); ?>
  <div class="loading-wrapper">
    <div class="container your-needs parent-page">
      <div class="row">
        <article  id="post-<?php the_ID(); ?>" <?php post_class('article six col'); ?>>
          <?php easy_breadcrumbs(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php
      $args=array(
          'post_type' => 'page',
          'posts_per_page' => 12,
          'post_parent' => get_the_ID()
        );
      $my_query = new wp_query($args);
      if( $my_query->have_posts() ) { ?>
          <?php while ($my_query->have_posts()) {
            $my_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <div class="module light-txt six col" <?php if ( has_post_thumbnail()) : ?> style="background-image: url('<?php echo the_post_thumbnail_url('medium'); ?>'); background-size: cover;"<?php endif ?>>
                <div class="overlay"></div>
                <div class="text low gradient">
                  <h2><?php the_title(); ?></h2>
                  <h3><?php wpeExcerpt('wpeExcerpt10'); ?></h3>
                </div>
              </div>
            </a>
          <?php } ?>
      <?php }
      wp_reset_query(); ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
