<?php
$cdpessoa = $COD;

//consulta via PDO
 $sql = "UPDATE pessoa set nome=:nome,nascimento=:nascimento,sexo=:sexo,cdcidadepessoa=:cdcidadepessoa where cdpessoa=:cdpessoa";
  try {
    $declaracao = $link->prepare($sql);

    //conecta so parâmetro PDO às variáveois do PHP 
    $declaracao->bindParam(':nome', $nome);
    $declaracao->bindParam(':nascimento', $nascimento);
    $declaracao->bindParam(':cdpessoa', $cdpessoa);
    $declaracao->bindParam(':sexo', $sexo);
    $declaracao->bindParam(':cdcidadepessoa', $cdcidadepessoa);
    $declaracao->execute();
   
     echo ("Pessoa alterada com sucesso!");
   
  }
  catch (PDOException $e) {
    print $e->getMessage();
  }



?>