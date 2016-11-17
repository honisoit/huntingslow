<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php get_template_part('templates/menu-tray'); ?>
    <div class="supra-wrapper">
      <div class="js-site-wrapper site-wrapper">
        <!--[if IE]>
          <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
          </div>
        <![endif]-->
        <div class="ad">
          <?php dynamic_sidebar('header-ad'); ?>
        </div>
        <?php include Wrapper\template_path(); ?>
        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
          wp_footer();
        ?>
      </div>
    </div>
  </body>
</html>
