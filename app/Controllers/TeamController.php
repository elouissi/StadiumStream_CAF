<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
use MVC\Model\Team;
use MVC\Model\User;
class TeamController extends Controller
{
    public function index():void{
        // TODO: Implement create() method.
        $teams=new Team;
        $teams=$teams->showAllTeams();
        $this->render("views","home","liste des equipes",$teams);
    }

    function create(): void
    {
        // TODO: Implement create() method.
        $this->render("views","addTeam","Ajouter des equipes");
    }
    function add(): void
    {
        $team=new Team($_POST["name"],$_POST["cups"]);
        $team->add();
        $teams=new Team;
        $teams=$teams->showAllTeams();
        $this->render("views","home","liste des equipes",$teams);
    }

    function destroy($id): void
    {
        // TODO: Implement destroy() method.
        $team=new Team();
        $team->setId($id);
        $team->destroy();
        $teams=new Team;
        $teams=$teams->showAllTeams();
        header('Location: /mvc/team/index/');
    }

    function update(int $id): void
    {
        // TODO: Implement update() method.
        $team=new Team();
        $team->setId($id);
        $team->show();
        $this->render("views","edit_team","Modifier equipe",$team);
    }
    public function edit(int $id):void{
        $team=new Team($_POST['name'],$_POST['cups'],$id);
        $team->edit();
        $teams=new Team;
        $teams=$teams->showAllTeams();
        $this->render("views","home","liste des equipes",$teams);
    }

}