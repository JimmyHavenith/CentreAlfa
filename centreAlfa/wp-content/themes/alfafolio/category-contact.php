<?php get_header(); ?>
  <section>
    <div class="articles">
      <h2>Contact</h2>
    </div>
    <div class="banniere_contact">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316.2603936305497!2d5.575689834744543!3d50.644146894591195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa0e97e3d229%3A0x1a31a122095b1b3e!2sRue+de+la+Madeleine+17%2C+4000+Li%C3%A8ge%2C+Belgique!5e0!3m2!1sfr!2sfr!4v1444582286768" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="articles">
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
