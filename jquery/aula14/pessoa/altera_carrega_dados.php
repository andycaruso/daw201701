<?php

$COD = $_REQUEST['COD'];
      $sql = "SELECT cdpessoa, nome, nascimento,sexo,cdcidadepessoa FROM pessoa where cdpessoa=$COD";
      try {
        $declaracao = $link->prepare($sql);
        $declaracao->execute();
        /* liga uma coluna do banco a uma variavel PHP */
        $declaracao->bindColumn('cdpessoa', $cdpessoa);
        $declaracao->bindColumn('nome', $nome);
        $declaracao->bindColumn('nascimento', $nascimento);
        $declaracao->bindColumn('sexo', $sexo);
        $declaracao->bindColumn('cdcidadepessoa', $cdcidadepessoa);
        //->rowCount retorna o número de registros
        //retornados pela consulta
        if ($declaracao->rowCount() > 0) {
          $registro = $declaracao->fetch(PDO::FETCH_BOUND); 
          json_encode($registro);
        }
       }//fim try
      catch (PDOException $e) {
        print $e->getMessage();
      }

?>