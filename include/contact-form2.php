	<?php
$subjectPrefix = '[Contato ETC Brasil]';
$emailTo = '<comunicacao@etcbrasil.com>';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = stripslashes(trim($_POST['form-name']));
    $email    = stripslashes(trim($_POST['form-email']));
  	$phone	  = stripslashes(trim($_POST['form-phone']));
    $subject  = stripslashes(trim($_POST['form-assunto']));
    $message  = stripslashes(trim($_POST['form-mensagem']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $subject && $message){
        $subject = "$subjectPrefix $subject";
        $body = "<style>.im {color: #000 !important;}</style>
        <left><img src='http://etcbrasil.com/wp-content/themes/ETCBr/img/contato_etc.png' style='height:auto !important; max-width:600px !important;'></left><br />
        					<left><strong><p>Nome:</strong> $name</p></left><br />
                  <left><strong><p>E-mail:</strong> $email</p></left><br />
                  <left><strong><p>Telefone:</strong> $phone</p></left><br />
                  <left><strong><p>Mensagem:</strong> $message</p></left>";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
    
    <?php if(!empty($emailSent)): ?>
        <div class="col-12 col-lg-6 offset-lg-3">
          <div class="envio">
            <center><i class="fas fa-check" style="color:green; font-size:50px"></i></center>
          	<h3>Recebemos seu contato, e entraremos em contato o mais breve possível, obrigado!</h3>
          	<img src="<?php echo get_template_directory_uri(); ?>/img/logo_etc.png" class="img-fluid d-block mx-auto">
          </div>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="col-12 col-lg-6 offset-lg-3">
          <div class="envio">
            <center><i class="fas fa-exclamation-triangle" style="color:red; font-size:50px"></i></center>
          	<h3>Algo deu errado no envio do seu contato, poderia tentar novamente? Obrigado!</h3>
          	<img src="<?php echo get_template_directory_uri(); ?>/img/logo_etc.png" class="img-fluid d-block mx-auto">
          </div>
        </div>
        <?php endif; ?>
<center>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
          <div class="row">
            <div class="col-10 offset-1">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="E-mail" required>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="Telefone">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="form-assunto" name="form-assunto" placeholder="Assunto" required>
                  </div>
                </div> <!-- col-6 -->
                
                <div class="col-12 col-lg-6">
                  <div class="embed-responsive embed-responsive-16by9 endereco" style="margin-bottom: 0px; max-height:180px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.405021761173!2d-43.205083984949034!3d-22.89842728501613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f17f486d5d1%3A0x4e498ff395678603!2sAv.+Cidade+de+Lima%2C+86+-+Santo+Cristo%2C+Rio+de+Janeiro+-+RJ%2C+20220-710!5e0!3m2!1spt-BR!2sbr!4v1525403136163" width="600" height="300" frameborder="0" style="border:0; border-radius:15px" allowfullscreen></iframe>
                  </div>
                </div> <!-- col-6 -->
                
                <div class="w-100"></div>
                
                <div class="col-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" rows="6" id="form-mensagem" name="form-mensagem" placeholder="Mensagem" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </div><!-- col-12 -->
              </div> <!-- row -->
      			</div> <!-- col-10 -->
  				</div> <!-- row -->
        </form>
  </center>
          
    <?php endif; ?>

    <!--[if lt IE 9]>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src="js/contact-form.js"></script>
</body>
</html>