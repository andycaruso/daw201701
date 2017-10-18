<?php
require("funcoes.php");
//converte em maiusculas
$nmestado = strtoupper($_REQUEST['nmestado']);

//consulta via PDO
	$sql = "INSERT INTO `estado` (`cdestado`, `nmestado`) VALUES (NULL, '$nmestado');";
  try {
    $declaracao = $link->prepare($sql);
    $declaracao->execute();
    echo ("Estado incluído com sucesso!");
    
  }
  catch (PDOException $e) {
    print $e->getMessage() . $sql;
  }

?>