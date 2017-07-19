<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <?php edit_post_link(); ?>
    <div class="loading-wrapper">
      <div class="single-img-header">
        <div class="container">
          <div class="row">
            <div class="feat-img nine col">
              <?php if ( has_post_thumbnail()) :?>
                  <?php the_post_thumbnail();  ?>
              <?php endif; ?>
            </div>
            <div class="meta three col">
              <div class="kudos" data-amount="0" data-url="<?php the_permalink(); ?>"></div>
              <!-- <div class="appreciate">

                                          <h5 id='vote_counter'>0</h5>


                      <a class="user_vote" data-nonce="8e3bc3d4bb" data-post_id="6531">
                          <h4 data-content="Appreciate">Appreciate</h4>
                      </a>


                  </div> -->
              <div class="categories">
                <ul>
                  <li><?php the_time('d F Y'); ?></li>
                </ul>
              </div>

              <div class="share">
<p>Share this page on <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=<?php the_permalink(); ?>/&amp;p[title]=<?php the_title(); ?>&amp;p[summary]=<?php wpeExcerpt('wpeExcerpt40'); ?>">Facebook</a> | <a target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>">Twitter</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <article  id="post-<?php the_ID(); ?>" <?php post_class('article single nine col'); ?>>
            <?php easy_breadcrumbs(); ?>

            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

          </article>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

  <?php endwhile; endif; ?>



<?php get_footer(); ?>
