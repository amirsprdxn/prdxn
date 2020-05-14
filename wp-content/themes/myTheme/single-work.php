<?php
get_header();
?>
<main id="main">
	<section class="work">
		<?php
			if (have_rows('our_work')) :
				while ( have_rows('our_work') ) : the_row();
					switch (get_row_layout()) {
						case 'banner_layout':
							get_template_part('template-parts/pages/work/content','banner');
							break;
						case 'text_description':
							get_template_part('template-parts/pages/work/content','text-description');
							break;
						case 'image_description':
							get_template_part('template-parts/pages/work/content','image-description');
							break;
						case 'more_work':
							get_template_part('template-parts/pages/work/content','more-work');
							break;
					}
				endwhile;
			endif;
		?>
	</section>
</main>
<?php
get_footer();
?>
