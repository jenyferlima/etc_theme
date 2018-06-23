<form action="<?php echo get_template_directory_uri(); ?>/pages/webinar-send.php" method="post">
  <div class="row">
    <div class="col"><p><f>*Campos obrigatórios</f></p></div>
    <div class="w-100"></div>

    <div class="col-12 col-lg-6">
      <div class="form-group">
        <label for="form-name"><p>Nome*</p></label>
        <input type="text" class="form-control" id="form-fname" name="form-fname" required>
      </div>
    </div>

    <div class="col-12 col-lg-6">
      <div class="form-group">
        <label for="form-sobrenome"><p>Sobrenome*</p></label>
        <input type="text" class="form-control" id="form-lname" name="form-lname" required>
      </div>
    </div>

    <div class="w-100"></div>

    <div class="col-12 col-lg-6">
      <div class="form-group">
        <label for="form-email"><p>E-mail*</p></label>
        <input type="email" class="form-control" id="form-email" name="form-email" required>
      </div>
    </div>

    <div class="col-12 col-lg-6">
      <div class="form-group">
        <label for="form-country"><p>País</p></label>
        <select class="form-control" id="form-country" name="form-country">
          <option selected></option>
          <option value="Brasil">Brasil</option>
          <option value="Canadá">Canadá</option>
          <option value="USA">United States</option>
        </select>
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col"><p>Os organizadores de seminários on-line são proibidos de solicitar informações pessoais confidenciais (informações de cartão de crédito, números de previdência social, etc.) no formulário de registro. Este questionário não se destina a manipular dados confidenciais.</p></div>
    <div class="w-100"></div>

    <div class="col-12 col-lg-6">
      <div class="form-group">
        <label for="profile"><p>Perfil*</p></label>
        <select class="form-control" id="profile" name="profile" required>
          <option selected></option>
          <option value="Estudante">Estudante</option>
          <option value="Educador">Educador</option>
          <option value="Mentor">Mentor</option>
          <option value="Outros">Outros</option>
        </select>
      </div>
    </div>

    <div class="col-12 col-lg-6">
      <div class="form-group">
        <label for="area"><p>Área de Estudo*</p></label>
        <select class="form-control" id="area" name="area" required>
          <option selected></option>
          <option value="Engenharia Mecânica">Engenharia Mecânica</option>
          <option value="Produto e Design Industrial">Produto e Design Industrial</option>
          <option value="Arquitetura">Arquitetura</option>
          <option value="Outros">Outros</option>
        </select>
      </div>
    </div>

    <div class="col-12">
      <div class="form-group">
        <label for="instituicao"><p>Nome da Instituição Educacional</p></label>
        <input type="text" class="form-control" id="instituicao" name="instituicao">
      </div>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
        <label class="form-check-label" for="defaultCheck1">
          Ao clicar nesse botão, você envia suas informações para o organizador do webinar, que as usará para se comunicar com você sobre esse evento e seus outros serviços.
        </label>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-6 offset-lg-3">
      <button type="submit" class="btn btn-primary btn-lg btn-block hvr-bob">Registrar</button>
    </div>
  </div>
</form>