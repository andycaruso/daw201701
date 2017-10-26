<?php
require("conecta.php");
require("funcoes.php");
//consulta via PDO
    
    @$cliente = trim($_REQUEST['cliente']);
    @$prato = trim($_REQUEST['prato']);

    $sqlFiltro = "";
    $sqlFiltro1 = "";
    $sqlFiltro2 = "";
    //monta o filtro 
    //se cliente foi definido
    if (strlen($cliente) > 0){
      $sqlFiltro1 = " where cliente LIKE '$cliente%' ";
      //se prato também foi definido
      if (strlen($prato) > 0){
        $sqlFiltro2 = " and prato LIKE '$prato%'";
      }
    }
    else {
      //se apenas prato foi definido
      if (strlen($prato) > 0){
        $sqlFiltro2 = " where prato LIKE '$prato%'";
      }
    }
    //monta o filtro final
    $sqlFiltro = $sqlFiltro1 . $sqlFiltro2;
    
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