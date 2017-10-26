<?php
require("conecta_pw1.php");
require("funcoes.php");

$ufcidade = trim($_REQUEST['ufcidade']);

//testa se cliente foi definido (strlnen > 0)
//se for, grava em sqlFiltro uma clausula where para
//filtrar
if (strlen($ufcidade) > 0){
  $sqlFiltro = " where ufcidade='$ufcidade'";
}
else {
  //força um resultado vazio caso não tenha sido definido um ufcidade
  $sqlFiltro = " where ufcidade='-1'";
}

//consulta via PDO
 $sql = "SELECT nmcidade, cdcidade, ufcidade FROM cidade $sqlFiltro order by nmcidade";
  try {
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('nmcidade', $nmcidade);
    $declaracao->bindColumn('cdcidade', $cdcidade);
    $declaracao->bindColumn('ufcidade', $ufcidade);
    //abre select
    
    //->rowCount retorna o número de registros
    //retornados pela consulta
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
        //gera os optinos da caixa select
        geraTag("option",0,array("value"=>"$cdcidade"));
        echo("$nmcidade");
        geraTag("option",1);
      
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