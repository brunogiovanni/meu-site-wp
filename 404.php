<?php get_header(); ?>

<div class="container text-center">
    <h3>
        Opa! Parece que a página que procurou não existe.<br />
        <span class="h4">Tente voltar para pesquisar novamente ;)</span>
    </h3>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/404.gif" alt="404-john" class="img-fluid" />
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

<?php get_footer(); ?>