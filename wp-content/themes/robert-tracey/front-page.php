<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robert_Tracey
 */

get_header();
?>
<!-- Mobile Version -->
<div class="hero-slider up-to-tablet">
<?php echo do_shortcode('[metaslider id="196"]'); ?>
</div>

<!-- Tablet Up Version -->
<div class="hero-slider tablet-up">
<?php echo do_shortcode('[metaslider id="144"]'); ?>
</div>

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="container">
				<div class="page-header-wrapper text-center">
					<h2 class="page-title page_home"><?php the_title(); ?></h2>
					<h4 class="page-sub-title">Bespoke Tailors - establised 1959</h4>
				</div>
				<article class="page-content-block">
					<?php the_content(); ?>
				</article>
			</div>
		<?php

		endwhile; // End of the loop.
		?>

		<?php
		if ( is_active_sidebar( 'home-layer-one' ) ) : ?>
		<?php //dynamic_sidebar( 'home-layer-one' ); ?>
		<?php endif; ?>
		<div class="page-layer page-layer_odd block__suit-hire">
			<div class="container text-center">
				<h2><?php the_field('two_block_panel_title'); ?></h2>
				<div class="row">

					<div class="col-12 col-md-6 page-block">
							<article class="block__wedding-hire block-home-cat">
								<?php
									$linkURL = get_field('two_block_panel_block_one_link_url');
									foreach($linkURL as $link) {
										$linkToSection = get_home_url()."/".$link->slug;
									}
								 ?>
								<a href="<?php echo $linkToSection; ?>">
									<?php $block_twin_image_one = get_field('two_block_panel_block_one_background_image');
									if( !empty($block_twin_image_one) ): ?>
										<img src="<?php echo $block_twin_image_one['url']; ?>" alt="<?php echo $block_twin_image_one['alt']; ?>" />
									<?php endif; ?>
								</a>
							<h3><a href="<?php echo $linkToSection; ?>"><?php the_field('two_panel_block_one_title'); ?></a></h3>
							<p><a href="<?php echo $linkToSection; ?>" class="button button__gold"><?php the_field('two_block_panel_block_one_button_value'); ?></a></p>
							</article>
					</div>

					<div class="col-12 col-md-6 page-block">
						<article class="block__wedding-hire block-home-cat">
							<?php
								$linkURL = get_field('two_block_panel_block_two_link_url');
								foreach($linkURL as $link) {
									$linkToSection = get_home_url()."/".$link->slug;
								}
							 ?>
							<a href="<?php echo $linkToSection; ?>">
								<?php $block_twin_image_one = get_field('two_block_panel_block_two_background_image');
								if( !empty($block_twin_image_one) ): ?>
									<img src="<?php echo $block_twin_image_one['url']; ?>" alt="<?php echo $block_twin_image_one['alt']; ?>" />
								<?php endif; ?>
							</a>
						<h3><a href="<?php echo $linkToSection; ?>"><?php the_field('two_block_panel_block_two_title'); ?></a></h3>
						<p><a href="<?php echo $linkToSection; ?>" class="button button__gold"><?php the_field('two_block_panel_block_two_button_value'); ?></a></p>
						</article>
					</div>

			</div>
			</div>
		</div>

<!-- Block Bespoke Tailors -->
<?php if(ls_content_block_by_id( 228 )) : ?>
	<div class="page-layer block__bespoke-tailors">
		<div class="container">
			<?php echo ls_content_block_by_id( 228 ); ?>
		</div>
	</div>
<?php endif; ?>

		<!-- Three Block -->
		<div class="page-layer page-layer_odd block__suit-hire">
			<div class="container text-center">
				<h2><?php the_field('three_block_panel_title'); ?></h2>
				<div class="row">

					<!-- Block One -->
					<div class="col-12 col-md-6 col-lg-4 page-block">
						<article class="block__made-to-measure block-home-cat block-home-cat-3-col">
							<a href="<?php echo get_field('three_block_panel_block_one_link_url'); ?>">
								<?php $block_three_image_one = get_field('three_block_panel_block_one_background_image');
								if( !empty($block_three_image_one) ): ?>
									<img src="<?php echo $block_three_image_one['url']; ?>" alt="<?php echo $block_three_image_one['alt']; ?>" />
								<?php endif; ?>
							</a>
						<h3><a href="<?php echo the_field('three_block_panel_block_one_link_url'); ?>"><?php the_field('three_panel_block_one_title'); ?></a></h3>
						<p><a href="<?php echo the_field('three_block_panel_block_one_link_url'); ?>" class="button button__gold"><?php the_field('three_block_panel_block_one_button_value'); ?></a></p>
					</article>
					</div>

					<!-- Block Two -->
					<div class="col-12 col-md-6 col-lg-4 page-block">
						<article class="block__made-to-measure block-home-cat block-home-cat-3-col">
							<a href="<?php echo get_field('three_block_panel_block_two_link_url'); ?>">
								<?php $block_three_image_two = get_field('three_block_panel_block_two_background_image');
								if( !empty($block_three_image_two) ): ?>
									<img src="<?php echo $block_three_image_two['url']; ?>" alt="<?php echo $block_three_image_two['alt']; ?>" />
								<?php endif; ?>
							</a>
						<h3><a href="<?php echo the_field('three_block_panel_block_two_link_url'); ?>"><?php the_field('three_panel_block_two_title'); ?></a></h3>
						<p><a href="<?php echo the_field('three_block_panel_block_two_link_url'); ?>" class="button button__gold"><?php the_field('three_block_panel_block_two_button_value'); ?></a></p>
					</article>
					</div>

					<!-- Block Three -->
					<div class="col-12 col-md-6 col-lg-4 page-block">
						<article class="block__made-to-measure block-home-cat block-home-cat-3-col">
							<a href="<?php echo get_field('three_block_panel_block_three_link_url'); ?>">
								<?php $block_three_image_three = get_field('three_block_panel_block_three_background_image');
								if( !empty($block_three_image_three) ): ?>
									<img src="<?php echo $block_three_image_three['url']; ?>" alt="<?php echo $block_three_image_three['alt']; ?>" />
								<?php endif; ?>
							</a>
						<h3><a href="<?php echo the_field('three_block_panel_block_three_link_url'); ?>"><?php the_field('three_block_panel_block_three_title'); ?></a></h3>
						<p><a href="<?php echo the_field('three_block_panel_block_three_link_url'); ?>" class="button button__gold"><?php the_field('three_block_panel_block_three_button_value'); ?></a></p>
					</article>
					</div>

			</div>
			</div>
		</div>
<?php
get_footer();
