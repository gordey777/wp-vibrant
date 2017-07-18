<?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class('looper entry twelve col'); ?>>
            <div class="meta two col">
              <p><?php the_time('j F Y'); ?></p>
              <p><?php the_category(', '); ?></p>
            </div>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <div class="title ten col">
                <h2 class="eight col"><?php the_title(); ?></h2>
              </div>
            </a>
          </div><!-- /looper -->
<?php endwhile; endif; ?>
