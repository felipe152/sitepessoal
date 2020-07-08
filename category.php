<?php 
get_header('blog');
?>
<div class="container" style="margin-top: 10px">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
}
?>
	<div class="row">
		<h1><?php single_cat_title(); ?></h1>
		<p><?php echo category_description( ); ?> </p>
<?php	

	if ( have_posts() ) {
		$i = 0;
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-part/chamada-post', get_post_type() );
		}
		wordpress_pagination();
	} elseif ( is_search() ) {
?>
	<div class="no-search-results-form">
		<h2>sem resultado</h2>
	</div><!-- .no-search-results -->
<?php
	}
?>
	</div>
</div>
<?php get_footer(); ?>
