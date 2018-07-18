<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Robert_Tracey
 */

get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col-12">

			<section class="error-404 not-found text-center">
				<header class="page-header">
					<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'robert-tracey' ); ?></h2>
				</header><!-- .page-header -->

<p>&nbsp;</p>
					<p><?php esc_html_e( 'It looks like nothing was found at this location!', 'robert-tracey' ); ?></p>
					<p><a class="button button__gold" href="javascript:window.history.go(-1)">Go Back</a></p>

			</section><!-- .error-404 -->
			</div>
		</div>
	</div>

<?php
get_footer();
