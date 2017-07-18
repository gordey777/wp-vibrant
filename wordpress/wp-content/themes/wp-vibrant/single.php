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
              <div class="kudos fontelico-emo-shoot" data-amount="6" data-url="http://www.vibrantmedia.com/blog/tech-talk-thursday-3/" data-id="0" data-status="beta"></div>
              <!-- <div class="appreciate">
                  <h5 id='vote_counter'>0</h5>
                      <a class="user_vote" data-nonce="e8dcae63c4" data-post_id="6543">
                          <h4 data-content="Appreciate">Appreciate</h4>
                      </a>
                  </div> -->
              <div class="categories">
                <ul>
                  <li><?php the_time('d F Y'); ?></li>
                </ul>
              </div>

              <div class="share">
                <p>Share this page on <a target="_blank" href="#">Facebook</a> | <a target="_blank" href="#">Twitter</a></p>
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
