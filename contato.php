<?php

class Contato{
    private $nomeObj;
    private $telefoneObj;
    
    public function __construct($nome, $telefone){
        $this->nomeObj = $nome;
        $this->telefoneObj = $telefone;
    }
    /*** @return mixed*/
    public function getNomeObj(){
        return $this->nomeObj;
    }
    
    /*** @return mixed*/
    public function getTelefoneObj(){
        return $this->telefoneObj;
    }
    
    /*** @param mixed $nome*/
    public function setNomeObj($nomeObj){
        $this->nomeObj = $nomeObj;
    }
    
    /*** @param mixed $telefone*/
    public function setTelefoneObj($telefoneObj){
        $this->telefone = $telefoneObj;
    }
}

?>