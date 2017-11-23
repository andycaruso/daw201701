<?php
require_once("../funcoes.php");
require_once("../funcoes_arquivos.php");
	
	//o comando mysql_escape_string deve ser chamado sempre
	//que vamos mandar um campo texto para o banco de dados
	//a fim de corrigir possiveis problemas com os caracteres ' e  "
	$nome = mysql_escape_string($_REQUEST['nome']);
	$nascimento = $_REQUEST['nascimento'];
	$sexo = $_REQUEST['sexo'];
	$cdcidadepessoa = $_REQUEST['cidade'];
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
	    
	    echo ("Inclusão OK!");
	  }
	  catch (PDOException $e) {
	    print $e->getMessage() . $sql;
	  }
	
?>