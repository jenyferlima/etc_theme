<?php
	$para		= "autodesk.br@etcbrasil.com";
	$assunto	= "[Registro Webinar]";
	$nome		= $_REQUEST['form-fname'];
	$sobrenome	= $_REQUEST['form-lname'];
	$email		= $_REQUEST['form-email'];
	$pais		= $_REQUEST['form-country'];
	$perfil		= $_REQUEST['form-profile'];
	$area		= $_REQUEST['form-area'];
	$lugar		= $_REQUEST['form-instituicao'];
				
		$corpo	= "<strong>Registro Webinar</strong><br><br>";
		$corpo .= "<strong>Nome:</strong> $nome<br>";
		$corpo .= "<strong>Sobrenome:</strong> $sobrenome<br>";
		$corpo .= "<strong>Email:</strong> $email<br>";
		$corpo .= "<strong>País:</strong> $pais<br>";
		$corpo .= "<strong>Perfil:</strong> $perfil<br>";
		$corpo .= "<strong>Área:</strong> $area<br>";
		$corpo .= "<strong>Instituição:</strong> $lugar<br>";
		
		$header = "Content-Type: text/html; charset = utf-8\n";
		$header.= "From: $email\n";
		
	@mail($para, $assunto, $corpo, $header);
	
// alterado por Roberto Teixeira em 20180608
$filen = "ZmwB7_UA/camila.txt";
$reg = $email.";".$nome.";".$sobrenome.";".$pais.";".$perfil.";".$area.";".$lugar.";".date('d/m/Y');
$myfile = file_put_contents($filen, $reg.PHP_EOL , FILE_APPEND | LOCK_EX);	
//******************************************************************************

header("location:https://etcbrasil.com/introducao-webinar");
?>