<?php 
$image  = block_field( 'imagem' , false );
$image = wp_get_attachment_image_src( $image, 'post-thumb' );
?>
<div class="col s12" data-aos="fade-up">
  <div class="card-panel grey lighten-5 z-depth-1">
    <div class="row valign-wrapper">
      <div class="col s12">
        <h3 class="card-title no-margin-top black-text"><?php block_field( 'titulo' ); ?></h3>
        <p><?php block_field( 'texto' ); ?></p>
        <div class="row">
        <?php while ( block_rows( 'galeria' ) ) :  
                block_row( 'galeria' );
                $imageGaleria  = block_sub_field( 'item-galeria' , false );
                $imageFull = wp_get_attachment_image_src( $imageGaleria, 'full');
                $imageGaleria = wp_get_attachment_image_src( $imageGaleria, 'post-thumb' );
        ?>
          <div class="col m3 s6 center-align" style=" overflow: hidden;"><img class="materialboxed" data-imagefull="<?php echo $imageFull[0]; ?>" data-imagewhfull="<?php echo $imageFull[1].'x'.$imageFull[2]; ?>" data-imagethumb="<?php echo $imageGaleria[0]; ?>" width="100%" src="<?php echo $imageGaleria[0]; ?>"></div>
        <?php endwhile; ?>
        <?php reset_block_rows( 'galeria' ); ?>
        </div>
        <?php if (!empty(block_field( 'link', false ))): ?>
        <p><a class="btn btn-small" href="<?php block_field( 'link' ); ?>">Conheça</a></p>
        <?php endif ?>       
      </div>
    </div>
  </div>
</div>