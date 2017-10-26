<?php
require("conecta.php");
require("funcoes.php");

//strtoupper converte em maiusculas
//trim retira espaços em branco
$prato = trim(strtoupper($_REQUEST['prato']));
$cliente = trim(strtoupper($_REQUEST['cliente']));

//consulta via PDO
$sql = "INSERT INTO `pedido` (`cliente`, `prato`) VALUES ('$cliente', '$prato');";
  try {
    $declaracao = $link->prepare($sql);
    $declaracao->execute();
    //não deu erro, tudo certo!
    echo (0);
    
  }
  catch (PDOException $e) {
    print $e->getMessage() . $sql;
  }

?>