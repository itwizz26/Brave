<?php
// call site header
get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<?php

// Start the Loop.
while ( have_posts() ) :
	the_post();

	// get title
	$title = get_the_title();

	// consume api
	if ($title == 'Earthquake Catalog') {
		// call template
		require_once 'inc/earthquake-catalog-api.tpl';
	}
	else {

		get_template_part( 'template-parts/content/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}

endwhile; // End the loop.
?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
// call site footer
get_footer();
