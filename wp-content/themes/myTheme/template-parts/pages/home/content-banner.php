<section class="banner" style="background-image: url(<?php the_sub_field('banner_image'); ?>);">
	<div class="wrapper">
	<?php if( get_sub_field('title') ): ?>
		<h1><?php the_sub_field('title'); ?></h1>
	<?php endif; ?>
	</div>
</section>