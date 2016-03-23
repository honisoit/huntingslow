<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <div class="main-column">
        <div class="reg-article__identifier">
          <a href="#">Identifier</a>
        </div>
      </div>
      <div class="main-column">
        <h1 class="reg-article__headline"><?php the_title(); ?></h1>
      </div>
      <div class="main-column">
        <div class="reg-article__standfirst">
          <p>Standfirst for this particularly strong article about Adele's eye contact. Yes, yes it is. Think piece, now.</p>
        </div>
      </div>
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="main-column">
        <div class="reg-article__single-column">
          <div class="reg-article__category">
            <h4>Category<h4>
          </div>
          <div class="reg-article__social-buttons">
            <div class="reg-article__social-buttons__title">
              <h4>Social Buttons</h4>
            </div>
            <div class="reg-article__social-button">
              <a href="#">fb</a>
            </div>
            <div class="reg-article__social-button">
              <a href="#">tw</a>
            </div>
            <div class="reg-article__social-button">
              <a href="#">em</a>
            </div>
          </div>
        </div>
        <div class="reg-article__featured-image">
          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail();
          } ?>
          <h4>Caption and Credit</h4>
        </div>
      </div>
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
