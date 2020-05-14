<section class="detailed-services">
	<div class="wrapper">
		<?php if( get_sub_field('service_title') ): ?>
			<h2><?php the_sub_field('service_title'); ?></h2>
		<?php endif; ?>
		<ul class="service_description">
		<?php
			// loop through the rows of data
		while ( have_rows('service_description') ) : the_row();
		?>
		<li class="description">
			<?php if( get_sub_field('title') ): ?>
				<h3><?php the_sub_field('title'); ?></h3>
			<?php endif; ?>
			<?php
				// loop through the rows of data
			while ( have_rows('description_text') ) : the_row();
			?>
				<?php if( get_sub_field('information') ): ?>
					<p><?php the_sub_field('information'); ?></p>
				<?php endif; ?>
			<?php
			endwhile;
			?>
		</li>
		<?php
		endwhile;
		?>
		</ul>
	</div>
</section>