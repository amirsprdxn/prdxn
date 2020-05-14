<div class="work_detail_2">
		<?php if( get_sub_field('work_title') ): ?>
			<h3><?php the_sub_field('work_title'); ?></h3>
		<?php endif; ?>
	<?php $position = get_sub_field('checkbox'); ?>

	<div class="work_content">
		<?php
		// check if the repeater field has rows of data
		if( have_rows('work_description') ):
		 	// loop through the rows of data
		    while ( have_rows('work_description') ) : the_row();
		    ?>
				<?php if( get_sub_field('description_1') ): ?>
					<p><?php the_sub_field('description_1'); ?></p>
				<?php endif; ?>
				<?php if ($position) : ?>
					<figure class="desc_image <?php echo $position[0]; ?>">
						<?php if( get_sub_field('description_image') ): ?>
							<img src="<?php the_sub_field('description_image'); ?>">
						<?php endif; ?>
					</figure>
				<?php endif; ?>
		        <?php
		    endwhile;
		else :
		    // no rows found
		endif;
		?>
	</div>
</div>