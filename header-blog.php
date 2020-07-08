<?php 
get_header();
?>
<header class="headerTopo">
<?php if (is_single() or is_category()): ?>
	<span class="fakeh1">Blog</span>
<?php else: ?>
	<h1>Blog</h1>
<?php endif ?>
	
</header>
<nav class="segundary-menu">
	<div class="container">
		<ul>
<?php
	$menuSegundario = get_categories();
	if (is_array($menuSegundario)) {
	
		foreach ($menuSegundario as $item) {
?>
 				<li><a href="<?php echo get_category_link( $item->term_id ); ?>"><?php echo $item->name; ?></a></li>
<?php 	} 
	} ?> 			
		</ul>
		<div class="searchbox" >
			<form action="<?php echo get_site_url() ?>" method="get" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
				<meta itemprop="target" content="<?php echo get_site_url() ?>?s={query}"/>
				<meta itemprop="query-input" content="required name=query"/>
				<input itemprop="query" type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="ENCONTRE NO BLOG" required>
				<button type="submit"><i class="material-icons prefix">search</i></button>
			</form>
		</div>
		<br class="clear">
	</div>
</nav>