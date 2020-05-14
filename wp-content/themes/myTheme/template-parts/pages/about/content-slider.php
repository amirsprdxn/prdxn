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
				<?php if( get_sub_field('description') ): ?>
					<p><?php the_sub_field('description'); ?></p>
				<?php endif; ?>
				<?php if( get_sub_field('image') ): ?>
					<img src="<?php the_sub_field('image'); ?>">
				<?php endif; ?>
				<?php if( get_sub_field('name') ): ?>
					<span><?php the_sub_field('name'); ?></span>
				<?php endif; ?>
				<?php if( get_sub_field('company_name') ): ?>
					<span><?php the_sub_field('company_name'); ?></span>
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