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
        <a class="head_logo" href="<?php echo home_url(); ?>">
          <img class="light" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
          <img class="dark" src="<?php echo get_template_directory_uri(); ?>/img/logo_dark.png">
        </a>

        <nav class="nav__wrapp">
          <div class="eight col nav-left-wrapper">
            <?php wpeHeadNav(); ?>
          </div>

          <div class="four col nav-right-wrapper">
            <ul class="login_menu">
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
                    <input type="search" placeholder="search" value="" name="s" title="Search for:">
                  </form>
                </div>
              </li>
            </ul>
            <ul class="soc_menu">
              <li class="twitter"><a target="_blank" href="https://twitter.com/VibrantMedia"><span class="icon-twitter"></span></a></li>
              <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/vibrant-media"><span class="icon-linkedin"></span></a></li>
              <li class="facebook"><a target="_blank" href="https://www.facebook.com/vibrantmedia/?fref=ts"><span class="icon-facebook"></span></a></li>
              <li class="instagram"><a target="_blank" href="https://www.instagram.com/vibrantmediaglobal/"><span class="icon-instagram"></span></a></li>
              <li id="lang_sel">
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
              </li>
            </ul>

          </div>
        </nav>
      </div>
    </div>

    <div class="mobile-menu-btn">
      <button class="lines-button arrow x" type="button" role="button" aria-label="Toggle Navigation">
        <span class="lines"></span>
      </button>
    </div>

  </div>
  <div class="hvr-menu">
    <div class="hvr-exit"></div>
  </div>
