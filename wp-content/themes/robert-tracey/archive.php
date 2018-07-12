<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Robert_Tracey
 */

get_header();
?>

	<div id="primary" class="page-content">
		<main id="main" class="container">


<?php

$queried_object = get_queried_object();
$category_level = $queried_object->parent;
$category_title = $queried_object->name;
$category_id = $queried_object->cat_ID;
?>
<div class="page-header-wrapper text-center">
	<h2 class="page-title"><?php echo $category_title; ?></h2>
</div>

<!-- Get Top level intro content -->
<?php
if($category_id==3)
{
	echo '<div class="cat-intro-box">'.ls_content_block_by_id( 107 ).'</div>';
} elseif($category_id==4)
{
	echo '<div class="cat-intro-box">'.ls_content_block_by_id( 111 ).'</div>';
}
?>

<?php
// Get child categories
$term_id = $category_id;
$taxonomy_name = 'category';
$termchildren = get_term_children( $term_id, $taxonomy_name );

echo '<div class="row">';
foreach ( $termchildren as $child ) {
    $term = get_term_by( 'id', $child, $taxonomy_name );

		echo '<div class="col-12 col-lg-4 text-center category-block">';
			echo '<div class="category-block__controls">';
	    echo '<h3><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></h3>';
			echo '<div><a href="' . get_term_link( $child, $taxonomy_name ) . '" class="button button__gold">view range</a></div>';
			echo '</div>';
			if (function_exists('get_wp_term_image'))
				{
				 	$meta_image = get_wp_term_image($term->term_id);
				}
		echo "<a href='" . get_term_link( $child, $taxonomy_name ) . "'><img src='".$meta_image."' alt='".$term->name."'></a>";
		echo '</div>';
}
echo '</div>';

if($category_id==4)
{
	echo '<div class="cat-intro-box">'.ls_content_block_by_id( 142 ).'</div>';
}


if($category_level !=0) {
	$args = array(
	  'post_type' => 'clothing_items',
	  'posts_per_page' => 24,
	  'cat' => $category_id
	);

	//var_dump($args);

	$arr_posts = new WP_Query($args);
	if($arr_posts->have_posts() ) :
		?>
		<div class="row">
		<?php
	  while( $arr_posts->have_posts() ) :
	    $arr_posts->the_post();
			//var_dump($arr_posts);
	?>
	<div class="col-12 col-sm-6 col-md-4 col-lg-3 clothing-items-index text-center">
		<h3><a class="goldText" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    <?php
	      if( has_post_thumbnail() ) :
	        ?>
	        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
	        <?php
	      endif;
	  ?>
	  <p><a class="button button__gold" href="<?php the_permalink(); ?>">view item</a></p>
	</div>
	<?php endwhile; ?>
<div class="row">
	<?php
	// wp_pagenavi(array(
	//   'query' => $arr_posts,
	// ));

	else:
		echo "<h4 class='text-center'>We currently have no items in this section.</h4>";

	endif;

	wp_reset_postdata();

}

 ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
