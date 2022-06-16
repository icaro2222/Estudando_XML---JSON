<?php
##salvar como ModelReseves.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once(__DIR__.'/db/DB.php');   //inclui arquivo DB

 class ModelReseve extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $id, $checkin, $checkout, $total, $roomCode;
    
    public function setTotal($total) {
        $this->total = $total;
    }
    public function getTotal() {
        return $this->total;
    }
    
    public function setRoomCode($roomCode) {
        $this->roomCode = $roomCode;
    }
    public function getRoomCode() {
        return $this->roomCode;
    }
    
    public function setCheckin($Checkin) {
        $this->checkin = $Checkin;
    }
    public function getCheckin() {
        return $this->checkin;
    }
    
    public function setCheckout($checkout) {
        $this->checkout = $checkout;
    }
    public function getCheckout() {
        return $this->checkout;
    }
    
    
    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }
    
    
}
