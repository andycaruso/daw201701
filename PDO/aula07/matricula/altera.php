<?php
$COD = $_REQUEST['COD'];
$situacao = $_REQUEST['situacao'];
 
  if (strlen($situacao) == 0){
    array_push($erros, 'Situação');
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
 $sql = "UPDATE matricula set situacao=:situacao where cdmatricula=:cdmatricula";
  try {
    $declaracao = $link->prepare($sql);

    //conecta so parâmetro PDO às variáveois do PHP 
    $declaracao->bindParam(':cdmatricula', $COD);
    $declaracao->bindParam(':situacao', $situacao);
    $declaracao->execute();
   
     echo ("Pessoa alterada com sucesso!");
   
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }

}

?>