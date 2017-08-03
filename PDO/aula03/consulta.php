<?php

require("conecta.php");

$sexo = 'M';
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

    while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
     $dados = "$cdpessoa , $nome , $nascimento <br>";
     echo($dados);
      
    }
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }



?>