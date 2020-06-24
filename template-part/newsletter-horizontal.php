<section class="sec-newsletter">
    <h2 class="no-margin-bottom">Conteúdo bom na sua caixa de entrada!</h2>
    <p>Se inscreva na newsletter!</p>
    <form id="form-newsletter" action="<?php echo admin_url('admin-ajax.php') ?>" method="post" class="cean">
        <div class="row inputs-form-newsletter">
            <div class="input-field col s12 m4 l5">
                <i class="material-icons prefix ">account_circle</i>
                <input id="icon_nome" name="nome" type="text" class="validate" required="required">
                <label for="icon_nome">Nome</label>
            </div>
            <div class="input-field col s12 m4 l4">
                <i class="material-icons prefix">email</i>
                <input id="icon_email" name="email" type="email" class="validate" required="required">
                <label for="icon_email">E-Mail</label>
            </div>
            <div class="input-field col s12 m4 l3 center-align">
                <input class="btn fresh" type="submit" value="CADASTRAR">
            </div>          
        </div>
        <div class="load-newsletter hide">
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
        <div class="message-newsletter hide">
            <div class="col s12">
                <div class="woocommerce-message browser-default card-panel" role="alert"></div> 
            </div>
        </div>
        <input type="hidden" name="action" value="cadastra_newsletter">
    </form>
</section>


 

