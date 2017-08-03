<?php
require("funcoes.php");
require("frm_inclui.php");
$erros = 0;
//testa se $_REQUEST foi criado pelo envio de um form
if (isset($_REQUEST['acao'])) {
	//guarda em varíaveis do PHP cada valor correspondente 
	//do vetor associativo $_REQUEST[]
	$acao = $_REQUEST['acao'];
	$nome = $_REQUEST['nome'];
	if (strlen($nome) == 0){
		$erros++;
	}

	$nascimento = $_REQUEST['nascimento'];
	if (strlen($nascimento) == 0){
		$erros++;
	}

	//formata a data para o padrao mysql
	$nascimento = converteData($nascimento);

	$sexo = $_REQUEST['sexo'];
	if (strlen($sexo) == 0){
		$erros++;
	}
	$cdcidadepessoa = $_REQUEST['cidade'];
	if (strlen($cdcidadepessoa) == 0){
		$erros++;
	}
	
	//testa erros 
	if ($erros != 0){
		echo ("Houve $erros erro(s).<br>");
		echo ("Verifique campos obrigatórios");
		exit();
	}


	//testa se $_REQUEST['acao'] é igual a 'enviar' 
	if ($acao == 'enviar'){
		//consulta via PDO
 		$sql = "INSERT INTO `pessoa` (`cdpessoa`, `nome`, `nascimento`, `sexo`, `cdcidadepessoa`) VALUES (NULL, '$nome', '$nascimento', '$sexo', '$cdcidadepessoa');";
	  try {
	    $declaracao = $link->prepare($sql);
	    $declaracao->execute();
	    echo ("Pessoa incluída com sucesso!");
	  }
	  catch (PDOException $e) {
	    print $e->getMessage() . $sql;
	  }
	}//fim if($acao ...
}//fim if isset...



?>