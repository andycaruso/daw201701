<?php
require("../funcoes.php");
require("../funcoes_arquivos.php");


$erros = array();
//testa se $_REQUEST foi criado pelo envio de um form
if (isset($_REQUEST['acao'])) {
	//guarda em varíaveis do PHP cada valor correspondente 
	//do vetor associativo $_REQUEST[]
	$acao = $_REQUEST['acao'];
	$nome = $_REQUEST['nome'];
	if (strlen($nome) == 0){
		//array_push cria um novo elemento em um vetor
		array_push($erros, 'Nome');
	}

	$nascimento = $_REQUEST['nascimento'];
	if (strlen($nascimento) == 0){
		array_push($erros, 'Nascimento');
	}


	$sexo = $_REQUEST['sexo'];
	if (strlen($sexo) == 0){
		array_push($erros, 'Sexo');
	}
	$cdcidadepessoa = $_REQUEST['cidade'];
	if (strlen($cdcidadepessoa) == 0){
		array_push($erros, 'Cidade');
	}
	
	//testa erros 
	if (count($erros) > 0){
		require("frm_inclui.php");
		echo ("Houve " . count($erros) . " erro(s).<br>");
		echo ("Verifique campos obrigatórios:");
		foreach ($erros as $v) {
			echo (" $v, ");
		}
		//exit é fim de programa
		exit();
	}

	//testa se $_REQUEST['acao'] é igual a 'enviar' 
	if ($acao == 'enviar'){
		//formata a data para o padrao mysql
		$nascimento = converteData($nascimento);

		//consulta via PDO
 		$sql = "INSERT INTO `pessoa` (`cdpessoa`, `nome`, `nascimento`, `sexo`, `cdcidadepessoa`) VALUES (NULL, '$nome', '$nascimento', '$sexo', '$cdcidadepessoa');";
	  try {
	    $declaracao = $link->prepare($sql);
	    $declaracao->execute();
	    //lastInsertId() retorna o último código AI gerado
	    $id = $link->lastInsertId();
	    echo ("Pessoa incluída com sucesso!");
	    enviaFoto("fotos/",$id,"imagem");
	    //limpar as variáveis depois do cadastro
	    $nome = '';
	    $sexo = '';
	    $nascimento = '';
	    $cdcidadepessoa = '';
	  }
	  catch (PDOException $e) {
	    print $e->getMessage() . $sql;
	  }
	}//fim if($acao ...
}//fim if isset...
require("frm_inclui.php");



?>