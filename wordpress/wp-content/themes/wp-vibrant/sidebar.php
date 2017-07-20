<aside id="sidebar" class="three col" role="complementary">


  <?php if( have_rows('document') ): ?>

    <?php while ( have_rows('document') ) : the_row(); ?>
      <?php $file = get_sub_field('file'); ?>
      <?php if ( !empty($file)) : ?>

        <?php $attachment_id = $file['ID'];
        $url = wp_get_attachment_url( $attachment_id );
        $title = get_the_title( $attachment_id );

        $filesize = filesize( get_attached_file( $attachment_id ) );
        $filesize = size_format($filesize, 2); ?>

        <a href="<?php echo $file['url']; ?>" download="<?php echo $file['url']; ?>">
          <section class="download s-module">
            <div class="triangle pdf"></div>
            <h4>Download pdf <span class="size">(<?php echo $filesize; ?>)</span></h4>
            <h2><?php the_sub_field('title'); ?></h2>
          </section>
        </a>
      <?php endif; ?>
    <?php  endwhile; ?>

  <?php endif; ?>

  <?php if( have_rows('sidebar_link') ): ?>
    <?php while ( have_rows('sidebar_link') ) : the_row(); ?>
      <a href="http://www.vibrantmedia.com/about-us/leadership/">
        <section class="more s-module">
          <h4>Find out more about</h4>
          <h2>Leadership</h2>
        </section>
      </a>
    <?php  endwhile; ?>
  <?php endif; ?>

  <?php
  $category_ids = array(10, 11, 9, 12); //ID categories of posts
  $post_num = 4; //nuber of posts on sidebar

  $args=array(
      'category__in'     => $category_ids,
      'orderby'          => 'post_date',
      'order'            => 'DESC',
      'post__not_in'     => array($post->ID),
      'showposts'        => $post_num,
      'caller_get_posts' =>1
    );
  $my_query = new wp_query($args);
  if( $my_query->have_posts() ) { ?>
    <section class="feed s-module">
      <h2>Latest news</h2>
      <?php while ($my_query->have_posts()) {
        $my_query->the_post(); ?>
        <div class="feed-single">
          <h4><?php the_time( 'j F Y'); ?></h4>
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <p class="cat"><?php the_category( ', '); ?></p>
          <p><?php wpeExcerpt('wpeExcerpt20'); ?></p>
        </div>
      <?php
      } ?>
    </section>
  <?php }
  wp_reset_query(); ?>

  <?php if ( is_active_sidebar('sidebar_widgetarea') ) : ?>
    <?php dynamic_sidebar( 'sidebar_widgetarea' ); ?>
  <?php endif; ?>

</aside><!-- /sidebar -->
