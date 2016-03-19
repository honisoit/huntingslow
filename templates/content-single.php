<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div>
        <p>Identifier</p>
      </div>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div>
        <p>Standfirst for this particularly strong article about Adele's eye contact. Yes, yes it is. Think piece, now.</p>
      </div>
      <?php get_template_part('templates/entry-meta'); ?>
      <h4>Category<h4>
      <h4>Social Buttons</h4>
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
      } ?>
      <h4>Caption and Credit</h4>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php get_template_part('templates/commons-license'); ?>
    <?php get_template_part('templates/recommended-wide'); ?>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
