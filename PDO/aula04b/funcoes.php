<?php
require("conecta.php");
//desabilita warnings 
//error_reporting("E_ALL & ~NOTICE");

//////////////////////////////
//E1: Query SQL
//E2: vetor com os campos para o bindParam
//E3: vetor com o(s) campos para o where
//E4: vetor com os campo(s) para o order by
//E5: objeto de resultado passado por referência
//S: objeto de erro do pdo
function consulta($sql,$vCampos,$vWhere,$vOrder,&$declaracao){
  require_once("conecta.php");
  try {
    
    $declaracao = $link->prepare($sql);
    if(is_array($vCampos)){
        foreach ($vCampos as $k => $v) {
          $k = ":" . $k;
          $declaracao->bindParam("$k",$v);
        }
    }
    $declaracao->execute();
  }
  catch (PDOException $e) {
    return($e);
  }

}






///////////////////////////////
//E1:nome da tag 
//E2:0 abre tag, 1 fecha tag
//E3:vetor com atributos 
function geraTag($tag,$fecha,$vetor){
  if($fecha == 1)
    echo("</$tag>\n");
  else {
    echo ("<$tag ");
    //variavel auxiliar para concatenar os atributos
    $aux = "";
    //testa de $vetor é um array
    if(is_array($vetor)){
      //gera os atributos da tag
      foreach ($vetor as $atributo => $valor) {
        $aux .=  "$atributo='$valor' ";
      }
    }
    echo("$aux>\n");
  }

}

///////////////////////////////
//E1: Label do input
//E2: name do input
//E3: value do input
//E4: vetor de erros (para validação)
function geraInput($label,$name,$value,$vetor=array()){
  $id = "id" . $name;
  echo ("<label for='$id'>$label</label>\n");
  echo ("<input type='text' id='$id' name='$name' value='$value' ");
  //busca no vetor de erros o label desta input
  if(in_array($label, $vetor)){
    echo ("class='erro'");

  }
  echo ("><br>\n");

}


///////////////////////////////
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
//E5: valor atual da variavel do <select> (pré marcado)
//E6: label
//S:  nada
function geraSelect($nome,$tabela,$campo1,$campo2,$valor,$label){
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
    echo("<option value=''>--$label--</option>\n");
    	//monta os <option>s do select
	    while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
         if ($valor != $cp1)
	        echo "<option value='$cp1'> $cp2 </option>\n";
         else
             echo "<option value='$cp1' selected='selected'> $cp2 </option>\n"; 
	    }
	//fecha o <select
    echo("</select><br>\n");
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }


}

//////////////////////////////
//E: data em formato brasileiro (DD/MM/ANO)
//S: data em formato mySQL
function converteDataHumano($data){
    //explode pega $data e separa pelo caractere '/'
    //guardando cada parte em um elemento do vetor $vetorData
  $vetorData = explode('-', $data);
    //monta a data em formato mySQL
  $dataNova = $vetorData[2] . "/" . $vetorData[1] . "/" . $vetorData[0];
    //retorna data formatada
  return($dataNova);
}


?>