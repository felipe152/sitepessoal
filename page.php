<?php 
get_header(); 
?>
<header class="headerTopo">
  <h1><?php echo get_the_title(); ?></h1> 
</header>
<main class="container">
	<div class="row"><?php the_content(); ?></div>
</main>
<?php 
get_footer(); 
?>