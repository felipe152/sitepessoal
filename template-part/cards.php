<?php if (isset($cards) and is_array($cards['dados'])): ?>
<div class="row">
	<?php foreach ($cards['dados'] as $card): ?>
	<div class="col s12 m4">
		<div class="card" <?php echo $cards['setup']['cardAtt'] ?>>
			<div class="card-image">
				<a href="<?php echo $card['url'] ?>"><img src="<?php echo $card['urlImage'] ?>"></a>
				<a href="<?php echo $card['url'] ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">insert_link</i></a>
			</div>
			<div class="card-content">
				<span class="card-title"><?php echo $card['titulo'] ?></span>
				<p><?php echo $card['conteudo'] ?></p>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>
<?php endif ?>