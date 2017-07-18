<?php get_header(); ?>
<?php
$body___class = '';
$cat_arr = array(9, 11, 10); //ID categories of light theme

if ( is_category( $cat_arr ) || in_category( $cat_arr ) || post_is_in_descendant_category( $cat_arr ) ) {
    $body___class = 'light';
 }
else {
  $body___class = 'dark';
} ?>


  <div class="loading-wrapper">
    <div class="container">
      <div class="row">
        <article class="article single index twelve col">
          <h5>Featured News Articles</h5>
<!-- ACF -->
          <div class="feat-entry four col" style="background: url(http://www.vibrantmedia.com/wp-content/uploads/2017/06/VR-image.jpg); background-size: cover;">
            <a href="http://www.vibrantmedia.com/greatest-barrier-augmented-virtual-realities-apps-accessories/">
              <div class="overlay"></div>
            </a>
            <div class="text">
              <a href="http://www.vibrantmedia.com/greatest-barrier-augmented-virtual-realities-apps-accessories/">
                <p>, Jun 28th, 2017</p>
              </a>
              <p>
                <a href="http://www.vibrantmedia.com/greatest-barrier-augmented-virtual-realities-apps-accessories/"></a><a href="http://www.vibrantmedia.com/category/vibrant-news-2/">Vibrant News</a></p>
              <h2>Greatest Barrier To Augmented &amp; Virtual Realities Are The Apps And Accessories</h2>
            </div>
          </div>


    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>


          <div class="pagination twelve col"><a class="prev page-numbers" href="http://www.vibrantmedia.com/news/vibrant-news/page/2/">Previous</a>
            <a class="page-numbers" href="http://www.vibrantmedia.com/news/vibrant-news/page/1/">1</a>
            <a class="page-numbers" href="http://www.vibrantmedia.com/news/vibrant-news/page/2/">2</a>
            <span class="page-numbers current">3</span>
            <a class="page-numbers" href="http://www.vibrantmedia.com/news/vibrant-news/page/4/">4</a>
            <a class="page-numbers" href="http://www.vibrantmedia.com/news/vibrant-news/page/5/">5</a>
            <span class="page-numbers dots">…</span>
            <a class="page-numbers" href="http://www.vibrantmedia.com/news/vibrant-news/page/11/">11</a>
            <a class="next page-numbers" href="http://www.vibrantmedia.com/news/vibrant-news/page/4/">Next</a></div>
        </article>
      </div>
    </div>
  </div>



  <article>

    <h1 class="cat-title inner-title"><?php _e( 'Categories for', 'wpeasy' ); the_category(', '); ?></h1>


  </article>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
