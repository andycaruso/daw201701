<?php
require_once("../funcoes.php");
$erros = array();

if(isset($_REQUEST['acao'])){
  $COD = $_REQUEST['COD'];
  switch ($_REQUEST['acao']) {
    case 'Sim':
      //rotina de exclusão
      require_once("exclui.php");
      break;
    case 'Salvar':
          //rotina de alteração
          require_once("altera.php");
    break;
    case 'Alterar':
      require_once("inc/consulta_confirmacao_alterar.php");
      require_once("frm_altera.php");
      break;
    case 'Excluir':
      require("inc/consulta_confirmacao_excluir.php"); 
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