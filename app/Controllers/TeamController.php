<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
use MVC\Model\Team;
use MVC\Model\User;
class TeamController extends Controller
{
    public function index():void{
        // TODO: Implement create() method.
        echo "ok";

        //$this->render("views","home","liste des equipes");

    }

    function create(): void
    {
        // TODO: Implement create() method.
    }
    function add(): void
    {

    }

    function destroy($id): void
    {
        // TODO: Implement destroy() method.
    }

    function update(int $id): void
    {
        // TODO: Implement update() method.
    }
    public function edit(int $id):void{

    }

}