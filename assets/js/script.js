$(window).load(function() {
  $('body').addClass('loaded');
});

$(document).ready(function() {


  $lang = $.cookie('language');

  if ($lang == undefined) {
    $userLang = navigator.language || navigator.userLanguage;
    $url = window.location.href;
    if ($userLang.indexOf("US") <= 0) {
      if ($url.indexOf("/de/") >= 0) {
        $.cookie('language', 'de', {
          expires: 7
        });
      } else {
        $.cookie('language', 'en', {
          expires: 7
        });
      }
    } else {
      $.cookie('language', 'us', {
        expires: 7
      });
    }
    $lang = $.cookie('language');
    //Find language - this is a new user
    /* $.getJSON("https://www.telize.com/geoip", function( response ) {
            //Get language(s)
            $langauges = response.country_code;
            //Get current url
            $url = window.location.href;

            if ($langauges.indexOf("US") >= 0){
              $.cookie('language', 'us', { expires: 7 });
            } else {
              if ($langauges.indexOf("GB") >= 0){
                    $.cookie('language', 'en', { expires: 7 });
                    if ($url.indexOf("/en/") >= 0){
                        //Do Nothing
                    } else {
                        $redirectURL = "vibrantmedia.com/en/";
                        $redirectURL = $url.replace("vibrantmedia.com/",$redirectURL);
                        window.location.replace($redirectURL);
                    }
              } else {
                  if ($langauges.indexOf("DE") >= 0){
                        $.cookie('language', 'de', { expires: 7 });
                        if ($url.indexOf("/de/") >= 0){
                            //Do Nothing
                        } else {
                            $redirectURL = "vibrantmedia.com/de/";
                            $redirectURL = $url.replace("vibrantmedia.com/",$redirectURL);
                            window.location.replace($redirectURL);
                        }
                  } else {
                      $.cookie('language', 'us');
                  }
              }
            }

            $lang = $.cookie('language');
        });*/

  } else {
    //This person has been here before and has a language
    if ($lang != "US") {
      //Redirect to desired language if /en/ or /de/ isn't in url
      //Get current url
      $url = window.location.href;

      if ($lang == "GB") {
        if ($url.indexOf("/en/") >= 0) {
          //Do Nothing
        } else {
          $redirectURL = "vibrantmedia.com/en/";
          $redirectURL = $url.replace("vibrantmedia.com/", $redirectURL);
          window.location.replace($redirectURL);
        }
      } else {
        if ($lang == "DE") {
          if ($url.indexOf("/de/") >= 0) {
            //Do Nothing
          } else {
            $redirectURL = "vibrantmedia.com/de/";
            $redirectURL = $url.replace("vibrantmedia.com/", $redirectURL);
            window.location.replace($redirectURL);
          }
        }
      }
    } else {
      //Language is US doesn't need to do anything
    }
  }

  //Remove cookie law bar if not en
  var url = window.location.href;
  if ((url.indexOf("/en/") >= 1) || (url.indexOf("/de/") >= 1)) {
    $('body').addClass('is_en');

    //Ghostery Inc tag
    //cid: 179
    //pid: 1830

    (function() {
      var hn = document.createElement('script');
      hn.type = 'text/javascript';
      hn.async = true;
      hn.setAttribute('data-ev-hover-pid', 1830);
      hn.setAttribute('data-ev-hover-ocid', 179);
      hn.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'c.betrad.com/geo/h1.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(hn, s);
    })();
  } else {
    $('body').addClass('not_en');
    $('.cookies-msg').hide();
    $('.cookies-msg').remove();
  }


  //Remove cookie bar when click accept
  $('#cookie-law-info-bar a').click(function(event) {
    event.preventDefault();
    $('#cookie-law-info-bar').hide();
  });



  //Homepage mission slider init
  $('.mission-sldr').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 10000
  });

  //Homepage products slider init
  $('.product-sldr').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 12000
  });

  //Trophy Cabinet slider init
  $('.trophy-cabinet').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 8000
  });

  //Soclial sliders init
  $('.twitter-sldr').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 8000
  });

  //Facebook slider init
  $('.facebook-sldr').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 8000
  });

  //Testimonials slider
  $('.testimonials-sldr').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 10000
  });

  //Careers Facts
  $('.facts-module').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    pageDots: false,
    autoPlay: 5000
  });

  //Careers Full Width Slider
  var $full_slider = $('.full-slider').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 7000
  });

  $('.nav-link').click(function() {
    var index = $(this).index();
    $full_slider.flickity('select', index);
    $('.nav-link').removeClass('active');
    $(this).addClass('active');
  });

  $('.full-slider').on('settle', function() {
    $this = $(this);
    $index = $this.find($('.is-selected')).index() + 1;

    $('.nav-link').removeClass('active');
    $('.nav-link:nth-child(' + $index + ')').addClass('active');

    console.log($index.index());
  });

  //People slider
  $('.people-module').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 6000
  });

  //History - Years Slider
  var $timeline = $('.timeline').flickity({
    //asNavFor: '.year',
    prevNextButtons: false,
    pageDots: false,
  });

  var $year = $('.year').flickity({
    prevNextButtons: false,
    pageDots: false,
    draggable: false,
  });

  //Remove drag because it wasn't working well
  /*$('.timeline').on( 'settle', function() {
      var selected = $( ".is-selected" );
      var index = $( ".gallery-cell" ).index( selected );
      $( ".gallery-cell" ).removeClass('is-nav-selected');
      $( ".is-selected" ).addClass('is-nav-selected');
      $year.flickity( 'select', index );
      console.log(index);
  });*/

  $timeline.on('staticClick', function(event, pointer, cellElement, cellIndex) {
    // dismiss if cell was not clicked
    if (!cellElement) {
      return;
    }

    $timeline.find('.is-clicked').removeClass('is-clicked');
    $(cellElement).addClass('is-clicked');
    $(".gallery-cell").removeClass('is-nav-selected');
    $(cellElement).addClass('is-nav-selected');

    ////var selected = $( ".is-selected" );
    ////var index = $( ".gallery-cell" ).index( selected );
    $year.flickity('select', cellIndex);
    $timeline.flickity('select', cellIndex);
  });

  //Case Study Header
  $('.cs-img-header').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    autoPlay: 6000
  });

  //time-zone slider
  var $timezone_sldr = $('.clock-main').flickity({
    contain: true,
    wrapAround: true,
    prevNextButtons: false,
    pageDots: false,
    draggable: false
  });

  $('.city-abbrv').click(function() {
    var index = $(this).index();
    $timezone_sldr.flickity('select', index);
    $('.city-abbrv').removeClass('active');
    $(this).addClass('active');
  });

  $('.city').each(function() {
    $this = $(this);
    $timezone = $this.data('timezone');

    $GMT = moment();
    $localTime = $GMT.tz($timezone);

    $formattedTime = $localTime.format('hh:mm a');
    $this.find('.time').html($formattedTime);

    $startTime = new Date($localTime.format('YYYY'), $localTime.format('M') - 1, $localTime.format('DD'), $localTime.format('hh'), $localTime.format('mm'), $localTime.format('ss'));
    $startS = $startTime.getSeconds();
    $startM = $startTime.getMinutes() * 60 + $startS;
    $startH = $startTime.getHours() % 12 * 3600 + $startM;

    refreshClock();

    // compute the rotation amount relative to the starting time
    function refreshClock() {
      $now = new Date($localTime.format('YYYY'), $localTime.format('M') - 1, $localTime.format('DD'), $localTime.format('hh'), $localTime.format('mm'), $localTime.format('ss'));
      $diff = Math.round(Math.abs($now.getTime() - $startTime.getTime()) / 1000);
      $degS = ($startS + $diff) / 60 * 360;
      $degM = ($startM + $diff) / 3600 * 360;
      $degH = ($startH + $diff) / 43200 * 360;

      $this.find('.hour').css(rotate($degH));
      $this.find('.minute').css(rotate($degM));
      $this.find('.second').css(rotate($degS));

      setTimeout(refreshClock, 1000);
    }

    // compute the time difference between two date objects (in seconds)
    function timeDifference(date1, date2) {
      return Math.round(Math.abs(date2.getTime() - date1.getTime()) / 1000);
    }

    // returns the cross-browser css rotation properties
    function rotate(deg) {
      return {
        '-webkit-transform': 'rotate(' + deg + 'deg)',
        '-moz-transform': 'rotate(' + deg + 'deg)',
        '-ms-transform': 'rotate(' + deg + 'deg)',
        '-o-transform': 'rotate(' + deg + 'deg)',
        'transform': 'rotate(' + deg + 'deg)'
      };
    }
  });

  //Home user type buttons
  $('.home-btns .hvr-btn').hover(
    function() {
      $('.home-btns .hvr-btn').removeClass('green');
      $('.home-btns .hvr-btn').addClass('grey');
      $(this).addClass('green');
      $(this).removeClass('grey');
      $user_type = $(this).data('type');

      $('.hvr-img').removeClass('active');
      $('.hvr-img.' + $user_type).addClass('active');
    },
    function() {
      //Do nothing on out
    }
  );

  //search button
  $('.search-btn .text').click(function() {
    $('body').toggleClass('search-active');
  });

  //Isotope for leadership
  var $container = $('#leadership');
  //var $container2 = $('#descriptions');
  // initialize
  $container.isotope({
    itemSelector: '.item',
  });
  //$container2.isotope({
  //  itemSelector: '.person',
  //});

  // filter items on button click
  $('#filter .filter').click(function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({
      filter: filterValue
    });
    $container2.isotope({
      filter: filterValue
    });

    $('.filter').removeClass('active');
    $(this).addClass('active');
  });

  //Isotope for case studies
  $('#case_studies').isotope({
    itemSelector: '.item',
  });

  $('#cs-filters .filter').click(function() {
    var filterValue = $(this).attr('data-filter');
    $('#case_studies').isotope({
      filter: filterValue
    });

    $('.filter').removeClass('active');
    $(this).addClass('active');
  });

  //tabs
  $('#tabs').responsiveTabs({
    startCollapsed: 'accordion'
  });


  //Google Map
  if ($('body').hasClass('contact-us') == true) {
    //Google Map

    function initialize() {
      var styles = [{
        "featureType": "water",
        "stylers": [{
          "color": "#545454"
        }]
      }, {
        "featureType": "landscape.man_made",
        "stylers": [{
          "color": "#232323"
        }]
      }, {
        "featureType": "landscape.natural.terrain",
        "stylers": [{
          "color": "#313131"
        }]
      }, {
        "featureType": "poi.park",
        "stylers": [{
          "color": "#313131"
        }]
      }, {
        "featureType": "road.arterial",
        "stylers": [{
          "color": "#0c0c0c"
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#0c0c0c"
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#515151"
        }]
      }, {
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#b8d62f"
        }]
      }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
          "color": "#222222"
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#626f2c"
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#768531"
        }]
      }, {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [{
          "color": "#b8d62f"
        }]
      }, {
        "featureType": "transit.station",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#2e2e2e"
        }]
      }, {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#2e2e2e"
        }]
      }, {
        "elementType": "labels",
        "stylers": [{
          "visibility": "simplified"
        }]
      }, {
        "featureType": "landscape.natural",
        "stylers": [{
          "color": "#313131"
        }]
      }]
      var styledMap = new google.maps.StyledMapType(styles, {
        name: "Styled Map"
      });

      var url = window.location.href;




      var countryLat = "0";
      var countryLng = "0";



      var mapOptions = {
        zoom: 15,
        disableDefaultUI: true,
        center: new google.maps.LatLng(countryLat, countryLng),
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
      };

      $map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      $map.mapTypes.set('map_style', styledMap);
      $map.setMapTypeId('map_style');


      var image = 'http://www.vibrantmedia.com/wp-content/themes/vibrant-theme/library/images/vibrant_pin.png';
      var myLatLng = new google.maps.LatLng(countryLat, countryLng);
      $vibrant_pin = new google.maps.Marker({
        position: myLatLng,
        map: $map,
        animation: google.maps.Animation.DROP,
        icon: image
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    //On click change map
    $('.city-abbrv').click(function() {
      $this = $(this);
      $address = $this.data('address');
      $address = $address.replace('Vibrant Media Inc.', '');
      $address = $address.replace('Vibrant Media Ltd.', '');
      $address = $address.split('T:')[0]

      $geocodeAPI = "https://maps.googleapis.com/maps/api/geocode/json?address=" + $address + "&key=AIzaSyBaKtt9Z2NKexSoE8C1sIXWxygAUfx8j84";
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



  }


  //On accordion click
  $('.accordion-title').click(function() {
    $this = $(this).parent('.single-accordion');
    if ($this.hasClass('active') == true) {
      $this.removeClass('active');
      $('.single-accordion').removeClass('active');
    } else {
      $('.single-accordion').removeClass('active');
      $this.addClass('active');
    }

  });

  //Our Solutions - Single
  $('.product-cat').click(function() {
    $this = $(this);
    if ($this.hasClass('active') == true) {
      $this.removeClass('active');
    } else {
      $this.addClass('active');
    }

    $filter = $this.data('filter');

    if ($this.hasClass('active') != true) {
      $('.single-product.' + $filter).removeClass('active');
    } else {
      $('.single-product.' + $filter).addClass('active');
    }
  });


  //Our Solutions - make height same on static items
  if ($('body').hasClass('our-solutions') == true) {
    $heightArray = [];

    $('.product-suite').each(function() {
      $heightArray.push($(this).height());
    });

    $('.product-suite').each(function() {
      $(this).height(Math.max.apply(Math, $heightArray));
    });
  }


  /*Kudos in single page*/
  new KudosPlease({
    el: '.kudos',
    duration: 1500,
    persistent: true,
    status: {
      alpha: 'fontelico-emo-shoot',
      beta: 'fontelico-emo-shoot',
      gamma: 'fontelico-emo-beer'
    }
  });


  /*GORD NAV*/

  if ($(window).width() > 570) {


    $('.menu li .sub-menu:before').mouseover(
      function() {
        $('li .sub-menu').removeClass('hover__item');
      }
    );

    $('.menu li').mouseover(
      function() {
        var $thisItem = $(this);

        $thisItem.siblings('.menu-item-has-children').children('.sub-menu').removeClass("hover__item");
        if ($thisItem.hasClass('menu-item-has-children')) {
          $('.hvr-menu').addClass('active-hvr');
        } else {
          $('.hvr-menu').removeClass('active-hvr');
        }
        $thisItem.children('.sub-menu').addClass('hover__item');

      }
    );

    $('.menu li .sub-menu li').mouseover(
      function() {
        var $thisSubitem = $(this);
        $thisSubitem.siblings('li').removeClass('hover__subitem');

        $thisSubitem.addClass('hover__subitem');
      }
    );


    $('.hvr-exit').mouseover(
      function() {
        $('.hvr-menu').removeClass('active-hvr');
        $('.menu li .sub-menu').removeClass("hover__item")
      }
    );
  }
      //Open mobile menu
  $('.mobile-menu-btn').click(function() {
    $this = $(this);
    $this.find('.lines-button').toggleClass('close');
    $('body').toggleClass('menu-open');
  });


  $('.more.icon').click(function() {
    $this = $(this);
    $this.toggleClass('active');

    $this.siblings('.sub-menu').toggleClass('active');
    $this.parent('li').siblings().children('.sub-menu').removeClass('active');
    $this.parent('li').siblings().children('.more.icon').removeClass('active');
  });
  // $('.child-page').mouseover(
  //     function(){
  //         $this = $(this);
  //         $('.child-page').removeClass('active');
  //         $this.addClass('active');

  //         $pageSlug = $this.data('page');
  //         $('.uber-img').removeClass('active');
  //         $('.uber-img.'+$pageSlug).addClass('active');
  //     }
  // );


});
