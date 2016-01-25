<?php get_header(); ?>
  <div class="articles">
    <?php if ( have_posts() ) : ?>
    <h2>
      <?php echo $wp_query->found_posts; ?><?php _e(' résultats trouvés pour'); ?> : <span class="page_recherche-mot">"<?php the_search_query(); ?>"</span>
    </h2>
  </div>
  <div class="banniere_search">
  </div>
  <div class="articles">
    <section class="page_recherche">
      <?php while ( have_posts() ) : the_post(); ?>
        <ul>
          <li>
            <?php
            $categories = get_the_category();
            foreach( $categories as $category ):?>
              <a title="<?php echo $category->name; ?>" href="<?php bloginfo('wpurl'); ?>/category/<?php echo $category->slug; ?>">voir l'article</a>
            <?php endforeach; ?>
            </br></br>
            <span><?php the_title(); ?></span>
          </li>
        </ul>
      <?php endwhile; ?>
      <?php the_posts_pagination( array(
        'screen_reader_text' => ' ',
        'prev_text'          => __( 'Page précédente', '' ),
        'next_text'          => __( 'Page suivante', '' ),
      ) ); ?>
      <?php else : ?>
        <h2 class="search-title">
          <?php echo $wp_query->found_posts; ?> <?php _e(' résultat trouvé pour'); ?> : "<?php the_search_query(); ?>"
        </h2>
      <?php endif; ?>
    </section>
  </div>
<?php get_footer(); ?>
