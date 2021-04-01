<?php 

$identificador = !empty($_GET['identificador']) ? $_GET['identificador'] : NULL;
echo $identificador;

$sql = "DELETE FROM agenda WHERE id_agenda =".$identificador;

require_once 'pdo.php';
$conectar = new Conexao();
$objeto = $conectar->excluir($sql);

header("Location: excluirStatus.php");
exit;

?>