<section class="offered-services">
	<div class="wrapper">
		<?php if( get_sub_field('services_title') ): ?>
			<h2><?php the_sub_field('services_title'); ?></h2>
		<?php endif; ?>
		<ul class="service_description">
		<?php
			// loop through the rows of data
		while ( have_rows('services_description') ) : the_row();
		?>
		<li class="description">
			<?php if( get_sub_field('title') ): ?>
				<h3><?php the_sub_field('title'); ?></h3>
			<?php endif; ?>
			<?php if( get_sub_field('description') ): ?>
				<p><?php the_sub_field('description'); ?></p>
			<?php endif; ?>
		</li>
		<?php
		endwhile;
		?>
		</ul>
	</div>
</section>