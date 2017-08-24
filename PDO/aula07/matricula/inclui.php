<?php
require("../funcoes.php");

$erros = array();
//testa se $_REQUEST foi criado pelo envio de um form
if (isset($_REQUEST['acao'])) {
	//guarda em varíaveis do PHP cada valor correspondente 
	//do vetor associativo $_REQUEST[]
	$acao = $_REQUEST['acao'];
	$cdpessoa = $_REQUEST['cdpessoa'];
	$cdcurso = $_REQUEST['cdcurso'];
	$anosemestre = $_REQUEST['anosemestre'];

	if (strlen($cdpessoa) == 0){
		//array_push cria um novo elemento em um vetor
		array_push($erros, 'Código da pessoa');
	}

	if (strlen($cdcurso) == 0){
		array_push($erros, 'Código do curso');
	}

	if (strlen($anosemestre) == 0){
		array_push($erros, 'Ano / Semestre');
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
	$situacao = 'cursando';
	//montagem do cdmatricula
	$cdmatricula = $anosemestre . $cdcurso . $cdpessoa;

	//consulta via PDO
 	$sql = "INSERT INTO `matricula` (`cdmatricula`, `cdpessoa`, `cdcurso`, `anosemestre`, `situacao`) VALUES ($cdmatricula, '$cdpessoa', '$cdcurso', '$anosemestre', '$situacao');";
	  try {
	    $declaracao = $link->prepare($sql);
	    $declaracao->execute();
	    echo ("Matrícula incluída com sucesso!");
	    //limpar as variáveis depois do cadastro
	    $cdpessoa = '';
	    $cdcurso = '';
	    $anosemestre = '';
	  }
	  catch (PDOException $e) {
	    print $e->getMessage() . $sql;
	  }
	}//fim if($acao ...
}//fim if isset...
require("frm_inclui.php");



?>