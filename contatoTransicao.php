<?php

// namespace agendav3;
class contatoTransicao{
    private $idTransição;
    public function __construct(&$id){
        $this->idTransição = $id;
    }
    /*** @return mixed*/
    public function getIdTransição(){
        return $this->idTransição;
    }
    
    /*** @param mixed $nome*/
    public function setIdTransição(&$id){
        $this->idTransição = $id;
        return;
    }
    
}

