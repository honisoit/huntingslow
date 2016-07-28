<div class="content-wrapper">
  <div class="page">
    <aside class="page__links-column">
      <?php
          wp_nav_menu( array(
              'menu'              => 'footer_pages',
              'theme_location'    => 'footer_pages',
              'walker'            => new Footer_Menu_Walker,
              'items_wrap'        => '<ul class="page__list">%3$s</ul>'
            )
          );
      ?>
    </aside>
    <article class="page__content-column">
      <?php get_template_part('templates/page', 'header'); ?>
      <?php the_content(); ?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </article>
  </div>
</div>
