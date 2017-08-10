<?php

require("funcoes.php");

//consulta via PDO
 $sql = "SELECT cdpessoa, nome, nascimento FROM pessoa order by nome";
  try {
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('nascimento', $nascimento);
    $declaracao->bindColumn('cdpessoa', $cdpessoa);
    $declaracao->bindColumn('nome', $nome);
    //->rowCount retorna o número de registros
    //retornados pela consulta
   
    //<table border='1'>
    geraTag("table",0,array("border"=>"1"));
    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
       geraTag("form",0,array("method"=>"GET")); 
       geraTag("tr",0);
       geraTag("td",0);
         geraTag("input",0,array("name"=>"COD",
                                 "type"=>"text",
                                 "value"=>"$cdpessoa",
                                 "size"=>"2",
                                 "readonly"=>"readonly"));
       geraTag("td",1);
       geraTag("td",0);
         echo ($nome);
       geraTag("td",1);
       geraTag("td",0);
         echo ($nascimento);
       geraTag("td",1);
       geraTag("td",1);
       geraTag("td",0);
         geraTag("input",0,array("name"=>"acao",
                                 "type"=>"submit",
                                 "value"=>"Alterar"));
         geraTag("input",0,array("name"=>"acao",
                                 "type"=>"submit",
                                 "value"=>"Excluir"));
        
       geraTag("td",1);
       geraTag("tr",1);
       geraTag("form",1);
      }
      //</table>
      geraTag("table",1);
     
    }
    else {
      echo("nenhum registro localizado");
    }
  }//fim try
  catch (PDOException $e) {
    print $e->getMessage();
  }



?>