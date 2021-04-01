<?php 
$operacao = $_POST["operacao"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];

require_once 'cadastrarTratativas.php';

require_once 'contato.php';
$conexaoClasseContato = new Contato($nome, $telefone);
$contatoNome = $conexaoClasseContato->getNomeObj();
$contatoTelefone = $conexaoClasseContato->getTelefoneObj();

require_once 'pdo.php';
$conexaoBanco = new Conexao();
$sql = "INSERT INTO agenda VALUES(NULL,'".$contatoNome."','".$contatoTelefone."')";
$cadastrarBanco = $conexaoBanco->cadastrar($sql);

if ($cadastrarBanco != NULL && !empty($cadastrarBanco)){
    require_once 'cadastrarStatus.php';
    
} else {
    echo "Instabilidade no Banco de Dados. Por favor, entre em contato com o Suporte.";
} 


//AQUI EU ESTAVA FAZENDO O LINK PARA CLICAR NO CAMPO CONSULTAR, PARA EDITAR O CONTATO
//VER ARQUIVO cadastro.php LINHA 7 E listagemPagina.php LINHA 13



?>