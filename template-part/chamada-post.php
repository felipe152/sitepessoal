<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'post-principal' ); ?>
<article <?php post_class('col s12 m4'); ?> id="post-<?php the_ID(); ?>">
	<div>
		<a href="<?php echo get_permalink(get_the_ID()) ?>"><img width="100%" src="<?php echo $image[0]; ?>" alt=""></a>
	</div>
	<h2><?php echo get_the_title() ?></h2>
	<p><?php echo get_the_excerpt(); ?></p>
</article><!-- .post -->