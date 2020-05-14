<div class="more_work">
	<?php if( get_sub_field('more_work_title') ): ?>
		<h3><?php the_sub_field('more_work_title'); ?></h3>
	<?php endif; ?>
	<?php
	$posts = get_sub_field('featured_work');
	if($posts) :
		foreach( $posts as $post):
		    setup_postdata($post);
		    ?>
		    <div class="work">
		    	<a href="<?php echo get_permalink( $post->ID ); ?>">
		    		<?php echo get_the_title( $post->ID ); ?>
	    		</a>
			</div>
			<?php
		endforeach;
		wp_reset_postdata();
	endif;
	?>
</div>