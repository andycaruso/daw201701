<?php
require_once("../login.php");
$COD = $_REQUEST['COD'];
$nome = $_REQUEST['nome'];
$nascimento = $_REQUEST['nascimento'];
$sexo = $_REQUEST['sexo'];
$cdcidadepessoa = $_REQUEST['cidade'];
$cdpessoa = $COD;

if (strlen($nome) == 0){
    //array_push cria um novo elemento em um vetor
    array_push($erros, 'Nome');
  }

  if (strlen($nascimento) == 0){
    array_push($erros, 'Nascimento');
  }

  if (strlen($sexo) == 0){
    array_push($erros, 'Sexo');
  }
 
  if (strlen($cdcidadepessoa) == 0){
    array_push($erros, 'Cidade');
  }
  
  //testa erros 
  if (count($erros) > 0){
    require("frm_altera.php");
    echo ("Houve " . count($erros) . " erro(s).<br>");
    echo ("Verifique campos obrigatórios:");
    foreach ($erros as $v) {
      echo (" $v, ");
    }
  }
  else { //faz alteração

//consulta via PDO
 $sql = "UPDATE pessoa set nome=:nome,nascimento=:nascimento,sexo=:sexo,cdcidadepessoa=:cdcidadepessoa where cdpessoa=:cdpessoa";
  try {
    $declaracao = $link->prepare($sql);

    //conecta so parâmetro PDO às variáveois do PHP 
    $declaracao->bindParam(':nome', $nome);
    $nascimento =  converteData($nascimento);
    $declaracao->bindParam(':nascimento', $nascimento);
    $declaracao->bindParam(':cdpessoa', $cdpessoa);
    $declaracao->bindParam(':sexo', $sexo);
    $declaracao->bindParam(':cdcidadepessoa', $cdcidadepessoa);
    $declaracao->execute();
   
     echo ("Pessoa alterada com sucesso!");
   
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }

}

?>