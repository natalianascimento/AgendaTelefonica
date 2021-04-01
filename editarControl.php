<?php
// informações vindo de editarInterface.php
$operacao = $_POST["operacao"];
$id = $_POST["id"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];


require_once 'editarTratativas.php';

$sqlEditar = "UPDATE agenda SET nome ='" . $nome . "', telefone ='".$telefone. "' WHERE id_agenda ='" . $id. "'";
require_once 'cadastrarTratativas.php';
$conexaoBanco = new Conexao();
$alteracao = $conexaoBanco->editar($sqlEditar);

// if ($alteracao==0){
//     $mensagem = "Cadastro alterado com sucesso!";
// }else{
//         $mensagem = "Erro detectado. Entre em contato com o Suporte.";
//    }

header ('Location: editarStatus.php'); 
exit;

?>