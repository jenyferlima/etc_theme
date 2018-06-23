<?php include 'header.php'; ?>
	<!-- MENU -->
  <?php include 'include/menu.php'; ?>

<style type="text/css" media="screen">
    html { margin-top: 0px !important; }
	* html body { margin-top: 0px !important; }
	@media screen and ( max-width: 782px ) {
        html { margin-top: 0px !important; }
		* html body { margin-top: 0px !important; }
	}
</style>

<div class="conteudo certificado" style="padding-bottom: 10px;">
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>

<div class="certificado_banner" style="padding:0px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-8" style="padding-top: 10px">
        <p class="text-justify">O programa <b>ATC Autodesk<sup>&reg;</sup> Authorized Training Center</b>, é a melhor solução de licenciamento de software Autodesk para treinamento, em consonância com os termos do Contrato de Licença e Serviços da Autodesk. Além de trazer vários outros benefícios listados nesta apresentação.</p>
        <p class="text-justify">Entre em contato: adesao.atc@etcbrasil.com</p>
      </div>
      <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/certificado_img.jpg" class="img-fluid" alt="...">
      </div>
    </div>
  </div>
</div>

<div class="certificado">
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <img src="http://etcbrasil.com/wp-content/uploads/2018/05/vantagens.png" class="img-fluid mx-auto d-block">
      </div>
      
      <div class="w-100" style="padding-bottom:25px"></div>
      
      <div class="col-8 offset-2">
        <img src="http://etcbrasil.com/wp-content/uploads/2018/05/industrias.png" class="img-fluid mx-auto d-block">
      </div>
      
      <div class="w-100" style="padding-bottom:25px"></div>
      
      <div class="col-8 offset-2">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        	<?php the_content(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
