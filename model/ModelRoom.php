<?php
##salvar como ModelRooms.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once(__DIR__.'/db/DB.php');    //inclui arquivo DB

 class ModelRoom extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $nome, $idFk, $id;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setFk($idFk) {
        $this->idFk = $idFk;
    }
    public function getFk() {
        return $this->idFk;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    
    
}
