<?php
/*
Template Name: Work Template
*/
get_header();
?>

<main id="site-content" role="main">
	<div id="primary">
    <?php
	// Check value exists.
	if( have_rows('prdxn_work') ):
	    // Loop through rows.
	    while ( have_rows('prdxn_work') ) : the_row();
	    	switch (get_row_layout()) {
	    		case 'work_content':
						get_template_part('template-parts/pages/work/content','work');
	    			break;
	    		case 'slider_content':
						get_template_part('template-parts/pages/work/content','slider');
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