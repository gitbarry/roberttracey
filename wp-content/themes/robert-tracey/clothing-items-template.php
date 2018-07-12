<?php
/**
  * Template Name: Clothing Items Template
	*
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
<p>This is the clothing-items-temlate!!</p>
	<div id="primary" class="page-content">

<?php
	the_content();



	// Get the child categories and create menu
	$parent_cat_arg = $catId;
	$parent_cat = get_terms('category',$parent_cat_arg);//category name

	foreach ($parent_cat as $catVal) {

	    $child_arg = array( 'hide_empty' => false, 'parent' => $catVal->term_id );
	    $child_cat = get_terms( 'category', $child_arg );

	    echo '<ul>';
	        foreach( $child_cat as $child_term ) {

	            echo '<li><a href="' . get_term_link( $child_term, $child_term->name ) . '">'.$child_term->name . '</a></li>'; //Child Category
	        }
	    echo '</ul>';

	}

 ?>


	</div><!-- #primary -->

<?php

get_footer();
