<aside id="sidebar" class="three col" role="complementary">

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

          <a href="http://www.vibrantmedia.com/about-us/leadership/">
            <section class="more s-module">
              <h4>Find out more about</h4>
              <h2>Leadership</h2>
            </section>
          </a>
          <section class="feed s-module">
            <h2>Latest news</h2>
            <div class="feed-single">
              <h4>Jul 4th, 2017</h4>
              <h2><a href="http://www.vibrantmedia.com/apps-accessories-biggest-barrier-vrar/">Apps and Accessories are Biggest Barrier to VR/AR</a></h2>
              <p class="cat"><a href="http://www.vibrantmedia.com/category/vibrant-news-2/">Vibrant News</a></p>
              <p>A study of 3,000 consumers across the US, UK and Germany has revealed that the need for additional software, apps ...</p>
            </div>
            <div class="feed-single">
              <h4>Jul 3rd, 2017</h4>
              <h2><a href="http://www.vibrantmedia.com/biggest-barriers-vr-take-apps-accessories/">Biggest barriers to VR take-up are apps and accessories</a></h2>
              <p class="cat"><a href="http://www.vibrantmedia.com/category/vibrant-news-2/">Vibrant News</a></p>
              <p>Consumers say the need for additional software, apps and hardware is the greatest barrier preventing them from experiencing virtual reality ...</p>
            </div>
            <div class="feed-single">
              <h4>Jul 3rd, 2017</h4>
              <h2><a href="http://www.vibrantmedia.com/exploring-destinations-considered-compelling-use-ar-vr-study-finds/">Exploring destinations considered most compelling use of AR and VR, study finds</a></h2>
              <p class="cat"><a href="http://www.vibrantmedia.com/category/vibrant-news-2/">Vibrant News</a></p>
              <p>A study into people’s attitudes towards augmented reality and virtual reality has found exploring holiday destinations would be the most ...</p>
            </div>
          </section>

    <!-- If you want display static widget content - write code here
		RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>



</aside><!-- /sidebar -->
