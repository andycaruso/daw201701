<?php
require("01conecta.php");

//dados a serem incluidos
$nome = 'João';
$nascimento = '2004-03-02';
$sexo = 'M';
$cdcidadepessoa = '2';

//consulta via PDO
 $sql = "INSERT INTO `pessoa` (`cdpessoa`, `nome`, `nascimento`, `sexo`, `cdcidadepessoa`) VALUES (NULL, '$nome', '$nascimento', '$sexo', '$cdcidadepessoa');";
  try {
    $declaracao = $link->prepare($sql);
    $declaracao->execute();
    echo ("Pessoa incluída com sucesso!");
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }



?>