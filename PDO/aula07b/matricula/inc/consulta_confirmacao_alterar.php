<?php
      $sql = "SELECT situacao FROM matricula where cdmatricula=$COD";
      try {
        $declaracao = $link->prepare($sql);
        $declaracao->execute();
        /* liga uma coluna do banco a uma variavel PHP */
        $declaracao->bindColumn('situacao', $situacao);
        //->rowCount retorna o número de registros
        //retornados pela consulta
        if ($declaracao->rowCount() > 0) {
          $registro = $declaracao->fetch(PDO::FETCH_BOUND); 
        }
       }//fim try
      catch (PDOException $e) {
        print $e->getMessage();
      }
      
?>