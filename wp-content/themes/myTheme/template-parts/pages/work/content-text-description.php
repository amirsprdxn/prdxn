<div class="work_detail_1">
	<?php if( get_sub_field('work_title') ): ?>
		<h3><?php the_sub_field('work_title'); ?></h3>
	<?php endif; ?>
	<?php
	// check if the repeater field has rows of data
	if( have_rows('work_description') ):
	 	// loop through the rows of data
	    while ( have_rows('work_description') ) : the_row();
		?>
		<?php if( get_sub_field('description_1') ): ?>
			<p><?php the_sub_field('description_1'); ?></p>
		<?php endif; ?>
		<?php
	    endwhile;
	else :
	    // no rows found
	endif;
	?>
</div>