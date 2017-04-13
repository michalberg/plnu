<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package Maisha
 * @since Maisha 1.0
 */
?>
	</div><!-- #site -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer">
			<div class="site-info">
				<div class="hfeed site">
					<div class="content site-content">
						<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
							<?php get_sidebar( 'footer' ); ?>
						<?php endif; ?>
						<div class="copyright">
						<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a><br />Tento web podléhá licenci <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons - Uveďte původ 4.0 Mezinárodní License</a> s výjimkou fotografií. Pro souhlas s jejich použitím nás kontaktujete. 

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29107954-12', 'auto');
  ga('send', 'pageview');

</script>

						<?php if( get_theme_mod( 'hide_copyright' ) == '') { ?>
						<?php
							/**
							 * Fires before the Maisha footer text for footer customization.
							 *
							 * @since Maisha 1.0
							 */
							do_action( 'maisha_credits' );
						?>
						<?php esc_attr_e('', 'maisha'); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"> <?php echo esc_textarea ( get_theme_mod( 'maisha_copyright', 'Maisha Theme by Anariel Design.' ) ); ?> </a>
						<?php } // end if ?>
						</div>
					</div><!-- .footerwidgets -->
				</div><!-- .site-info -->
			</div><!-- .page -->
		</div><!-- .footer -->
		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>
	</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>