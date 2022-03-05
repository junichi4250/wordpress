<?php
/*
Template Name: works
*/
?>
<?php get_header(); ?>
    <main id="wrapper" class="wrapper">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php if( function_exists("the_pagination") ) the_pagination(); ?>
<?php
$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 3,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);

if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
		get_template_part( 'content', get_post_format() );
	endwhile;
else:
	get_template_part( 'content', 'none' );
endif;

if ($the_query->max_num_pages > 1) {
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max(1, $paged),
		'total' => $the_query->max_num_pages
	));
}

wp_reset_postdata();
?>
<?php // ブログ記事を表示する end ?>
    </main>
<?php get_footer(); ?>
