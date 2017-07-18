
  <footer class="footer">
    <div class="container">
      <div class="row menus">
        <?php wpeFootNav(); ?>
<!--         <div class="nine col">



          <div class="col menu">
            <div class="">
              <ul id="" class="menu">
                <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#your-needs/">Your Needs</a></li>
                <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#your-needs/publisher/">Publisher</a></li>
                <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#your-needs/advertiser-agency/">Advertiser or Agency</a></li>
                <li id="" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#your-needs/marketer/">Marketers</a></li>
              </ul>
            </div>
          </div>

        </div> -->

        <div class="one col spacer"></div>
        <div class="two col trade-logos dark">
          <ul>
            <li>
              <a target="_blank" href="http://www.networkadvertising.org/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/nai_logo1-e1430913624758.jpg">
              </a>
            </li>
            <li>
              <a target="_blank" href="http://www.edaa.eu/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/edna_logo-e1430913660503.jpg">
              </a>
            </li>
            <li>
              <a target="_blank" href="http://www.jicwebs.org/agreed-principles/digital-trading-standards-group-good-practice-principles">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DTSG2.jpg">
              </a>
            </li>
          </ul>
        </div>
        <div class="two col trade-logos light">
          <ul>
            <li>
              <a target="_blank" href="http://www.networkadvertising.org/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/nai_logo_alt.jpg">
              </a>
            </li>
            <li>
              <a target="_blank" href="http://www.edaa.eu/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/edna_logo_alt-e1431106453845.jpg">
              </a>
            </li>
            <li>
              <a target="_blank" href="http://www.jicwebs.org/agreed-principles/digital-trading-standards-group-good-practice-principles">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DTSG2_alt.jpg">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row copyrights">
        <div class="twelve col ">
          <a href="#privacy-policy/">Privacy Statement</a> and
          <a href="http://www.networkadvertising.org/choices/">Opt - Out</a> | Copyright © 2017 <a href="#">Vibrant Media</a>. All Rights Reserved. Design by
          <a target="_blank" href="http://firedog.co.uk/">Firedog</a>.
        </div>
      </div>
    </div>
  </footer>



<?php wp_footer(); ?>


  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.responsiveTabs.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/flickity.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/moment.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/moment-timezone-with-data.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","url":"http:\/\/www.vibrantmedia.com\/","name":"Vibrant Media","alternateName":"Vibrant","potentialAction":{"@type":"SearchAction","target":"http:\/\/www.vibrantmedia.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
  <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Organization","url":"http:\/\/www.vibrantmedia.com\/","sameAs":["https:\/\/www.facebook.com\/vibrantmedia","https:\/\/www.linkedin.com\/company\/vibrant-media","https:\/\/twitter.com\/vibrantmediauk"],"name":"Vibrant","logo":"http:\/\/vibrantmedia.com\/wp-content\/uploads\/2015\/05\/logo_dark.png"}</script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var myAjax = {
    "ajaxurl": "https:\/\/www.vibrantmedia.com\/wp-admin\/admin-ajax.php"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/my_voter_script.js"></script>
  <script type="text/javascript">
  $(function() {
    //to fade out automatically,wait for 10 milli second

    if (!($.cookie('noShowWelcome'))) {
      setTimeout("FadeOut()", 10000);
    } else {
      $('.cookies-msg').hide();
    }
    $("#close-cookies").click(function() {
      FadeOut();
    });

  });

  function FadeOut() {
    $.cookie('noShowWelcome', true);
    $(".cookies-msg").fadeOut(500);

  }
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wp-embed.min.js"></script>
  <script type="text/javascript">
  /* <![CDATA[ */
  var icl_vars = {
    "current_language": "us",
    "icl_home": "http:\/\/www.vibrantmedia.com\/",
    "ajax_url": "https:\/\/www.vibrantmedia.com\/wp-admin\/admin-ajax.php",
    "url_type": "1"
  };
  /* ]]> */
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sitepress.js"></script>




</body>
</html>
