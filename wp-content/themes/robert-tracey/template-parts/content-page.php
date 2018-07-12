<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robert_Tracey
 */

?>
<div class="container default_page_hero text-center">
<?php robert_tracey_post_thumbnail(); ?>
</div>
<!-- <p>Templates: content-page.php</p> -->
<div class="container page_default">
	<div class="row">
		<div class="col col-12 col-lg-12">
			<div class="page-header-wrapper text-center">
				<?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
			</div><!-- .entry-header -->
		<?php  the_content(); ?>
		</div>
	</div>
</div>
