<div class="col s12" data-aos="fade-up">
  <div class="card-panel grey lighten-5 z-depth-1">
    <div class="row valign-wrapper">
      <div class="col hide-on-small-only m3">
        <img src="<?php block_field( 'imagem' ); ?>" alt="" class="circle responsive-img"> 
      </div>
      <div class="col s12 m9">
         <h3 class="card-title no-margin-top black-text"><?php block_field( 'titulo' ); ?></h3>
         <p><?php block_field( 'texto' ); ?></p>
         <?php if (!empty(block_field( 'link', false ))): ?>
         <p><a class="btn btn-small" href="<?php block_field( 'link' ); ?>">Conheça</a></p>
          <?php endif ?>       
      </div>
    </div>
  </div>
</div>