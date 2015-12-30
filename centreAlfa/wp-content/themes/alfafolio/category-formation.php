<?php get_header(); ?>
    <section>
      <div class="articles">
        <h2>Service prévention - formation - accompagnement d'adultes relais</h2>
        <div class="iconS">
          <img src="http://localhost/centreAlfa/wp-content/uploads/2015/12/icon-formation.svg" alt="" width="250" height="153"/>
        </div>
        <?php query_posts($query_string . '&orderby=date&order=ASC'); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="article">
            <h3><?php the_title(); ?></h3>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
        <?php endwhile; else: ?>
        <p class="error"><?php _e("Désolé, il n'y a pas encore de contenu ;("); ?></p>
        <?php endif; ?>
      </div>
    </section>
<?php get_footer(); ?>
