<?php include 'header.php'; ?>
	<!-- MENU -->
  <?php include 'include/menu.php'; ?>

<div class="conteudo">
  <div class="container">
    <div class="row"><div class="col"><h2>ETC Brasil</h2></div></div>
    <div class="row align-items-center">
      <div class="col-12 col-lg-5">
        <?php include 'pages/banner.php'; ?>
      </div>
      <div class="col-12 col-lg-7">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <?php the_content(); ?>

              <?php endwhile; ?>
              <?php else : ?>
              <?php endif; ?> 
      </div>
    </div>
    <div class="row">
      <div class="col-10 offset-1">
        <h2>Nossa Missão</h2>
				<p>Promover a Educação Tecnológica e Formação Profissional, a fim de contribuir para o desenvolvimento de organizações e pessoas capazes de construir um Brasil melhor.</p>
      </div>
    </div>
	</div>
</div>

<?php include 'include/timeline.php'; ?>

<!-- mapa -->
<?php include 'include/mapa.php'; ?>

<!-- projetos -->
<?php include 'include/projetos.php'; ?>

<?php include 'footer.php'; ?>