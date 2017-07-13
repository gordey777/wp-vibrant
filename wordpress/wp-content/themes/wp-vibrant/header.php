<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php wp_title( '' ); ?>
      <?php if ( wp_title( '', false ) ) { echo ' :'; } ?>
        <?php bloginfo( 'name' ); ?>
  </title>
  <link href="http://www.google-analytics.com/" rel="dns-prefetch">
  <!-- dns prefetch -->
  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
    <style type="text/css">
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 .07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
    </style>
    <style type="text/css">
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    </style>
</head>

<body <?php body_class( 'page'); ?>>
  <div class="header-nav">
    <div class="nav-container container">
      <div class="row">
        <div class="eight col nav-left-wrapper">
          <a class="ie-hide" href="<?php echo home_url(); ?>">
            <img class="light" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
            <img class="dark" src="<?php echo get_template_directory_uri(); ?>/img/logo_dark.png">
          </a>
          <a href="<?php echo home_url(); ?>">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="504px" height="216px" viewBox="0 0 504 216" enable-background="new 0 0 504 216" xml:space="preserve">
              <polygon points="12.243,134.173 30.485,134.173 50.123,172.541 69.76,134.173 87.572,134.173 57.202,189.041
                 42.608,189.041 "></polygon>
              <path d="M322.678,189.157h17.131l-30.438-54.989H298.02l-30.436,54.989h15.732l6.232-12.174h26.899L322.678,189.157z
                M294.965,166.399l8.033-15.693l8.032,15.693H294.965z"></path>
              <rect x="96.328" y="134.166" width="15.104" height="54.875"></rect>
              <path clip-path="url(#SVGID_2_)" d="M129.266,134.167h35.195c7.849,0,14.028,1.726,17.944,4.862
                c3.14,2.509,4.706,5.568,4.706,9.33v0.158c0,6.19-4.118,9.639-9.023,11.836c7.948,2.431,12.851,6.114,12.851,13.483v0.158
                c0,10.032-10.2,15.047-25.687,15.047h-35.986V134.167z M161.227,156.063c6.671,0,10.886-1.636,10.886-5.508v-0.15
                c0-3.426-3.534-5.358-9.904-5.358h-18.234v11.017H161.227z M165.252,178.159c6.664,0,10.679-1.785,10.679-5.658v-0.151
                c0-3.498-3.427-5.66-11.176-5.66h-20.78v11.47H165.252z"></path>
              <polygon clip-path="url(#SVGID_2_)" points="440.582,145.302 418.035,145.302 418.035,134.166 478.229,134.166
                 478.229,145.302 455.682,145.302 455.682,189.041 440.582,189.041     "></polygon>
              <path clip-path="url(#SVGID_2_)" d="M201.681,134.202h34.677c8.72,0,15.484,1.957,19.99,5.555
                c3.814,3.049,5.881,7.354,5.881,12.519v0.151c0,8.845-6.896,14.345-12.719,16.154c-1.998,0.612-4.291,1.037-4.975,1.157
                c7.912,2.414,14.358,9.252,19.74,19.236H246c-9.279-13.793-15.141-17.238-29.237-17.238v17.238h-15.082V134.202z M235.379,160.411
                c7.355,0,11.564-2.976,11.564-7.363v-0.142c0-4.909-4.509-7.438-11.863-7.438h-18.317v14.943H235.379z"></path>
              <path clip-path="url(#SVGID_2_)" d="M345.463,134.286l12.92-0.015c10.106,6.739,24.387,16.688,33.164,28.553
                v-28.538h14.906v54.877h-12.846c-10.611-16.279-25.391-30.101-33.236-34.847v34.847h-14.908V134.286z"></path>
              <path clip-path="url(#SVGID_2_)" d="M483.301,135.114h-1.635v-0.905h4.412v0.905h-1.635v4.572h-1.143V135.114z
                M492.246,135.353h-0.027l-1.607,4.334h-0.744l-1.607-4.334h-0.025v4.334h-1.064v-5.478h1.58l1.49,3.883l1.487-3.883h1.58v5.478
                h-1.062V135.353z"></path>
              <path clip-path="url(#SVGID_2_)" d="M235.51,98.883c2.076,2.169,3.967,3.686,5.715,4.549
                c2.545,1.26,5.435,1.611,8.633,1.074l-47.569-77.664h-28.181L235.51,98.883z"></path>
              <path clip-path="url(#SVGID_2_)" d="M290.938,55.562l-6.219,7.331c-3.888-8.881-16.213-26.039-41.92-27.58
                C267.984,34.474,284.43,48.157,290.938,55.562 M271.898,77.99l8.164-9.589c-7.742-19.756-24.576-32.999-44.965-32.069
                c-3.264,0.491-8.229,1.509-11.935,2.963C251.693,38.637,266.266,61.209,271.898,77.99 M216.165,42.469l35.984,58.761l12.584-14.774
                c-2.981-12.284-13.69-44.839-44.803-45.565C219.042,40.904,216.749,42.083,216.165,42.469"></path>
              <path clip-path="url(#SVGID_2_)" d="M292.83,53.228l22.557-26.39h-28.184l-8.945,14.86
                C285.041,45.669,289.92,49.917,292.83,53.228"></path>
            </svg>
          </a>
          <nav class="nav">
            <div class="menu-main-menu-american0-container">
              <?php wpeHeadNav(); ?>
                <!--               <ul id="menu-main-menu-american0" class="menu">
  <li id="menu-item-1917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1917"><a href="#about-us/">About Us</a></li>
  <li id="menu-item-1919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1919"><a href="#our-solutions/">Our Solutions</a></li>
  <li id="menu-item-4928" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4928"><a href="#our-case-studies/">Our Case Studies</a></li>
  <li id="menu-item-1923" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1923"><a href="#your-needs/">Your Needs</a></li>
  <li id="menu-item-4929" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4929"><a href="#contact-us/">Contact Us</a></li>
  <li id="menu-item-4930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4930"><a href="#news/">News</a></li>
