<?php get_header('blog'); ?>
<?php global $wp; ?>
<main class="container" itemscope itemtype="https://schema.org/Blog">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<div class="breadcrumbs">','</div>' );
}
?>
	<section>
<?php
	if( have_posts() ){
		the_post();
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'post-principal' );
?>		
		<article itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
			<meta itemprop="mainEntityOfPage" content="<?php echo home_url( $wp->request ); ?>">
			<meta itemprop="author" content="<?php echo get_the_author(); ?>">
			<header>
				<h1 itemprop="name headline"><?php echo get_the_title(); ?></h1>
				<div class="right-align margin-topbottom">
					<time datetime="<?php echo get_the_date("Y-m-d H:i:s"); ?>" itemprop="datePublished">Publicado em <?php echo get_the_date("d/m/Y"); ?></time> 
					por <?php the_author(); ?> 
					<img width="50" class="circle responsive-img z-depth-2 vertical-align" src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="">
		        </div>
				<meta itemprop="dateModified" content="<?php echo get_the_modified_date("Y-m-d H:i:s"); ?>">
			</header>
			<div class="conteudo" itemprop="articleBody">
				<figure itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img itemprop="url contentUrl" width="100%" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>">
					<meta itemprop="width" content="<?php echo $image[1]; ?>">
        			<meta itemprop="height" content="<?php echo $image[2]; ?>">
				</figure>
				<?php the_content(); ?>
			</div>
			<div class="clear"><?php comments_template(); ?></div>
		</article>
<?php 
	}
?>		
	</section>
	<?php $recent_posts = wp_get_recent_posts(array('category' => $category_id,'numberposts' => 3)); ?>
	<?php if ($recent_posts): ?>
	<section class="blog-destaques">
		<h2 class="no-margin-top center">Leia também</h2>
		<div class="row">
		<?php
		foreach( $recent_posts as $recent ){
			get_template_part( 'template-part/chamada-post', get_post_type() );
		}
		wp_reset_query();
		?>	
		</div>	
	</section>
	<?php endif ?>
</main>
<?php get_footer(); ?>