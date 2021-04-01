<?php 

require_once 'pdo.php';
$conexaoBanco = new Conexao();

//Retorno vindo de consultarInterface.php
$retorno = isset($_GET['retorno']) ? $_GET['retorno'] : NULL;
$objetoContato = NULL;

if ($retorno != NULL && !empty($retorno)) {
    $sql = "SELECT * FROM agenda WHERE id_agenda = " . $retorno;
    $objetoContato = $conexaoBanco->consultar($sql);
}

require_once 'cadastrarInterface.php';

?>