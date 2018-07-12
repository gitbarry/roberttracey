<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Robert_Tracey
 */

?>

<!-- Block Logos -->
<div class="page-layer">
	<div class="container logo-block">
		<div class="row text-center">
		<div class="col-12 col-md-4">
			<img src="<?php echo get_template_directory_uri(); ?>/images/dormeuil-logo.png" alt="Dormeuil" class="dormeuil">
		</div>
		<div class="col-12 col-md-4">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo-holland.jpg" alt="Holland and Sherry" class="holland">
		</div>
		<div class="col-12 col-md-4">
			<img src="<?php echo get_template_directory_uri(); ?>/images/scabal-logo.jpg" alt="Scabal" class="scabal">
		</div>
	</div>
	</div>
</div>
</div><!-- #content -->


<!-- Appointment Block -->
<?php if(ls_content_block_by_id( 230 )) : ?>
	<div class="footer-top">
		<div class="container">
			<?php echo ls_content_block_by_id( 230 ); ?>
		</div>
	</div>
<?php endif; ?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">

				<div class="col col-12 col-sm-6 col-md-3">
					<div class="footer-box footer-box_menu">
					<h4>Wedding Hire</h4>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_wedding_items' ) ); ?>
					</div>
				</div>

				<div class="col col-12 col-sm-6 col-md-3">
					<div class="footer-box footer-box_menu">
						<h4>Evening Hire</h4>
						<?php wp_nav_menu( array( 'theme_location' => 'footer_evening_items' ) ); ?>
					</div>
				</div>

				<div class="col col-12 col-sm-6 col-md-3">
					<div class="footer-box">
						<h4>Pages</h4>
						<?php wp_nav_menu( array( 'theme_location' => 'footer_pages' ) ); ?>
					</div>
				</div>

				<div class="col col-12 col-sm-6 col-md-3">
					<div class="footer-box">
						<h4>Get in Touch</h4>
						<address>
						<p>127 High Street<br>
						Staines-upon-Thames<br>
						Middlesex<br>
						TW18 4PD</p>
						</address>
						<p>call: 01784 451584<br>
						email: <a href"mailto:sales@roberttracey.co.uk">sales@roberttracey.co.uk</a></p>
					</div>
				</div>

			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
