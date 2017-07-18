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
      <section class="prel six col ps">
        <h3 class="news-title1">Vibrant’s News &amp; Views!</h3>
        <h4 class="news-sub1">Check out our latest press and blog posts.</h4>
        <div class="product-sldr one-row">
          <div class="gallery-cell ">
            <img src="">
            <div class="text">
              <div class="post">
                <h4>, Jun 21st, 2017</h4>
                <h2><a href="#is-immersive-vr-future-of-advertising/">Is Immersive VR the Future of Advertising?</a></h2>
                <p class="cat"><a href="#category/vibrant-news-2/">Vibrant News</a></p>
                <p>Virtual Reality can rejuvenate advertising but it won’t solve every business problem, says report Advertising experiences in Virtual Reality (VR) and ...</p>
              </div>
            </div>
          </div>
        </div>
      </section>

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
              <div class="gallery-cell <?php echo $slide_class; ?>">
                <div class="text">
                  <p class="meta"><?php the_sub_field('data'); ?></p>
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
              <?php if ( !empty($image)) {
                $slide_class = 'image'; ?>
              <?php } ?>
              <?php $link = get_sub_field('link'); ?>

              <div class="gallery-cell <?php echo $slide_class; ?>">
                <div class="text">
                  <p class="meta"><?php the_sub_field('data'); ?></p>
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


      <div class="row">
        <section class="feed">
          <div class="feed-title twelve col">Latest news</div>
          <div class="feed-single three col">
            <h4>Jul 4th, 2017</h4>
            <h2><a href="#apps-accessories-biggest-barrier-vrar/">Apps and Accessories are Biggest Barrier to VR/AR</a></h2>
            <p class="cat"><a href="#category/vibrant-news-2/">Vibrant News</a></p>
            <p>A study of 3,000 consumers across the US, UK and Germany has revealed that the need for additional software, apps ...</p>
          </div>
          <div class="feed-single three col">
            <h4>Jul 3rd, 2017</h4>
            <h2><a href="#biggest-barriers-vr-take-apps-accessories/">Biggest barriers to VR take-up are apps and accessories</a></h2>
            <p class="cat"><a href="#category/vibrant-news-2/">Vibrant News</a></p>
            <p>Consumers say the need for additional software, apps and hardware is the greatest barrier preventing them from experiencing virtual reality ...</p>
          </div>
          <div class="feed-single three col">
            <h4>Jul 3rd, 2017</h4>
            <h2><a href="#exploring-destinations-considered-compelling-use-ar-vr-study-finds/">Exploring destinations considered most compelling use of AR and VR, study finds</a></h2>
            <p class="cat"><a href="#category/vibrant-news-2/">Vibrant News</a></p>
            <p>A study into people’s attitudes towards augmented reality and virtual reality has found exploring holiday destinations would be the most ...</p>
          </div>
          <div class="feed-single three col">
            <h4>Jun 30th, 2017</h4>
            <h2><a href="#73-attracted-vr-ads-relating-travel/">73% Attracted to VR Ads Relating To Travel</a></h2>
            <p class="cat"><a href="#category/vibrant-news-2/">Vibrant News</a></p>
            <p>When it comes to accessing advertising on virtual reality and augmented reality platforms, consumers say they want to experience travel ...</p>
          </div>
        </section>
      </div>
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
