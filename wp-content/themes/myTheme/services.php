<?php
/*
Template Name: Services Template
*/
get_header();
?>

<main id="site-content" role="main">
	<div id="primary">
    <?php
	// Check value exists.
	if( have_rows('prdxn_services') ):
	    // Loop through rows.
	    while ( have_rows('prdxn_services') ) : the_row();
	    	switch (get_row_layout()) {
	    		case 'services_layout':
						get_template_part('template-parts/pages/services/content','services');
	    			break;
	    		case 'detailed_services_layout':
						get_template_part('template-parts/pages/services/content','detailed-services');
	    			break;
	    		case 'tools_layout':
						get_template_part('template-parts/pages/services/content','tools');
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