</ul> -->
            </div>
          </nav>
          <div class="mobile-menu-btn">
            <button class="lines-button arrow x" type="button" role="button" aria-label="Toggle Navigation">
              <span class="lines"></span>
            </button>
          </div>
        </div>
        <div class="four col nav-right-wrapper">
          <ul>
            <li class="twitter"><a target="_blank" href="https://twitter.com/VibrantMedia"><span class="icon-twitter"></span></a></li>
            <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/vibrant-media"><span class="icon-linkedin"></span></a></li>
            <li class="facebook"><a target="_blank" href="https://www.facebook.com/vibrantmedia/?fref=ts"><span class="icon-facebook"></span></a></li>
            <li class="instagram"><a target="_blank" href="https://www.instagram.com/vibrantmediaglobal/"><span class="icon-instagram"></span></a></li>
            <div id="lang_sel">
              <ul>
                <li>
                  <a href="##" class="lang_sel_sel icl-us"><img class="iclflag" src="<?php echo get_template_directory_uri(); ?>/img/us.png" alt="us" title="American"> &nbsp;
                  </a>
                  <ul>
                    <li class="icl-en">
                      <a href="#en/"><img class="iclflag" src="<?php echo get_template_directory_uri(); ?>/img/en.png" alt="en" title="English">&nbsp;</a>
                    </li>
                    <li class="icl-de">
                      <a href="#de/"><img class="iclflag" src="<?php echo get_template_directory_uri(); ?>/img/de.png" alt="de" title="Deutsch">&nbsp;</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <li>
              <a target="_blank" href="<?php echo home_url(); ?>/wp-login.php">Login</a>
            </li>
            <li>
              <a target="_blank" href="#privacy-policy/">Privacy</a>
            </li>
            <li class="search-btn">
              <div>
                <span class="text">Search</span>
                <form role="search" method="get" action="<?php echo home_url(); ?>" role="search">
                  <input type="search" placeholder="" value="" name="s" title="Search for:">
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container mobile-menu">
      <ul>
        <li class="parent" data-slug="about-us">
          <a href="#about-us/">About Us</a>
          <div class="more icon">
            <div class="line hor"></div>
            <div class="line ver"></div>
          </div>
        </li>
        <ul class="children about-us">
          <li class="child" style="width: 100% !important;">
            <a href="#about-us/leadership/">Leadership</a></li>
          <a href="#about-us/history/">
            <li class="child" style="width: 100% !important;">
              <h2>Vibrant’s History</h2>
              <p></p>
            </li>
          </a>
          <a href="#about-us/who-we-are/">
            <li class="child" style="width: 100% !important;">
              <h2>Who We Are</h2>
              <p></p>
            </li>
          </a>
          <a href="#about-us/careers/">
            <li class="child" style="width: 100% !important;">
              <h2>Careers</h2>
              <p></p>
            </li>
          </a>
        </ul>
        <li class="parent" data-slug="our-solutions">
          <a href="#our-solutions/">Our Solutions</a>
          <div class="more icon">
            <div class="line hor"></div>
            <div class="line ver"></div>
          </div>
        </li>
        <ul class="children our-solutions">
          <a href="#our-solutions/premium-advertising/">
            <li class="child" style="width: 100% !important;">
              <h2>Premium Advertising</h2>
              <p></p>
            </li>
          </a>
          <a href="#our-solutions/content-marketing/">
            <li class="child" style="width: 100% !important;">
              <h2>Content Marketing Solutions</h2>
              <p></p>
            </li>
          </a>
          <a href="#our-solutions/programmatic/">
            <li class="child" style="width: 100% !important;">
              <h2>Contextual Programmatic</h2>
              <p></p>
            </li>
          </a>
        </ul>
        <li class="parent" data-slug="gallery-cell our-case-studies">
          <a href="#our-case-studies/">Our Case Studies</a>
        </li>
        <li class="parent" data-slug="your-needs">
          <a href="#your-needs/">Your Needs</a>
          <div class="more icon">
            <div class="line hor"></div>
            <div class="line ver"></div>
          </div>
        </li>
        <ul class="children your-needs">
          <a href="#your-needs/publisher/">
            <li class="child" style="width: 100% !important;">
              <h2>Publisher</h2>
              <p></p>
            </li>
          </a>
          <a href="#your-needs/advertiser-agency/">
            <li class="child" style="width: 100% !important;">
              <h2>Advertiser or Agency</h2>
              <p></p>
            </li>
          </a>
          <a href="#your-needs/marketer/">
            <li class="child" style="width: 100% !important;">
              <h2>Marketers</h2>
              <p></p>
            </li>
          </a>
        </ul>
        <li class="parent" data-slug="contact-us">
          <a href="#contact-us/">Contact Us</a>
        </li>
        <li class="parent" data-slug="news">
          <a href="#news/">News</a>
          <div class="more icon">
            <div class="line hor"></div>
            <div class="line ver"></div>
          </div>
        </li>
        <ul class="children news">
          <a href="#news/vibrant-news/">
            <li class="child" style="width: 100% !important;">
              <h2>Vibrant News</h2>
              <p></p>
            </li>
          </a>
          <a href="#news/vibrant-blog/">
            <li class="child" style="width: 100% !important;">
              <h2>Vibrant Blog</h2>
              <p></p>
            </li>
          </a>
          <a href="#news/events/">
            <li class="child" style="width: 100% !important;">
              <h2>Events</h2>
              <p></p>
            </li>
          </a>
        </ul>
      </ul>
      <ul class="options">
        <li><a target="_blank" href="<?php echo home_url(); ?>/wp-login.php">Login</a>
        </li>
        <li>
          <a target="_blank" href="#privacy-policy/">Privacy</a>
        </li>
      </ul>
      <li class="mobile-search-btn">
        <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
          <input class="search-input" type="search" name="s" placeholder="Search" title="Search for:">
        </form>
      </li>
      <ul class="socials">
        <li style="width:25%;">
          <a target="_blank" href="https://twitter.com/VibrantMedia"><span class="icon-twitter"></span></a>
        </li>
        <li style="width:25%;">
          <a target="_blank" href="https://www.linkedin.com/company/vibrant-media"><span class="icon-linkedin"></span></a>
        </li>
        <li style="width:25%;">
          <a target="_blank" href="https://www.facebook.com/vibrantmedia/?fref=ts"><span class="icon-facebook"></span></a>
        </li>
        <li style="width:25%;">
          <a target="_blank" href="https://www.instagram.com/vibrantmediaglobal/"><span class="icon-instagram"></span></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="hvr-menu">
    <div class="hvr-exit"></div>
    <div class="container">
      <div class="row menu about-us">
        <div class="twelve col menu-wrapper">
          <div class="group-1 six col">
            <a href="#about-us/leadership/">
              <div class="six col child-page" data-page="leadership">
                <h2>Leadership</h2>
                <p></p>
              </div>
            </a>
            <a href="#about-us/history/">
              <div class="six col child-page" data-page="history">
                <h2>Vibrant’s History</h2>
                <p></p>
              </div>
            </a>
            <a href="#about-us/who-we-are/">
              <div class="six col child-page" data-page="who-we-are">
                <h2>Who We Are</h2>
                <p></p>
              </div>
            </a>
            <a href="#about-us/careers/">
              <div class="six col child-page" data-page="careers">
                <h2>Careers</h2>
                <p></p>
              </div>
            </a>
          </div>
          <div class="uber-img img-1 active six col leadership" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_About_Leadership.jpg); background-size: cover;"></div>
          <div class="uber-img img-2 six col history" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_About_History.jpg); background-size: cover;"></div>
          <div class="uber-img img-3 six col who-we-are" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_About_Technology.jpg); background-size: cover;"></div>
          <div class="uber-img img-4 six col careers" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_About_Careers.jpg); background-size: cover;"></div>
        </div>
      </div>
      <div class="row menu our-solutions">
        <div class="twelve col menu-wrapper">
          <div class="group-1 six col">
            <a href="#our-solutions/premium-advertising/">
              <div class="six col child-page" data-page="premium-advertising">
                <h2>Premium Advertising</h2>
                <p></p>
              </div>
            </a>
            <a href="#our-solutions/content-marketing/">
              <div class="six col child-page" data-page="content-marketing">
                <h2>Content Marketing Solutions</h2>
                <p></p>
              </div>
            </a>
            <a href="#our-solutions/programmatic/">
              <div class="six col child-page" data-page="programmatic">
                <h2>Contextual Programmatic</h2>
                <p></p>
              </div>
            </a>
          </div>
          <div class="uber-img img-1 active six col premium-advertising" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_Solutions_PremiumAdvertising.jpg); background-size: cover;"></div>
          <div class="uber-img img-2 six col content-marketing" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_Solutions_ContentMarketing.jpg); background-size: cover;"></div>
          <div class="uber-img img-3 six col programmatic" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_Solutions_Programmatic.jpg); background-size: cover;"></div>
        </div>
      </div>
      <div class="row menu  no-children">
        <div class="twelve col menu-wrapper">
          <div class="group-1 six col">
          </div>
        </div>
      </div>
      <div class="row menu your-needs">
        <div class="twelve col menu-wrapper">
          <div class="group-1 six col">
            <a href="#your-needs/publisher/">
              <div class="six col child-page" data-page="publisher">
                <h2>Publisher</h2>
                <p></p>
              </div>
            </a>
            <a href="#your-needs/advertiser-agency/">
              <div class="six col child-page" data-page="advertiser-agency">
                <h2>Advertiser or Agency</h2>
                <p></p>
              </div>
            </a>
            <a href="#your-needs/marketer/">
              <div class="six col child-page" data-page="marketer">
                <h2>Marketers</h2>
                <p></p>
              </div>
            </a>
          </div>
          <div class="uber-img img-1 active six col publisher" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_Needs_Publishers.jpg); background-size: cover;"></div>
          <div class="uber-img img-2 six col advertiser-agency" style="background: url(<?php echo get_template_directory_uri(); ?>/img/shutterstock_371016464-sized-down.jpg); background-size: cover;"></div>
          <div class="uber-img img-3 six col marketer" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_Needs_Marketers.jpg); background-size: cover;"></div>
        </div>
      </div>
      <div class="row menu gallery-cell contact-us no-children">
        <div class="twelve col menu-wrapper">
          <div class="group-1 six col">
          </div>
        </div>
      </div>
      <div class="row menu news">
        <div class="twelve col menu-wrapper">
          <div class="group-1 six col">
            <a href="#news/vibrant-news/">
              <div class="six col child-page" data-page="vibrant-news">
                <h2>Vibrant News</h2>
                <p></p>
              </div>
            </a>
            <a href="#news/vibrant-blog/">
              <div class="six col child-page" data-page="vibrant-blog">
                <h2>Vibrant Blog</h2>
                <p></p>
              </div>
            </a>
            <a href="#news/events/">
              <div class="six col child-page" data-page="events">
                <h2>Events</h2>
                <p></p>
              </div>
            </a>
          </div>
          <div class="uber-img img-1 active six col vibrant-news" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_News_VibrantNews.jpg); background-size: cover;"></div>
          <div class="uber-img img-2 six col vibrant-blog" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_News_Blog.jpg); background-size: cover;"></div>
          <div class="uber-img img-3 six col events" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Header_News_Events.jpg); background-size: cover;"></div>
        </div>
      </div>
    </div>
  </div>
