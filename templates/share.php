<?php
  // based on guide here:
  // http://crunchify.com/how-to-create-social-sharing-button-without-any-plugin-and-script-loading-wordpress-speed-optimization-goal/

  // Get current page URL
	$contentURL = get_permalink();

	// Get current page title
	$contentTitle = str_replace( ' ', '%20', get_the_title());

	// Get Post Thumbnail for pinterest
	$crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

	// Construct sharing URL without using any script
	$twitterURL = 'https://twitter.com/intent/tweet?text='.$contentTitle.'&amp;url='.$contentURL.'&amp;via=Honi_Soit';
	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$contentURL;

?>
<ul class="share__buttons">
  <li class="share__button">
      <a href="<?php echo $facebookURL; ?>" class="share__logo share__logo--fb">
        <svg class="share__svg" viewBox="4 1 20 25"><path d="M17.9 14h-3v8H12v-8h-2v-2.9h2V8.7C12 6.8 13.1 5 16 5c1.2 0 2 .1 2 .1v3h-1.8c-1 0-1.2.5-1.2 1.3v1.8h3l-.1 2.8z"></path></svg>
      </a>
  </li>
  <li class="share__button">
    <a href="<?php echo $twitterURL; ?>" class="share__logo share__logo--tw">
        <svg class="share__svg" viewBox="4 1 20 25"><path d="M21.3 10.5v.5c0 4.7-3.5 10.1-9.9 10.1-2 0-3.8-.6-5.3-1.6.3 0 .6.1.8.1 1.6 0 3.1-.6 4.3-1.5-1.5 0-2.8-1-3.3-2.4.2 0 .4.1.7.1l.9-.1c-1.6-.3-2.8-1.8-2.8-3.5.5.3 1 .4 1.6.4-.9-.6-1.6-1.7-1.6-2.9 0-.6.2-1.3.5-1.8 1.7 2.1 4.3 3.6 7.2 3.7-.1-.3-.1-.5-.1-.8 0-2 1.6-3.5 3.5-3.5 1 0 1.9.4 2.5 1.1.8-.1 1.5-.4 2.2-.8-.3.8-.8 1.5-1.5 1.9.7-.1 1.4-.3 2-.5-.4.4-1 1-1.7 1.5z"></path></svg>
    </a>
  </li>
</ul>
