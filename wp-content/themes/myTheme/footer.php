			<!--footer section start-->
			<footer>
				<div class="wrapper">
					<?php get_template_part( 'template-parts/header-logo' ); ?>
					<?php get_template_part( 'template-parts/header-nav' ); ?>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social-menu',
							'container' => false,
							'menu_class' => 'social-links'
						));
					?>
				   	<?php if( get_theme_mod( 'footer_text_block') != "" ): ?>
			            <p>
			                <?php echo get_theme_mod( 'footer_text_block'); ?>
			            </p>
			        <?php endif; ?>
				</div>
			</footer>
			<!--footer section end-->
		</div>
	</body>
</html>