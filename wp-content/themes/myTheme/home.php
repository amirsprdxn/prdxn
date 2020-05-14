<?php
/*
Template Name: Home Template
*/
get_header();
?>

<main id="site-content" role="main">
	<div id="primary">
    <?php
	// Check value exists.
	if( have_rows('prdxn_home') ):
	    // Loop through rows.
	    while ( have_rows('prdxn_home') ) : the_row();
	    	switch (get_row_layout()) {
	    		case 'banner_content':
						get_template_part('template-parts/pages/home/content','banner');
	    			break;
	    		case 'featured_content':
						get_template_part('template-parts/pages/home/content','featured-post');
	    			break;
	    	}
	    	  // End loop.
	    endwhile;
	// No value.
	else :
	    // Do something...
	endif;
	?>
	</div>
</main>
<?php get_footer(); ?>