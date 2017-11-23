<?php

require_once("../funcoes.php");
require_once("../login.php");
$erros = array();

if(isset($_REQUEST['acao'])){
  switch ($_REQUEST['acao']) {
    case 'Sim':
    $cod = $_REQUEST['COD'];
      //rotina de exclusão
      require_once("exclui.php");
      break;
    case 'Salvar':
          //rotina de alteração
          require_once("altera.php");
    break;
    case 'Alterar':
      $COD = $_REQUEST['COD'];
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
      
      require_once("frm_altera.php");
      break;
    case 'Excluir':
      $COD = $_REQUEST['COD'];
      echo ("Tem certeza que deseja excluir a Matrícula de código = $COD \n");
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
  }
}

//consulta via PDO
    $sql = "SELECT cdmatricula,nome,nmsituacao,matricula.cdcurso,nmcurso from pessoa JOIN matricula ON matricula.cdpessoa = pessoa.cdpessoa JOIN curso ON matricula.cdcurso = curso.cdcurso JOIN situacao ON situacao.cdsituacao = matricula.situacao"; 
    $declaracao = $link->prepare($sql);
    $declaracao->execute();

    /* liga uma coluna do banco a uma variavel PHP */
    $declaracao->bindColumn('nome', $nome);
    $declaracao->bindColumn('cdcurso', $cdcurso);
    $declaracao->bindColumn('nmcurso', $nmcurso);
    $declaracao->bindColumn('cdmatricula', $cdmatricula);
    $declaracao->bindColumn('nmsituacao', $nmsituacao);

    //table e primeira tr com os cabeçalhos da listagem
    require("inc/consulta__tabela_inicio.php");

    if ($declaracao->rowCount() > 0) {
      while ($registro = $declaracao->fetch(PDO::FETCH_BOUND)) {
       //TRs e TDs de cada registro
       require("inc/consulta__tabela_registro.php");
      }
      //</table>
      geraTag("table",1);
     
    }
    else {
      echo("nenhum registro localizado");
    }
  
?>