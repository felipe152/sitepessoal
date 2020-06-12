<?php 
get_header('blog');
?>
<div class="container" style="margin-top: 10px">
	<div class="row">
<?php
	if ( have_posts() ) {
		$i = 0;
		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr />';
			}
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
