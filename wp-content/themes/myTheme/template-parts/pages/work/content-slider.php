<section class="slider">
	<div class="wrapper">
		<?php
		// check if the repeater field has rows of data
		if( have_rows('slider') ):
			?>
			<ul class="banner-slider">
			<?php
		 	// loop through the rows of data
		    while ( have_rows('slider') ) : the_row();
			?>
			<li class="slide">
			<?php if( get_sub_field('logo') ): ?>
				<img src="<?php the_sub_field('logo'); ?>">
			<?php endif; ?>
			</li>
			<?php
		    endwhile;
			?>
			</ul>
			<?php
		else :
		    // no rows found
		endif;
		?>
	</div>
</section>