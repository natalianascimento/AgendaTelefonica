<?php
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'teste');

class Conexao
{

    protected $PDO;

    function __construct()
    {
        $this->PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
        try {
            $this->PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }

    function consultar(&$sql)
    {
        $resultado = $this->PDO->query($sql);
        $linhas = $resultado->fetchAll(PDO::FETCH_OBJ);
        return $linhas;
    }

    function cadastrar($sql)
    {
        $resultado = $this->PDO->query($sql);
        $ultimoId = $this->PDO->lastInsertId();
        return $ultimoId;
    }

    function excluir($sql)
    {
        $resultado = $this->PDO->query($sql);
        $contarLinhas = $resultado->rowCount();
        if ($contarLinhas == 1) {
            return;
        } else {
            echo "Contato não encontrado";
        }
    }

    function editar(&$sql)
    {
        $resultado = $this->PDO->query($sql);
        return;
    }
}

// $teste = new Conexao; //conectei o código com a classe
// $visualizar = $teste->consultar(); //pedi que a função fosse executada

?>