<?php
require("conecta.php");
require("funcoes.php");
//consulta via PDO
    
    $cliente = trim($_REQUEST['cliente']);

    //testa se cliente foi definido (strlnen > 0)
    //se for, grava em sqlFiltro uma clausula where para
    //filtrar
    if (strlen($cliente) > 0){
      $sqlFiltro = " where cliente LIKE '$cliente%'";

    }

    $sql = "SELECT cliente,prato FROM pedido $sqlFiltro order by cliente";
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('cliente', $cliente);
    $declaracao->bindColumn('prato', $prato);
    
    $vetAux = array();
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
       echo("Cliente: $cliente  - Pedido: $prato<br>");
      }
    }
    else {
      echo("nenhum registro localizado<br>");
    }
?>