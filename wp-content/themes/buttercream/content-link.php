<?php
/**
 * The template used for displaying link content
 *
 * @package Buttercream
 * @since Buttercream 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php edit_post_link( __( 'Edit', 'buttercream' ) , '', ''); ?>
		<div class="entry-meta">
			<?php buttercream_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="link-entry-content">
		<?php the_content(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->