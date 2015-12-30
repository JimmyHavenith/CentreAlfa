<?php get_header(); ?>
    <section>
      <div class="articles">
        <h2>News</h2>
        <?php query_posts($query_string . '&orderby=date&order=DESC'); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="article">
            <h3><?php the_title(); ?></h3>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        <?php endwhile; else: ?>
        <p class="error"><?php _e("Pas de news pour le moment !"); ?></p>
        <?php endif; ?>
      </div>
    </section>
<?php get_footer(); ?>
