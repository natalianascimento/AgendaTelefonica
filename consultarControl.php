<?php
require_once 'pdo.php';

$conexaoBanco = new Conexao();

$sql = "SELECT * FROM agenda";
$consultarContato = $conexaoBanco->consultar($sql);
require_once 'consultarTratativas.php';
