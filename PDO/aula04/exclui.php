<?php
  //consulta via PDO
   $sql = "DELETE From `pessoa` where `cdpessoa`= :cod";
    try {
      $declaracao = $link->prepare($sql);
      $declaracao->bindParam(':cod', $cod);
      $declaracao->execute();
      //rowCount é um método que retorna o número de linhas
      //afetadas pela última chamada ao método execute
      if ($declaracao->rowCount() > 0)
       echo ("Pessoa excluída com sucesso!");
      else
        echo("Código não existe.");
    }
    catch (PDOException $e) {
      print $e->getMessage();
    }


?>