<?php
$COD = $_REQUEST['COD'];
$nmcidade = $_REQUEST['nmcidade'];
$ufcidade = $_REQUEST['estado'];
$cdcidade = $COD;

if (strlen($nmcidade) == 0){
    //array_push cria um novo elemento em um vetor
    array_push($erros, 'Nome da cidade');
  }

  if (strlen($ufcidade) == 0){
    array_push($erros, 'Estado');
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
 $sql = "UPDATE cidade set nmcidade=:nmcidade,ufcidade=:ufcidade where cdcidade=:cdcidade";
  try {
    $declaracao = $link->prepare($sql);

    //conecta so parâmetro PDO às variáveois do PHP 
    $declaracao->bindParam(':nmcidade', $nmcidade);
    $declaracao->bindParam(':ufcidade', $ufcidade);
    $declaracao->bindParam(':cdcidade', $cdcidade);
    $declaracao->execute();
    echo ("Cidade alterada com sucesso!");
   
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }

}

?>