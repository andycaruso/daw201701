<?php

require("conecta.php");

$cdpessoa = '33';
$nome = 'Mário';

//consulta via PDO
 $sql = "UPDATE pessoa set nome=:nome where cdpessoa=:cdpessoa";
  try {
    $declaracao = $link->prepare($sql);

    //conecta so parâmetro PDO às variáveois do PHP 
    $declaracao->bindParam(':nome', $nome);
    $declaracao->bindParam(':cdpessoa', $cdpessoa);
    $declaracao->execute();
   if ($declaracao->rowCount() > 0)
     echo ("Pessoa alterada com sucesso!");
    else
      echo("Código não existe.");

  }
  catch (PDOException $e) {
    print $e->getMessage();
  }



?>