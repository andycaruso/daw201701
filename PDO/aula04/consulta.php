<?php
require_once("funcoes.php");

if(isset($_REQUEST['acao'])){
  switch ($_REQUEST['acao']) {
    case 'Sim':
    $cod = $_REQUEST['COD'];
      //rotina de exclusão
      require_once("exclui.php");
      break;
    case 'Salvar':
          $COD = $_REQUEST['COD'];
          $nome = $_REQUEST['nome'];
          $nascimento = converteData($_REQUEST['nascimento']);
          $sexo = $_REQUEST['sexo'];
          $cdcidadepessoa = $_REQUEST['cidade'];
          //rotina de alteração
          require_once("altera.php");
    break;
    case 'Alterar':
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
        }
       }//fim try
      catch (PDOException $e) {
        print $e->getMessage();
      }
      require_once("frm_altera.php");
      break;
    case 'Excluir':
      $COD = $_REQUEST['COD'];
      echo ("Tem certeza que deseja excluir a pessoa de código = $COD \n");
       geraTag("form",0,array("method"=>"GET")); 
       geraTag("input",0,array("name"=>"acao",
                               "type"=>"submit",
                               "value"=>"Sim"));
       geraTag("input",0,array("type"=>"submit",
                               "value"=>"Não"));
       geraTag("input",0,array("name"=>"COD",
                               "type"=>"hidden",
                               "value"=>"$COD"));
        geraTag("form",1); 
        break;

    default:
      # code...
      break;
  }


}


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
         echo (converteDataHumano($nascimento));
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