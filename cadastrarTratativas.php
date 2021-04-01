<?php 


IF ($nome == !empty($nome) && $nome == !is_numeric($nome)){
    return;
} else {
    echo 'Preencha o campo Nome - Apenas letras são aceitas.<br>';
}

IF ($telefone == !empty($telefone) && $telefone == is_numeric($nome)){
    return;
} else {
    echo 'Preencha o campo Telefone - Apenas números são aceitos.';
}

// $nome == !empty($nome) ? require_once 'cadastrarControl.php' : "Preencha o campo Nome para cadastrar contato";

?>