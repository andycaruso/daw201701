<?php
require_once("funcoes.php");

//consulta via PDO
    
    $sql = "SELECT * FROM estado order by nmestado";
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('nmestado', $nmestado);

    geraTag("table",0,array("border"=>"1"));
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
       echo("$nmestado<br>");
      }
    }
    else {
      echo("nenhum registro localizado");
    }
?>