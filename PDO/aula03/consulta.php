<?php

require("conecta.php");

$sexo = 'F';
//consulta via PDO
 $sql = "SELECT cdpessoa, nome, nascimento FROM pessoa where sexo=:sexo";
  try {
    $declaracao = $link->prepare($sql);
    //liga um parametro SQL a uma variável PHP
    $declaracao->bindParam(':sexo', $sexo);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('nascimento', $nascimento);
    $declaracao->bindColumn('cdpessoa', $cdpessoa);
    $declaracao->bindColumn('nome', $nome);
    //->rowCount retorna o número de registros
    //retornados pela consulta
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
       echo("$cdpessoa , $nome , $nascimento <br>");
       
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