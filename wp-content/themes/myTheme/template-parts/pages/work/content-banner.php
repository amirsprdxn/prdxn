<?php if( get_sub_field('image') ): ?>
	<div class="our_work" style="background-image: url(<?php the_sub_field('image'); ?>);">
		<?php if( get_the_title() ): ?>
			<h2><?php the_title(); ?></h2>
		<?php endif; ?>
		<?php if( get_sub_field('description') ): ?>
			<p><?php the_sub_field('description'); ?></p>
		<?php endif; ?>
	</div>
<?php endif; ?>