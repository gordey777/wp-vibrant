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


        <div class="four col clocks">
          <?php if( have_rows('adresses') ): ?>
            <div class="clock-nav">
              <ul>
                <?php $i = 0;
                while ( have_rows('adresses') ) : the_row();
                  $active___class = '';
                  if ($i == 0){
                  $active___class = 'active';
                  } ?>
                  <li class="city-abbrv <?php echo $active___class; ?>" data-address="<?php the_sub_field('map_adress'); ?>">
                    <?php the_sub_field('tab_title'); ?>
                  </li>
                <?php $i++;
                endwhile; ?>
              </ul>
            </div>
            <div class="clock-main">
              <?php while ( have_rows('adresses') ) : the_row(); ?>
                <div data-timezone="<?php the_sub_field('time_zone'); ?>" class="city gallery-cell twelve col">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <div class="clock-face four col">
                    <div class="clock">
                      <div class="hand hour"></div>
                      <div class="hand minute"></div>
                    </div>
                    <p class="time">00:00</p>
                  </div>
                  <div class="text six col">
                    <?php the_sub_field('cont_adress'); ?>
                  </div>
                </div>
              <?php  endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="row">
        <div id="map-canvas" class="twelve col"></div>
      </div>

      <?php if( have_rows('accordion') ): ?>
        <div class="row">
          <div class="accordion-wrapper">

            <?php while ( have_rows('accordion') ) : the_row(); ?>
              <div class="row single-accordion">
                <h2 class="accordion-title">
                  <?php the_sub_field('title'); ?>
                  <div class="tooltip-wrapper">
                      <div class="show-txt txt">Open</div>
                      <div class="hide-txt txt">Close</div>
                  </div>
                  <span class="icon-arrow-down"></span>
                </h2>
                <div class="text">

                  <?php if(get_sub_field('accordion_item')) { ?>
                    <div class="row ">
                      <?php
                      $j = 0;
                      while(has_sub_field('accordion_item')) { ?>
                        <?php $image = get_sub_field('icon'); ?>
                        <div class="two col">
                          <?php if ( !empty($image)) : ?>
                            <img class="img-location" src="<?php echo $image['url']; ?>">
                          <?php endif; ?>

                          <h3><?php the_sub_field('subtitle'); ?></h3>
                          <p><?php the_sub_field('subcontent'); ?></p>
                        </div>
                        <?php if ( (( $j + 1) % 6) == 0 ){ ?>
                          <div class="clearfix"></div>
                        <?php }
                        $j++;
                      } ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            <?php  endwhile; ?>

          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>


  <?php endwhile; endif; ?>

<script>


</script>

<?php get_footer(); ?>
