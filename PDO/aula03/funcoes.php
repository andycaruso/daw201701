<?php
require("conecta.php");

//E: data em formato brasileiro (DD/MM/ANO)
//S: data em formato mySQL
function converteData($data){
    //explode pega $data e separa pelo caractere '/'
    //guardando cada parte em um elemento do vetor $vetorData
	$vetorData = explode('/', $data);
    //monta a data em formato mySQL
	$dataNova = $vetorData[2] . "-" . $vetorData[1] . "-" . $vetorData[0];
    //retorna data formatada
	return($dataNova);
}

/////////////////////////////////
//E1: name do <select>
//E2: tabela do banco de dados
//E3: campo do banco de dados que representa o cód. (value='')
//E4: campo do banco de dados que representa a descrição
//S:  nada
function geraSelect($nome,$tabela,$campo1,$campo2){
	//cria conexão (variável local)
	require("conecta.php");
	//monta a query para consultar o banco
	$sql = "SELECT $campo1,$campo2 from $tabela order by $campo2";
	try { 
	//faz a consulta
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn($campo1, $cp1);
    $declaracao->bindColumn($campo2, $cp2);
    //monta a variável que será atributo o id do <select
    $id = "id" . $nome;
    //abre o <select
    echo("<select name='$nome' id='$id'>\n");
    echo("<option value=''>--escolha--</option>\n");
    	//monta os <option>s do select
	    while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
	     echo "<option value='$cp1'> $cp2 </option>\n";
	    }
	//fecha o <select
    echo("</select>");
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }


}


?>