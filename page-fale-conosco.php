<?php include 'header.php'; ?>
	<!-- MENU -->
  <?php include 'include/menu.php'; ?>

<div class="conteudo">
<div class="container">
  <div class="row">
    <div class="col">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="row contact">
    <div class="col">
      <div class="row align-items-center">
        <div class="col-2 offset-2" style="border-right: 2px solid #FF724E"><i class="fas fa-phone" style="color:#FF724E"></i></div>
        <div class="col-6">
          <p><b>Telefone</b></p>
          <p>(21) 2532-1878</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="row align-items-center">
        <div class="col-2 offset-2" style="border-right: 2px solid #FF724E"><i class="fas fa-envelope" style="color:#FF724E"></i></div>
        <div class="col-6">
          <p><b>E-mail</b></p>
          <p>contato@etcbrasil.com</p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="row align-items-center">
        <div class="col-2 offset-2" style="border-right: 2px solid #FF724E"><i class="fas fa-map-marker-alt" style="color:#FF724E;"></i></div>
        <div class="col-8">
          <p><b>Endereço</b></p>
          <p>Av. Cidade de Lima, 86<br>loja 103 - Rio de Janeiro</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-bottom: 15px;">
  <div class="row contact">
    <div class="col">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        	<?php the_content(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?> 
    </div>
  </div>
</div>

<div class="container contact">
  <?php include 'include/contact-form2.php'; ?>
</div>
</div>

<?php include 'footer.php'; ?>