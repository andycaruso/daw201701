<?php
require("funcoes.php");
require("frm_inclui.php");
//testa se $_REQUEST foi criado pelo envio de um form
if (isset($_REQUEST['acao'])) {
	//guarda em varíaveis do PHP cada valor correspondente 
	//do vetor associativo $_REQUEST[]
	$acao = $_REQUEST['acao'];
	$nome = $_REQUEST['nome'];

	$nascimento = $_REQUEST['nascimento'];
	//formata a data para o padrao mysql
	$nascimento = converteData($nascimento);

	$sexo = $_REQUEST['sexo'];
	$cdcidadepessoa = $_REQUEST['cidade'];
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