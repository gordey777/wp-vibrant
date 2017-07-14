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
        <!-- Homepage Mission slider -->
        <section class="mission-sldr nine col">
          <div class="gallery-cell" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Home2b1.jpg); background-size: cover;">
            <div class="text">
              <h2>OUR MISSION</h2>
              <h3>Vibrant is Transforming Content Connections. We connect consumers with engaging and contextually relevant brand messages.</h3>
            </div>
          </div>
          <div class="gallery-cell" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Home3b1.jpg); background-size: cover;">
            <div class="text">
              <h2>WHY VIBRANT?</h2>
              <h3>We offer native, premium, viewable brand and programmatic solutions at scale.</h3>
            </div>
          </div>
          <div class="gallery-cell" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Home1b1.jpg); background-size: cover;">
            <div class="text">
              <h2>WHO ARE WE?</h2>
              <h3>Vibrant is the original native player. We amplify branded content across a network of over 6,600 premium publishers.</h3>
            </div>
          </div>
        </section>
        <!-- Left hand side buttons -->
        <section class="home-btns three col">
          <a href="#your-needs/advertiser-agency/">
            <div class="btn hvr-btn green right" data-type="advertisers">
              <div class="text">
                <h4>Are you an</h4>
                <h2>Advertiser</h2>
              </div>
            </div>
          </a>
          <div class="btn img right mobile-none">
            <div class="hvr-img advertisers active">
              <img src="<?php echo get_template_directory_uri(); ?>/img/shutterstock_371016464-sized-down.jpg">
            </div>
            <div class="hvr-img publishers">
              <img src="<?php echo get_template_directory_uri(); ?>/img/Publishers_thumb.jpg">
            </div>
          </div>
          <a href="#your-needs/publisher/">
            <div class="btn hvr-btn grey right last" data-type="publishers">
              <div class="text">
                <h4>or a</h4>
                <h2>Publisher</h2>
              </div>
            </div>
          </a>
        </section>
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
        <div class="gallery-cell">
          <div class="text">
            <h4>Trophy Cabinet</h4>
            <h3>VIBRANT INSPERIENCE</h3>
            <p></p>
            <h3>Immersive digital experiences to powerfully connect brands with people</h3>
            <h3><a href="#our-solutions/premium-advertising/vibrant-insperience/">Find out more</a></h3>
            <p></p>
          </div>
          <img width="4615" height="3461" src="<?php echo get_template_directory_uri(); ?>/img/vibrant-AR-mockup.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="vibrant-AR-mockup">
          <div class="white-background"></div>
        </div>
        <div class="gallery-cell">
          <div class="text">
            <h4>Trophy Cabinet</h4>
            <h3>NATIVE SOLUTIONS</h3>
            <p></p>
            <h3>Viewable, engaging solutions across all screens. Find out how we can help your brand</h3>
            <p></p>
          </div>
          <img width="345" height="244" src="<?php echo get_template_directory_uri(); ?>/img/Mosiac.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Mosiac" srcset="<?php echo get_template_directory_uri(); ?>/img/Mosiac.jpg 345w, <?php echo get_template_directory_uri(); ?>/img/Mosiac-300x212.jpg 300w" sizes="(max-width: 345px) 100vw, 345px">
          <div class="white-background"></div>
        </div>
        <div class="gallery-cell">
          <div class="text">
            <h4>Trophy Cabinet</h4>
            <h3>CONTENT MARKETING</h3>
            <p></p>
            <h3>From Content distribution to Content curation and creation. See how Vibrant can help your brand </h3>
            <p></p>
          </div>
          <img width="345" height="244" src="<?php echo get_template_directory_uri(); ?>/img/BrandCanvas.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="BrandCanvas" srcset="<?php echo get_template_directory_uri(); ?>/img/BrandCanvas.jpg 345w, <?php echo get_template_directory_uri(); ?>/img/BrandCanvas-300x212.jpg 300w" sizes="(max-width: 345px) 100vw, 345px">
          <div class="white-background"></div>
        </div>
        <div class="gallery-cell">
          <div class="text">
            <h4>Trophy Cabinet</h4>
            <h3>CONTEXTUAL PROGRAMMATIC</h3>
            <p></p>
            <h3>Private, global exchange of 6600 premiums publishers. Start automating your campaigns today.</h3>
            <p></p>
          </div>
          <img width="5250" height="3188" src="<?php echo get_template_directory_uri(); ?>/img/tablet-rm2.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="tablet-rm2">
          <div class="white-background"></div>
        </div>
      </section>
      <div class="slider-wrapper six col">
        <span class="icon-facebook fixed-icon"></span>
        <section class="twelve col social-sldr facebook-sldr small-sldr">
        </section>
      </div>
      <div class="slider-wrapper six col">
        <span class="icon-twitter fixed-icon"></span>
        <section class="twelve col social-sldr twitter-sldr small-sldr">
          <div class="gallery-cell no-image">
            <div class="text">
              <p class="meta">2 days ago </p>
              <h3 class="tweet">Is Immersive VR The Future Of Advertising? Find out by downloading our free whitepaper today.… htt...</h3>
            </div>
          </div>
          <div class="gallery-cell image">
            <div class="text">
              <p class="meta">6 days ago </p>
              <h3 class="tweet">RT <span class="link mention">@EDAATweets</span>: Yes! Congratulations to <span class="link mention">@VibrantMedia</span> for renewing its <span class="link hashtag">#trust</span> seal w/ <span class="link mention">@ABC_UK</span> https:...</h3>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/DD-QdLkW0AA-dgL.jpg">
          </div>
          <div class="gallery-cell no-image">
            <div class="text">
              <p class="meta">6 days ago </p>
              <h3 class="tweet">RT <span class="link mention">@VibrantMediaUK</span>: Vibrant's Hamburg team had a lot of fun at the Golf Lounge yesterday! Thanks to ...</h3>
            </div>
          </div>
          <div class="gallery-cell no-image">
            <div class="text">
              <p class="meta">1 week ago </p>
              <h3 class="tweet">RT <span class="link mention">@VR360_news</span>: Research by <span class="link mention">@VibrantMedia</span> shows that the need for additional apps and hardware = big...</h3>
            </div>
          </div>
          <div class="gallery-cell no-image">
            <div class="text">
              <p class="meta">1 week ago </p>
              <h3 class="tweet">RT <span class="link mention">@DCNorg</span>: Direct buys and non-blind programmatic need context to solve brand safety <span class="link mention">@VibrantMedia</span> ...</h3>
            </div>
          </div>
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
