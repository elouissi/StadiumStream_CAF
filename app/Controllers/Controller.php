<?php

namespace MVC\Controllers;

abstract class Controller
{
    abstract function index():void;
    abstract function create():void;
    abstract function destroy(int $id):void;
    abstract function update(int $id):void;

    public function render(string $nameFolder,string $nameFile,string $title,$result=null):void{

        include "../resources/".$nameFolder."/".$nameFile.".php";
        //include '../app/View/include/layout.php';

    }

}