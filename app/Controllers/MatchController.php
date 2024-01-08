<?php

namespace MVC\Controllers;

use MVC\Controllers\Controller;
use MVC\Model\Matchs;
use MVC\Model\stade as stade;
use MVC\Model\Team as team;
use Carbon\Carbon;

class MatchController extends Controller
{
    private $MatchID;

    public function index(): void
    {
        // TODO: Implement index() method.
    }
    public function details_match($id):void{
        session_start();
        $match=new Matchs();
        $this->MatchID = $id;
        $match->setId($id);
        $matchs=$match->show(); 
 

        $this->render("views","details_match","details match",$matchs);
    }
    public function reservation($id):void{
        session_start();
        if(!isset($_SESSION['id_user'])) header("location:/StreamStadium/Auth/sign_in");
        $match=new Matchs();
        $this->MatchID = $id;
        $match->setId($id);
        $matchs=$match->show();
   

   $carbon = Carbon::now();
 


        $this->render("views","reservation","Match reservation",$matchs,$carbon);
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

    function match(): void
    {
        session_start();
        $match=new Matchs();
        $matchs=$match->showall();
        // TODO: Implement login() method.
        $this->render("views","match","Match",$matchs);
    }
    function search_match() {
        if (isset($_POST)) {
            exit("weee");
        }else{
            exit("nooo"); 
        }
    }
}