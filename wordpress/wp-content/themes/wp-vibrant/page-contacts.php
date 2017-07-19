<?php /* Template Name: Contacts */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>

<div class="loading-wrapper">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/contacts.js"></script>
    <div class="container">
      <div class="row">

      <article  id="post-<?php the_ID(); ?>" <?php post_class('article eight col'); ?>>
        <?php easy_breadcrumbs(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

      </article>


        <div class="one col spacer"></div>
        <div class="three col clocks">
            <div class="clock-nav">
              <ul>
                <li class="city-abbrv active" data-address="Україна Вінниця вул. Ак. Янгеля, 58">Ua</li>
                  <li class="city-abbrv" data-address="Vibrant Media Inc.
    650 California Street, San Francisco, CA, 94108 United States
    T: +1 415 321 6060
    ">SF</li>
                  <li class="city-abbrv" data-address="Vibrant Media Inc.
    501 Santa Monica Boulevard, Suite 501 Santa Monica, CA 90401
    United States
    T: +1 424 268 9000
    ">LA</li>
              </ul>
            </div>
          <div class="clock-main">
            <div data-timezone="Europe/Kiev" class="city gallery-cell twelve col">
              <h3>Vinnycia</h3>
              <div class="clock-face four col">
                <div class="clock">
                  <div class="hand hour"></div>
                  <div class="hand minute"></div>
                </div>
                <p class="time">00:00</p>
              </div>
              <div class="text six col">
                <p><strong>Vibrant Media Inc.</strong>
                  <br> Soborna Street, 42
                  <br> 12th Floor
                  <br> Vinnicya, 21000
                  <br> T: +1 646 312-6100</p>
              </div>
            </div>
            <div data-timezone="America/Los_Angeles" class="city gallery-cell twelve col">
              <h3>San Francisco</h3>
              <div class="clock-face four col">
                <div class="clock">
                  <div class="hand hour"></div>
                  <div class="hand minute"></div>
                </div>
                <p class="time">00:00</p>
              </div>
              <div class="text six col">
                <p><strong>Vibrant Media Inc.<br>
</strong>650 California Street, San Francisco, CA, 94108 United States
                  <br> T: +1&nbsp;415 321 6060</p>
              </div>
            </div>
            <div data-timezone="America/Los_Angeles" class="city gallery-cell twelve col">
              <h3>Los Angeles</h3>
              <div class="clock-face four col">
                <div class="clock">
                  <div class="hand hour"></div>
                  <div class="hand minute"></div>
                </div>
                <p class="time">00:00</p>
              </div>
              <div class="text six col">
                <p><strong>Vibrant Media Inc.<br>
</strong>501 Santa Monica Boulevard, Suite 501 Santa Monica, CA 90401
                  <br> United States
                  <br> T: +1 424 268 9000</p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div id="map-canvas" class="twelve col"></div>
      </div>
      <div class="row">
        <div class="accordion-wrapper">


          <div class="row single-accordion">
            <h2 class="accordion-title">
                    Vibrant Offices Worldwide
                    <div class="tooltip-wrapper">
                        <div class="show-txt txt">
                            Open
                        </div>

                        <div class="hide-txt txt">
                            Close
                        </div>
                    </div>

                    <span class="icon-arrow-down"></span>
                </h2>
            <div class="text">
              <div class="row">
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-NewYork.png">
                  <h3>New York City (HQ)</h3>
                  <p><strong>Vibrant Media Inc.</strong>
                    <br> 300 park Avenue,
                    <br> 12th Floor
                    <br> New York, NY 10022
                    <br> T: +1 646 312-6100</p>
                </div>
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-SanFrancisco.png">
                  <h3>San Francisco</h3>
                  <p><strong>Vibrant Media Inc.</strong>
                    <br> 650 California Street, San Francisco, CA, 94108
                    <br> T: +1 415&nbsp;321 6060</p>
                </div>
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-LA.png">
                  <h3>Los Angeles</h3>
                  <p><strong>Vibrant Media Inc.</strong>
                    <br> 501 Santa Monica Boulevard, Suite 501
                    <br> Santa Monica, CA 90401
                    <br> T: +1&nbsp;424 268 9000</p>
                </div>
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-Detroit.png">
                  <h3>Detroit</h3>
                  <p><strong>Vibrant Media Inc.</strong>
                    <br> 101 W. Big Beaver Road
                    <br> Suite 1411
                    <br> Troy, MI 48084
                    <br> T: +1 248 593 5375</p>
                </div>
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-Chicago.png">
                  <h3>Chicago</h3>
                  <p><strong>Vibrant Media Inc.</strong>
                    <br> 20 West Kinzie Street
                    <br> Chicago, IL 60654
                    <br> T: +1 312 291 9835</p>
                </div>
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-London.png">
                  <h3>LONDON, UK</h3>
                  <p><strong>Vibrant Media Ltd.</strong>
                    <br> 33 Queen Street
                    <br> London EC4R 1BR
                    <br> T: +44 (0) 207 074 0000</p>
                </div>
              </div>
              <div class="row">
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-Hamburg.png">
                  <h3>HAMBURG</h3>
                  <p><strong>Vibrant Media GmbH</strong>
                    <br> Neuer Wall 59
                    <br> 20354 Hamburg
                    <br> T: +49 40 380 819 0</p>
                </div>
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-Munich.png">
                  <h3>MÜNCHEN</h3>
                  <p><strong>Vibrant Media GmbH</strong>
                    <br> Müllerstraße&nbsp;39
                    <br> 80469 München
                    <br> T: +49 (0)89 262 089 032</p>
                </div>
                <div class="two col">
                  <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/Office-icons-Dusseldorf.png">
                  <h3>DÜSSELDORF</h3>
                  <p><strong>Vibrant Media GmbH</strong>
                    <br> Neuer Zollhof 3
                    <br> 40221 Düsseldorf
                    <br> T: +49 (0) 211 424 759</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row single-accordion">
            <h2 class="accordion-title">
                    Business Development
                    <div class="tooltip-wrapper">
                        <div class="show-txt txt">
                            Open
                        </div>

                        <div class="hide-txt txt">
                            Close
                        </div>
                    </div>

                    <span class="icon-arrow-down"></span>
                </h2>
            <div class="text">
              <div class="row">
                <div class="two col">

                  <h3>USA</h3>
                  <p>T: +1 646 312-6180
                    <br>
                    <a href="mailto:usa-bd@vibrantmedia.com">usa-bd@vibrantmedia.com</a></p>
                </div>
                <div class="two col">

                  <h3>UK</h3>
                  <p>T: +44 (0) 207 074 0000
                    <br>
                    <a href="mailto:uk-bd@vibrantmedia.com" target="_blank">uk-bd@vibrantmedia.com</a></p>
                </div>
                <div class="two col">

                  <h3>GERMANY</h3>
                  <p>T: +49 40 380 819 0
                    <br> F: +49 40&nbsp;492 190 66
                    <br>
                    <a href="mailto:media-germany@vibrantmedia.com" target="_blank">media-germany@vibrantmedia.com</a></p>
                </div>
                <div class="two col">

                  <h3>France</h3>
                  <p>T: +44 (0) 20 7074 0106
                    <br>
                    <a href="mailto:france@vibrantmedia.com" target="_blank">france@vibrantmedia.com</a></p>
                </div>
              </div>
            </div>
          </div>


          <div class="row single-accordion">
            <h2 class="accordion-title">
                    Advertising Sales
                    <div class="tooltip-wrapper">
                        <div class="show-txt txt">
                            Open
                        </div>

                        <div class="hide-txt txt">
                            Close
                        </div>
                    </div>

                    <span class="icon-arrow-down"></span>
                </h2>
            <div class="text">
              <div class="row">
                <div class="two col">

                  <h3>USA - EAST</h3>
                  <p>T: +1 646 312-6199
                    <br>
                    <a href="mailto:usa-sales@vibrantmedia.com">usa-sales@vibrantmedia.com</a></p>
                  <p>&nbsp;</p>
                </div>
                <div class="two col">

                  <h3>USA - WEST</h3>
                  <p>T: +1 415 694-6102
                    <br>
                    <a href="mailto:usa-sales@vibrantmedia.com">usa-sales@vibrantmedia.com</a></p>
                  <p>&nbsp;</p>
                </div>
                <div class="two col">

                  <h3>EUROPE</h3>
                  <p>T: +44 (0) 207 074 0000
                    <br>
                    <a href="mailto:saleseurope@vibrantmedia.com" target="_blank">saleseurope@vibrantmedia.com</a></p>
                  <p>&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row single-accordion">
            <h2 class="accordion-title">
                    Support
                    <div class="tooltip-wrapper">
                        <div class="show-txt txt">
                            Open
                        </div>

                        <div class="hide-txt txt">
                            Close
                        </div>
                    </div>

                    <span class="icon-arrow-down"></span>
                </h2>
            <div class="text">
              <div class="row">
                <div class="two col">

                  <h3>USA</h3>
                  <div id="address_2">
                    <div id="address_2">T: +1 415 901-0125</div>
                    <div id="address_2"></div>
                  </div>
                </div>
                <div class="two col">

                  <h3>Europe</h3>
                  <p>T: +44 (0) 207 074 0000
                    <br>
                    <a href="mailto:intellitxtsupport@vibrantmedia.com" target="_blank">intellitxtsupport@vibrantmedia.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row single-accordion">
            <h2 class="accordion-title">
                    Global Press Contact
                    <div class="tooltip-wrapper">
                        <div class="show-txt txt">
                            Open
                        </div>

                        <div class="hide-txt txt">
                            Close
                        </div>
                    </div>

                    <span class="icon-arrow-down"></span>
                </h2>
            <div class="text">
              <div class="row">
                <div class="two col">

                  <h3>Helen Mussard</h3>
                  <p>T: +44 207 074 0144
                    <br>
                    <a href="mailto:helen.mussard@vibrantmedia.com" target="_blank">helen.mussard@vibrantmedia.com</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php endwhile; endif; ?>

<script>
  $(document).ready(function() {

      $start_address = $('.city-abbrv.active').data('address');

      $geocodeAPI = "https://maps.googleapis.com/maps/api/geocode/json?address=" + $start_address + "&key=AIzaSyBaKtt9Z2NKexSoE8C1sIXWxygAUfx8j84";
      $.getJSON($geocodeAPI, function(data) {
        $lat = data['results'][0]['geometry']['location'].lat;
        $lng = data['results'][0]['geometry']['location'].lng;

        $vibrant_pin.setMap(null);

        var image = 'http://www.vibrantmedia.com/wp-content/themes/vibrant-theme/library/images/vibrant_pin.png';
        var myLatLng = new google.maps.LatLng($lat, $lng);
        $vibrant_pin = new google.maps.Marker({
          position: myLatLng,
          map: $map,
          animation: google.maps.Animation.DROP,
          icon: image
        });

        $map.panTo(myLatLng);
      });


  });

</script>

<?php get_footer(); ?>
