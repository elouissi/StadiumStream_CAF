<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
use MVC\Model\Matchs;
use MVC\Model\stade as stade;
use MVC\Model\Team as team;

class StadiumController extends Controller
{
    private $StadeID;
    function index(): void
    {
        // TODO: Implement index() method.
    }

    public function details_stad($id):void{
        $stade=new Stade();
        $this->StadeID = $id;
        $stade->setId($id);
        $stades=$stade->show(); 
        $this->render("views","stadium","Details de stade",$stades);
    }

    function create(): void
    {
        // TODO: Implement create() method.
    }

    function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }

    function update(int $id): void
    {
        // TODO: Implement update() method.
    }
}