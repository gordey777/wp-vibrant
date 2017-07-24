<?php get_header(); ?>
          <?php $cat__ID = get_queried_object()->cat_ID; ?>
          <?php $field_term = 'category_' . $cat__ID; ?>

  <div class="loading-wrapper">
    <div class="container">

      <?php if( get_field('parent_settings', $field_term) ): ?>

        <div class="row">
          <article class="article seven col single">
            <?php easy_breadcrumbs(); ?>
            <h1><?php echo get_cat_name($cat__ID); ?></h1>
            <p><?php echo category_description($cat__ID); ?></p>
          </article>
        </div>

        <div class="row news-wall">

          <div class="post-cluster nw-module height-3 six col">

            <?php
            $category_ids = get_field('first_block_category', $field_term); //ID categories of posts

            $args=array(
                'category__in'     => $category_ids,
                'orderby'          => 'post_date',
                'order'            => 'DESC',
                //'post__not_in'     => array($post->ID),
                'showposts'        => 3,
                'caller_get_posts' =>1
              );
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) : ?>

              <?php
              $i = 0;
              while ($my_query->have_posts()) :
                $my_query->the_post(); ?>
                <?php $item_class = 'small-pc nw-module height-1 six col'; ?>
                <?php $item_styles = ''; ?>
                <?php $overlay = ''; ?>

                <?php if($i == 0) { ?>
                  <?php $item_class = 'large-pc nw-module height-2 twelve col'; ?>
                  <?php $overlay = '<div class="overlay"></div>'; ?>
                  <?php $item_styles = 'background: url(' . get_the_post_thumbnail_url($post->ID, 'medium') . ') no-repeat center center, #ccc; background-size: cover;'; ?>

                <?php } ?>

                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <div class="<?php echo $item_class; ?>" style="<?php echo $item_styles; ?>">
                      <?php echo $overlay; ?>
                      <div class="text">
                        <h5><?php echo get_cat_name($category_ids); ?></h5>
                        <p class="cat"><?php the_time( 'j F Y'); ?></p>
                        <h3><?php the_title(); ?></h3>
                      </div>
                    </div>
                  </a>

              <?php $i++ ; ?>
              <?php endwhile; ?>

            <?php endif;
            wp_reset_query(); ?>
          </div><!-- / .post-cluster -->


          <?php
          $category_ids = get_field('second_block_category', $field_term); //ID categories of posts

          $args=array(
              'category__in'     => $category_ids,
              'orderby'          => 'post_date',
              'order'            => 'DESC',
              //'post__not_in'     => array($post->ID),
              'showposts'        => 2,
              'caller_get_posts' =>1
            );
          $my_query = new wp_query($args);
          if( $my_query->have_posts() ) : ?>

            <?php

            while ($my_query->have_posts()) :
              $my_query->the_post(); ?>

              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="large-post nw-module height-3 six col" style="background: url(' <?php the_post_thumbnail_url('medium') ?> ') no-repeat center center, #ccc; background-size: cover;">
                  <div class="overlay"></div>
                  <div class="text">
                    <h5><?php echo get_cat_name($category_ids); ?></h5>
                    <p class="cat"><?php the_time( 'j F Y'); ?></p>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </div>
              </a>

            <?php endwhile; ?>

          <?php endif;
          wp_reset_query(); ?>

          <?php
          $category_ids = get_field('third_block_category', $field_term); //ID categories of posts

          $args=array(
              'category__in'     => $category_ids,
              'orderby'          => 'post_date',
              'order'            => 'DESC',
              //'post__not_in'     => array($post->ID),
              'showposts'        => 1,
              'caller_get_posts' =>1
            );
          $my_query = new wp_query($args);
          if( $my_query->have_posts() ) : ?>

            <?php

            while ($my_query->have_posts()) :
              $my_query->the_post(); ?>

              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <div class="large-post nw-module height-3 six col" style="background: url(' <?php the_post_thumbnail_url('medium') ?> ') no-repeat center center, #ccc; background-size: cover;">
                  <div class="overlay"></div>
                  <div class="text">
                    <h5><?php echo get_cat_name($category_ids); ?></h5>
                    <p class="cat"><?php the_time( 'j F Y'); ?></p>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </div>
              </a>

            <?php endwhile; ?>

          <?php endif;
          wp_reset_query(); ?>

          <div class="height-3 six col">

            <div class="contact-btn nw-module height-1 twelve col">
              <?php the_field('news_contacts', $field_term); ?>
            </div>

            <?php if( have_rows('document', $field_term) ): ?>
              <div class="link-cluster nw-module height-2 twelve col">
                <?php while ( have_rows('document', $field_term) ) : the_row(); ?>
                  <?php $file = get_sub_field('file', $field_term); ?>
                  <?php if ( !empty($file)) : ?>

                    <?php $attachment_id = $file['ID'];
                    $url = wp_get_attachment_url( $attachment_id );
                    $title = get_the_title( $attachment_id );

                    $filesize = filesize( get_attached_file( $attachment_id ) );
                    $filesize = size_format($filesize, 2); ?>

                    <a href="<?php echo $file['url']; ?>" download="<?php echo $file['url']; ?>">

                      <div class="dwnld-btn nw-module height-2 twelve col">
                        <div class="triangle pdf"></div>
                        <div class="text">
                          <h4>Download pdf <span class="size">(<?php echo $filesize; ?>)</span></h4>
                          <h2><?php the_sub_field('title'); ?></h2>
                        </div>
                      </div>
                    </a>
                  <?php endif; ?>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>

          </div>

          <?php if( have_rows('cat_links', $field_term) ): ?>
            <div class="link-cluster nw-module height-3 six col">
              <?php while ( have_rows('cat_links', $field_term) ) : the_row(); ?>
                <a href="<?php the_sub_field('link', $field_term); ?>"">
                  <div class="sml-btn nw-module height-1 six col <?php the_sub_field('bg_color', $field_term); ?>">
                    <div class="text">
                      <h4><?php the_sub_field('subtitle', $field_term); ?></h4>
                      <h2><?php the_sub_field('title', $field_term); ?></h2>
                    </div>
                  </div>
                </a>
              <?php  endwhile; ?>
            </div><!-- / .link-cluster -->
          <?php endif; ?>
        </div><!-- / .row -->


      <?php else: ?>

        <div class="row">
          <article class="article single index twelve col">
            <?php if(!empty(get_field('top_news', $field_term))) {
            $posts = get_field('top_news', $field_term);
            if( $posts ): ?>
              <h5>Featured News Articles</h5>
                <?php foreach( $posts as $post): ?>
                  <?php setup_postdata($post); ?>
                    <div class="feat-entry four col" style="background: url('<?php the_post_thumbnail_url('medium'); ?>') no-repeat center center, #ccc; background-size: cover;">
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
            <?php endif; }?>

            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>

          </article>
        </div>

      <?php endif; ?>
    </div>
  </div>


<?php get_footer(); ?>

