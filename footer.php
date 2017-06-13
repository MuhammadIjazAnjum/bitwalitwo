<?php

 
?>

	

		
		</div> <!-- .row -->
			<footer>
				<div>
					footer	tag
					<?php get_template_part('footer','widgets')?>
					get_theme_file_
				</div>
				
				<?php if (has_nav_menu('footer')) :?>
					<nav>
						<?php
								wp_nav_menu( array(
									'theme_location' => 'footer',
									
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' ,
								) );
							?>
					</nav>
				<?php endif;?>
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'http://bitwali.com/', 'bitwalitwo' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'bitwalitwo' ), 'BitWali' ); ?></a>
					</div>				
			</footer>
		
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>
