<?php
/**
 * The header for our theme
 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> classsfdsfdsfsf="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body >
	<div id="page" >
		<div style="background-color:pink">

			<?php the_custom_header_markup(); ?>
			<?php bloginfo( 'name' ); ?>
				
			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
			<div class="navigation-top">
				<div class="wrap">
					<nav id="site-navigationqq" class="main-navigation">
						<?php if (has_nav_menu('header')) {
							wp_nav_menu( 
								array( 
								'theme_location' => 'header',
								'menu_id'        => 'header-menu', 
								) 
							);
							
						}  ?>
					</nav>
				</div>

			</div>
			
			
		</div>
		
		<div class="row" style="background-color:red;padding:30px;">
			
		
		
