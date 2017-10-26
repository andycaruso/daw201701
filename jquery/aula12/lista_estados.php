<?php
require("conecta_pw1.php");
require("funcoes.php");

//consulta via PDO
 $sql = "SELECT * FROM estado order by nmestado";
  try {
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('nmestado', $nmestado);
    $declaracao->bindColumn('cdestado', $cdestado);

    //cria o primeiro option da caixa com o valor menos -1
    //para que na primeira execução não exista um estado 
    //válido selecionado
    geraTag("option",0,array("value"=>"-1"));
    echo("UF");
    geraTag("option",1);

    //->rowCount retorna o número de registros
    //retornados pela consulta
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
        //gera os options da caixa select
         geraTag("option",0,array("value"=>"$cdestado"));
         echo("$nmestado");
         geraTag("option",1);
         //echo ("<option value='$cdestado'>$nmestado</option>");
      }
    }
    else {
      echo("nenhum registro localizado");
    }
  }//fim try
  catch (PDOException $e) {
    print $e->getMessage();
  }
?>