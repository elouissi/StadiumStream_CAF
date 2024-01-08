<?php
namespace MVC\Model;
use MVC\Model\Crud;
class Book extends Crud{

public function __construct( )
{
    parent::__construct();

}

public function insert(string $table,array $data):int{}
public function delete(string $table,int $id):int{}
public function select(string $table,int $id):object{}
public function update(string $table,int $id,array $data):int{}

public function reservation(int $id_user){
    return $this->select_reservation($id_user);
} 



}