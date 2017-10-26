<?php
require("conecta.php");
require_once("funcoes.php");

//consulta via PDO
    
    $sql = "SELECT * FROM pedido order by cliente";
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('cliente', $cliente);
    $declaracao->bindColumn('prato', $prato);
    
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
       echo("Cliente: $cliente  - Pedido: $prato<br>");
      }
    }
    else {
      echo("nenhum registro localizado<br>");
    }
?>