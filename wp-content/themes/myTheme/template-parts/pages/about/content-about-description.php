<section class="about">
	<div class="wrapper">
		<?php
		// check if the repeater field has rows of data
		if( have_rows('about_descripiton') ):
			?>
				<?php
			 	// loop through the rows of data
			    while ( have_rows('about_descripiton') ) : the_row();
				?>
				<?php $position = get_sub_field('text_direction'); ?>
				<div class="about_us <?php echo $position[0]; ?>">
					<?php if( get_sub_field('title') ): ?>
						<h2><?php the_sub_field('title'); ?></h2>
					<?php endif; ?>
					<?php while ( have_rows('prdxn_description') ) : the_row(); ?>
						<?php if( get_sub_field('description') ): ?>
							<p><?php the_sub_field('description'); ?></p>
						<?php endif; ?>
					<?php endwhile;	?>
				</div>
				<?php
			    endwhile;
				?>
			<?php
		else :
		    // no rows found
		endif;
		?>
	</div>
</section>