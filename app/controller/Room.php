<?php

/**
 * Salvar como Rooms.php
 * herda da classe crudRooms
 * contem metodos basicos para criar, deletar, Lê e apagar dados no BD
 */

require_once(__DIR__.'/../../model/ModelRoom.php');

 class Room extends ModelRoom {
    
    protected $tabela = 'room';  //define a tabela do banco

      
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (id, nome, hotelcode) VALUES (:id, :nome, :hotelcode)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->id);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':hotelcode', $this->idFk);
        return $stm->execute();
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
