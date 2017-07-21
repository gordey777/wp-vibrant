<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!--     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h1 class="page-title inner-title"><?php the_title(); ?></h1>
  <?php //the_content(); ?>
  <?php //edit_post_link(); ?>

</article> -->


  <div class="loading-wrapper">
    <style>
    h3.news-title1 {
      padding: 0 0 0px 20px!important;
      margin: 8px 0px;
    }

    h4.news-sub1 {
      padding: 0 0 0px 20px!important;
      margin: 3px 0px;
    }

    .small-sldr.trophy-cabinet img {
      padding: 0!important;
    }

    .trophy-cabinet h4 {
      display: none!important;
    }
    </style>
    <div class="container">
      <div class="row">


      <?php if( have_rows('main_slider') ): ?>
        <section class="mission-sldr nine col">
          <?php while ( have_rows('main_slider') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>
            <div class="gallery-cell" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>'); background-size: cover;"<?php endif; ?>>
              <div class="text">
                <h2><?php the_sub_field('title'); ?></h2>
                <h3><?php the_sub_field('content'); ?></h3>
              </div>
            </div>
          <?php  endwhile; ?>
        </section>
      <?php endif; ?>


        <!-- Left hand side buttons -->

      <?php if( have_rows('side_buttons') ): ?>
        <?php

        $rows = get_field('side_buttons' );
        $row1 = $rows[0];
        $image1 = $row1['img'];
        $title1 = $row1['title' ];
        $content1 = $row1['content' ];
        $link1 = $row1['link' ];

        $row2 = $rows[1];
        $image2 = $row2['img'];
        $title2 = $row2['title' ];
        $content2 = $row2['content' ];
        $link2 = $row2['link' ];

        ?>


        <section class="home-btns three col">
          <a href="<?php echo $link1; ?>">
            <div class="btn hvr-btn green right" data-type="advertisers">
              <div class="text">
                <h4><?php echo $title1; ?></h4>
                <h2><?php echo $content1; ?></h2>
              </div>
            </div>
          </a>
          <div class="btn img right mobile-none">
            <div class="hvr-img advertisers active">
              <img src="<?php echo $image1['url']; ?>">
            </div>
            <div class="hvr-img publishers">
              <img src="<?php echo $image2['url']; ?>">
            </div>
          </div>
          <a href="<?php echo $link2; ?>">
            <div class="btn hvr-btn grey right last" data-type="publishers">
              <div class="text">
                <h4><?php echo $title2; ?></h4>
                <h2><?php echo $content2; ?></h2>
              </div>
            </div>
          </a>
        </section>
      <?php endif; ?>


      </div>

      <!-- Homepage Products Slider -->
      <?php

      $posts = get_field('news_slider');

      if( $posts ): ?>

        <section class="prel six col ps">
          <h3 class="news-title1">Vibrant’s News &amp; Views!</h3>
          <h4 class="news-sub1">Check out our latest press and blog posts.</h4>
          <div class="product-sldr one-row">
            <?php foreach( $posts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="gallery-cell ">
                <div class="text">
                  <div class="post">
                    <h4><?php the_time( 'j F Y'); ?></h4>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <p class="cat"><?php the_category( ', '); ?></p>
                    <?php wpeExcerpt('wpeExcerpt20'); ?>
                  </div>
                </div>
              </div>
              <div class="ps-img" <?php if ( has_post_thumbnail()) : ?> style="background-image: url('<?php echo the_post_thumbnail_url('medium'); ?>');" title="<?php the_title(); ?>"<?php endif; ?>></div>
            <?php endforeach; ?>
          </div>
        </section>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>


      <section class="six col trophy-cabinet small-sldr">
        <?php if( have_rows('small_slider') ): ?>
          <?php while ( have_rows('small_slider') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>
            <?php $link = get_sub_field('link'); ?>
            <div class="gallery-cell">
              <div class="text">
                <h3><?php the_sub_field('title'); ?></h3>
                <h3><?php the_sub_field('content'); ?></h3>
                <?php if ( !empty($link)) { ?>
                <h3><a href="#our-solutions/premium-advertising/vibrant-insperience/">Find out more</a></h3>
                <?php } ?>
              </div>
              <?php if ( !empty($image)) { ?>
                <img src="<?php echo $image['sizes']['medium']; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
              <?php } ?>
              <div class="white-background"></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </section>

      <div class="slider-wrapper six col">
        <span class="icon-facebook fixed-icon"></span>
        <section class="twelve col social-sldr facebook-sldr small-sldr">
          <?php if( have_rows('fb_slider') ): ?>
            <?php while ( have_rows('fb_slider') ) : the_row(); ?>
              <?php $image = get_sub_field('img'); ?>
              <?php $link = get_sub_field('link'); ?>
              <?php $slide_class = 'no-image'; ?>
              <?php $days = human_time_diff( strtotime( get_sub_field('data') ), current_time('timestamp')) . ' ago'; ?>
              <?php if ( !empty($image)) {
                $slide_class = 'image'; ?>
              <?php } ?>
              <?php $link = get_sub_field('link'); ?>
              <div class="gallery-cell <?php echo $slide_class; ?>">
                <div class="text">
                  <p class="meta"><?php echo $days; ?></p>
                  <h3 class="tweet"><?php the_sub_field('content'); ?></h3>
                </div>
                <?php if ( !empty($image)) {
                  $slide_class = 'image'; ?>
                  <img src="<?php echo $image['sizes']['medium']; ?>">
                <?php } ?>
              </div>
            <?php  endwhile; ?>
          <?php endif; ?>
        </section>
      </div>

      <div class="slider-wrapper six col">
        <span class="icon-twitter fixed-icon"></span>
        <section class="twelve col social-sldr twitter-sldr small-sldr">
          <?php if( have_rows('twitter_slider') ): ?>
            <?php while ( have_rows('twitter_slider') ) : the_row(); ?>
              <?php $image = get_sub_field('img'); ?>
              <?php $slide_class = 'no-image'; ?>
              <?php $days = human_time_diff( strtotime( get_sub_field('data') ), current_time('timestamp')) . ' ago'; ?>
              <?php if ( !empty($image)) {
                $slide_class = 'image'; ?>
              <?php } ?>
              <?php $link = get_sub_field('link'); ?>
              <div class="gallery-cell <?php echo $slide_class; ?>">
                <div class="text">
                  <p class="meta"><?php echo $days; ?></p>
                  <h3 class="tweet"><?php the_sub_field('content'); ?></h3>
                </div>
                <?php if ( !empty($image)) { ?>
                  <img src="<?php echo $image['sizes']['medium']; ?>">
                <?php } ?>
              </div>
            <?php  endwhile; ?>
          <?php endif; ?>
        </section>
      </div>

      <div class="row">
        <section class="brands wrapper">
        </section>
      </div>

      <?php
      $category_ids = array(10, 11, 9, 12); //ID categories of posts
      $post_num = 4; //nuber of posts
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
        <div class="row">
          <section class="feed">
            <div class="feed-title twelve col">Latest news</div>
            <?php while ($my_query->have_posts()) {
              $my_query->the_post(); ?>
              <div class="feed-single three col">
                <h4><?php the_time( 'j F Y'); ?></h4>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <p class="cat"><?php the_category( ', '); ?></p>
                <?php wpeExcerpt('wpeExcerpt20'); ?>
              </div>
            <?php } ?>
          </section>
        </div>
      <?php }
      wp_reset_query(); ?>
    </div>

    <div class="cookies-msg">
      <div class="close">
        <a id="close-cookies" href="##"><img src="<?php echo get_template_directory_uri(); ?>/img/cookies_close.png"></a>
      </div>
      <div class="cookies_box">
        <div class="info_icon"></div>
        <p class="cookies_header">About Cookies on this site</p>
        <p class="cookies_copy">Our site uses cookies and other technologies so that we can understand how you and our other visitors use our site. This helps us to improve the site and make it easier for you to use. If you would like to learn more about cookies please <a href="#privacy.asp" title="Vibrant Privacy Statement" target="_blank" class="cookies_link">click here</a>. To see the complete list of cookies used on our website and how to manage your preferences, access our Cookie Consent Tool.</p>
      </div>
    </div>
  </div>
    <?php endwhile; endif; ?>

  <?php //get_sidebar(); ?>
<?php get_footer(); ?>
