<?php
##salvar como ModelHotels.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once(__DIR__.'/db/DB.php');    //inclui arquivo DB

 class ModelHotel extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $nome, $id;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    
    
}
