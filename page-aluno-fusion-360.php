<?php include 'header.php'; ?>

<div class="formulario">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-10 offset-lg-1">
      	<h1 style="margin-top: 40px; padding: 30px 10px 10px 10px; text-align:center"><?php the_title(); ?></h1>
        <h4>Aprenda: como modelar ou esculpir sua ideia, criar detalhamentos e renderizações.</h4>
      </div>
    </div>
    <hr>
    
    <div class="row" style="padding-top:15px; padding-bottom:20px; margin-bottom:30px;">
      <div class="col-12 col-lg-10 offset-lg-1">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
        	<?php the_content(); ?>
        
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
      </div>
    </div>
    
    <div class="row align-items-center">
      <div class="col-12 col-lg-8">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tmA2PHJNgi8" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="fusion hvr-buzz-out">
          <a href="https://www.autodesk.com/products/fusion-360/students-teachers-educators?td=aexfusion&mktvar002=673902&utm_medium=email&utm_source=invite&utm_campaign=amer-edu-aex-fusion-360-activations-fy17&utm_id=673902" target="_blank">
          	<center><i class="fas fa-download" style="color:#fff; margin-bottom:15px; font-size:40px"></i></center>
          	<h3>Clique para fazer o download gratuito do Autodesk Fusion 360</h3>
          </a>
        </div>
        
        <div class="fusion hvr-buzz-out">
          <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <center><i class="far fa-edit" style="color:#fff; margin-bottom:15px; font-size:40px"></i></center>
            <h3>Clique para emitir seu certificado</h3>
          </a>
          <div class="collapse" id="collapseExample" style="background: #fff; padding: 15px; border-radius: 5px;">
            	<!-- aluno -->
              <div class="row">
                <div class="col-12 col-lg-12">
                  <p>Aluno, você precisa do seu <b>ID</b>.</p>
                    <div class="row justify-content-center">
                      <div class="col-8 col-lg-8"><input type="text" value="AM1017554844" readonly  id="myInput1" class="form-control" style="padding: 3px 10px; margin-bottom: 10px; font-size:12px; font-weight:600; text-align:center;"></div>
                      <div class="col-1 col-lg-1" style="padding:0px"><i class="far fa-copy" onclick="myFunction1()" style="cursor:pointer"></i></div>
                  </div>
                  
                  <a class="btn-2 btn-primary btn-sm btn-block hvr-grow" href="https://eduevaluation.autodesk.com/" role="button"><i class="fas fa-check" style="padding-right:15px"></i> Emitir Certificado</a>
                </div>
              </div>            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function myFunction1() {
  var copyText = document.getElementById("myInput1");
  copyText.select();
  document.execCommand("copy");
}
</script>

<?php include 'footer2.php'; ?>