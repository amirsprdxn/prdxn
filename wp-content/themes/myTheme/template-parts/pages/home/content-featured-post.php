<?php $posts = get_sub_field('featured_post');
if ($posts) :
	foreach( $posts as $post):
	    setup_postdata($post);
	    ?>
	    <div class="film">
	   	<?php
		    while ( have_rows('our_work') ) : the_row();
			?>
		    <?php if( get_row_layout() == 'banner_layout' ): ?>
				<a class="work-post" href="<?php the_permalink(); ?>">
					<?php if( get_sub_field('image') ): ?>
				    	<div class="our_work" style="background-image: url(<?php the_sub_field('image'); ?>);">
							<?php if( get_the_title() ): ?>
								<h3><?php the_title(); ?></h3>
							<?php endif; ?>
							<?php if( get_sub_field('description') ): ?>
								<p><?php the_sub_field('description'); ?></p>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</a>
			<?php endif; ?>
			<?php
		    // End loop.
		    endwhile;
		?>
		</div>
		<?php
	endforeach;
	wp_reset_postdata();
endif;