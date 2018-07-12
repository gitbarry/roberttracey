<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robert_Tracey
 */


if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<div class="breadcrumb-wrapper"><div class="container"><p id="breadcrumbs">','</p></div></div>
');
}
?>
<div class="container">


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <p>Template: content</p> -->



<div class="row">
	<div class="page-header-wrapper text-center">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="page-title">', '</h2>' );
		else :
			the_title( '<h2 class="page-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</div>
</div>


<!-- <p>Template is: content-panes.php</p> -->

<?php if ( get_post_type( get_the_ID() ) == 'clothing_items' ) : ?>

	<div class="row full-product-item">
		<div class="col-12 col-lg-9">
		<?php $image = get_field('main_image');
		if( !empty($image) ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="full-product-item__image" />
		<?php endif; ?>
		</div>
		<div class="col-12 col-lg-3">
			<?php the_content(); ?>
		</div>
	</div>

 <?php else: ?>
	 <div class="col-12">
 		<?php the_content(); ?>
 	</div>
<?php endif; ?>


</article><!-- #post-<?php the_ID(); ?> -->
</div>
