<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta name="google-site-verification" content="joIUiS4ph-wOIw7IAgnCCHQ1XdxSQRtysgzdHifiS0M" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php if(get_theme_mod('maisha_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod('maisha_favicon') ); ?>" />
	<?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.5&appId=626953684008106";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php if(get_theme_mod('maisha_header_layout') == 'standard-header') : ?>
	<div class="headerblock standard">
		<div class="content site-content">
			<a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<div class="header-inner">
				<?php if ( get_theme_mod( 'maisha_logo' ) ) : ?>
					<div class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'maisha_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					</div><!-- .site-logo -->
				<?php else : ?>
					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div><!-- .site-branding -->
				<?php endif; ?>
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<div id="secondary">
					<nav id="site-navigation" class="navigation-main" role="navigation">
					<button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					</div>
				<?php endif; ?>
				</div>
			</header><!-- .site-header -->
		</div><!-- .site-content -->
	</div><!-- .headerblock -->
	<?php if(!get_theme_mod('maisha_search_top')) : ?>
	<div class="search-toggle">
	  <a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php esc_html_e( 'Search', 'maisha' ); ?></a>
	</div>
	<div id="search-container" class="search-box-wrapper hide">
	  <div class="search-box">
		  <?php get_search_form(); ?>
	  </div>
	</div>
	<?php endif; ?>
<?php elseif(get_theme_mod('maisha_header_layout') == 'alternative-header') : ?>
	<div class="headerblock alternative site">
		<div class="content site-content">
			<a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
			<header id="masthead" class="site-header" role="banner">
				<?php if ( get_theme_mod( 'maisha_logo' ) ) : ?>
					<div class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'maisha_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
					</div><!-- .site-logo -->
				<?php else : ?>
					<div class="site-branding">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div><!-- .site-branding -->
				<?php endif; ?>
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<div id="secondary">
					<nav id="site-navigation" class="navigation-main" role="navigation">
					<button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					</div>
				<?php endif; ?>
			</header><!-- .site-header -->
		</div><!-- .site-content -->
	</div><!-- .headerblock -->
	<?php if(!get_theme_mod('maisha_search_top')) : ?>
	<div class="search-toggle">
	  <a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php esc_html_e( 'Search', 'maisha' ); ?></a>
	</div>
	<div id="search-container" class="search-box-wrapper hide">
	  <div class="search-box">
		  <?php get_search_form(); ?>
	  </div>
	</div>
	<?php endif; ?>
<?php else: ?>
	<div class="fixed">
		<div class="headerblock">
			<div class="content site-content">
				<a class="skip-link screen-reader-text" href="#site"><?php esc_html_e( 'Skip to content', 'maisha' ); ?></a>
				<header id="masthead" class="site-header" role="banner">
					<div class="header-inner">
					<?php if ( get_theme_mod( 'maisha_logo' ) ) : ?>
						<div class="site-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'maisha_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
						</div><!-- .site-logo -->
					<?php else : ?>
						<div class="site-branding">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div><!-- .site-branding -->
					<?php endif; ?>
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<div id="secondary">
						<nav id="site-navigation" class="navigation-main" role="navigation">
						<button class="menu-toggle anarielgenericon" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Primary Menu', 'maisha' ); ?></span></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
						</nav><!-- #site-navigation -->
						</div>
					<?php endif; ?>
					</div>
				</header><!-- .site-header -->
			</div><!-- .site-content -->
		</div><!-- .headerblock -->
		<?php if(!get_theme_mod('maisha_search_top')) : ?>
		<div class="search-toggle">
		  <a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php esc_html_e( 'Search', 'maisha' ); ?></a>
		</div>
		<div id="search-container" class="search-box-wrapper hide">
		  <div class="search-box">
			  <?php get_search_form(); ?>
		  </div>
		</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<div id="site">