<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robert_Tracey
 */

?>

<article id="post-<?php the_ID(); ?>" class="search-results-block">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="goldText"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			robert_tracey_posted_on();
			robert_tracey_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" class="button button__gold button_small">read more</a>
	</div>
</row>

</article><!-- #post-<?php the_ID(); ?> -->
