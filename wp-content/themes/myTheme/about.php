<?php
/*
Template Name: About Template
*/
get_header();
?>

<main id="site-content" role="main">
	<div id="primary">
    <?php
	// Check value exists.
	if( have_rows('prdxn_about') ):
	    // Loop through rows.
	    while ( have_rows('prdxn_about') ) : the_row();
	    	switch (get_row_layout()) {
	    		case 'about_description_layout':
						get_template_part('template-parts/pages/about/content','about-description');
	    			break;
	    		case 'slider_layout':
						get_template_part('template-parts/pages/about/content','slider');
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