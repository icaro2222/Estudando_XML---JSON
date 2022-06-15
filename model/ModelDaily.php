<?php
##salvar como ModelDailys.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'db/DB.php';    //inclui arquivo DB

 class ModelDaily extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $date, $id, $value;
    
    public function setDate($date) {
        $this->date = $date;
    }
    public function getDate() {
        return $this->date;
    }
    
    
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    
    
}
