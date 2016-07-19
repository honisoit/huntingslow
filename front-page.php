<?php get_template_part('templates/large-header'); ?>
<div class="content-wrapper">
  <div class="home__row">
    <div class="home__feat-single-pane">
      <?php
      $args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => 'features' );

      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php
          if ( function_exists( 'coauthors_posts_links' ) ) {
            coauthors_posts_links();
          } else {
            the_author_posts_link();
          }
        ?>
        <p class="home__feat-single-pane__excerpt"><?php echo get_post_meta( get_the_id(), 'standfirst', true); ?></p>

        <hr>
      <?php endforeach;
      wp_reset_postdata();?>
    </div>
  </div>
</div>

<div class="content-wrapper">
  <div class="home__row">

  </div>
</div>

<div class="content-wrapper">
  <div class="home__row">

    <div class="home__headline-column">
        <?php
        $args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category_name' => 'news' );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          <hr>
        <?php endforeach;
        wp_reset_postdata();?>
      </ul>
    </div>

    <div class="home__10-pane-container">
      <div class="home__row">
        <div class="home__md-single-pane">
            <?php
            $args = array( 'posts_per_page' => 1, 'offset'=> 2, 'category_name' => 'culture' );

            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="home__md-single-pane__image">
                <?php the_post_thumbnail();?>
              </div>
              <div class="home__md-single-pane__copy">
            	   <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                 <?php
                   if ( function_exists( 'coauthors_posts_links' ) ) {
                     coauthors_posts_links();
                   } else {
                     the_author_posts_link();
                   }
                 ?>
                 <p class=""><?php echo get_post_meta( get_the_id(), 'standfirst', true); ?></p>
              </div>
            <?php endforeach;
            wp_reset_postdata();?>
        </div>
        <div class="home__popular-pane">
          <?php the_widget('Widget_Popular'); ?>
        </div>
      </div>
      <div class="home__row">
        <div class="home__md-single-pane">
          <p>
            Medium single pane
          </p>
          <?php
          $post = get_post(1);
          echo '<h3>'. $post->post_title .'</h3>';
          ?>
        </div>
        <div class="home__tip-off">
          <h4>Hit us with those sweet tip offs, yknow you want to</h4>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="content-wrapper">
  <div class="home__row">
    <div class="home__category-pane">
      <h2 class="home__category-title">Culture</h2>
      <div class="home__category-pane__featured">
        <?php
        $args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => 'culture' );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
          if ( has_post_thumbnail() ) {
              the_post_thumbnail();
          } ?>
          <h1 class="home__category-pane__featured-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php
            if ( function_exists( 'coauthors_posts_links' ) ) {
              coauthors_posts_links();
            } else {
              the_author_posts_link();
            }
          ?>
          <p class="home__feat-single-pane__excerpt"><?php echo get_post_meta( get_the_id(), 'standfirst', true); ?></p>

          <hr>
        <?php endforeach;
        wp_reset_postdata();?>
      </div>
      <div class="home__category-pane__list">
        <?php
        $args = array( 'posts_per_page' => 4, 'offset'=> 1, 'category_name' => 'culture' );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <p class="home__category-pane__primary-tag">
            <?php
              $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
              $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
              echo ucwords($primary_tag_array['name']);
            ?>
          </p>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          <hr>
        <?php endforeach;
        wp_reset_postdata();?>
      </div>
    </div>
    <div class="home__category-pane">
      <h2 class="home__category-title">Investigation</h2>
      <div class="home__category-pane__featured">
        <?php
        $args = array( 'posts_per_page' => 1, 'offset'=> 0, 'category_name' => 'investigation' );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail();
          } ?>
          <h1 class="home__category-pane__featured-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php
            if ( function_exists( 'coauthors_posts_links' ) ) {
              coauthors_posts_links();
            } else {
              the_author_posts_link();
            }
          ?>
          <p class="home__feat-single-pane__excerpt"><?php echo get_post_meta( get_the_id(), 'standfirst', true); ?></p>

          <hr>
        <?php endforeach;
        wp_reset_postdata();?>
      </div>
      <div class="home__category-pane__list">
        <?php
        $args = array( 'posts_per_page' => 4, 'offset'=> 1, 'category_name' => 'investigation' );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <p class="home__category-pane__primary-tag">
            <?php
              $primary_tag_id = get_post_meta( get_the_id(), 'primary_tag', true );
              $primary_tag_array = get_term_by( 'id', $primary_tag_id, 'post_tag', ARRAY_A);
              echo ucwords($primary_tag_array['name']);
            ?>
          </p>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          <hr>
        <?php endforeach;
        wp_reset_postdata();?>
      </div>
    </div>
  </div>
</div>
