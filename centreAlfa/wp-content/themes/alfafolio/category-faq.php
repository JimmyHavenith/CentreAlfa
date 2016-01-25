<?php get_header(); ?>
    <section>
      <div class="articles">
        <h2>Foire aux questions</h2>
      </div>
      <div class="banniere_faq">
      </div>
      <div class="articles">
        <?php query_posts($query_string . '&orderby=date&order=ASC'); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="article">
            <blockquote>
              <span>"</span><?php the_title(); ?><span>"</span>
            </blockquote>
            <p class="cite"><?php the_content(); ?></p>
          </div>
        <?php endwhile; else: ?>
        <p class="error"><?php _e("Désolé, il n'y a pas encore de contenu ;("); ?></p>
        <?php endif; ?>
      </div>
    </section>
<?php get_footer(); ?>
