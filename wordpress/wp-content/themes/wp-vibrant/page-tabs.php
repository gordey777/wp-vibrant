<?php /* Template Name: Tabs page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php edit_post_link(); ?>

<div class="loading-wrapper">
    <div class="container">
      <div class="row">



        <article  id="post-<?php the_ID(); ?>" <?php post_class('article twelve col img-header'); ?>>
          <div class="with-img">
            <?php easy_breadcrumbs(); ?>
            <div class="text eight col">
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
            </div>
            <div class="img eight col" <?php if ( has_post_thumbnail()) : ?> style="background-image: url('<?php echo the_post_thumbnail_url('medium'); ?>'); background-size: cover;"<?php endif ?>>
            </div>
          </div>
        </article>
      </div>


      <?php if( have_rows('tabs') ): ?>
        <?php  $tabs = get_field('tabs'); //var_dump($tabs);?>
        <?php $tab_count = count($tabs); ?>
        <?php $tab_width = (100 / $tab_count) . '%'; ?>


        <div class="row">
          <div id="tabs">

              <ul class="header-tabs">
                <?php $i = 1; ?>
                <?php while ( have_rows('tabs') ) : the_row(); ?>

                  <li class="col" style="width: <?php echo $tab_width ?>;">
                    <a href="#row-<?php echo $i; ?>">
                      <h2><?php the_sub_field('title'); ?></h2>
                      <h4><?php the_sub_field('subtitle'); ?></h4>
                    </a>
                  </li>
                  <?php $i++; ?>
                <?php  endwhile; ?>
              </ul>


          <?php $j = 1; ?>
          <?php while ( have_rows('tabs') ) : the_row(); ?>

            <div class="main-tabs" id="row-<?php echo $j; ?>">
              <div class="row">
                <article class="article eight col">
                  <?php the_sub_field('ccontent'); ?>
                </article>
                <div class="facts four col">
                  <p><?php the_sub_field('side_ccontent'); ?></p>
                </div>
              </div>
            </div>
            <?php $j++; ?>
          <?php  endwhile; ?>

          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>







  <?php endwhile; endif; ?>

<?php get_footer(); ?>
