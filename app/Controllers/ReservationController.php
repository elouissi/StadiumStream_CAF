<?php

namespace MVC\Controllers;
use MVC\Controllers\Controller;
use MVC\Model\Matchs;
use MVC\Model\Reservation;
use MVC\Model\User;
use MVC\Model\Book;
use MVC\Helpers\GenerateTickets;
 
class ReservationController extends Controller
{   
    private $MatchID;
    function index(): void
    {
        // TODO: Implement index() method.

    }

    function create(): void
    {
        // TODO: Implement index() method.
    }

    function book(int $id_match):void{
        // TODO: Implement create() method.
        session_start();
        $qte_catg3=$_POST['qte_ticket_catg3'];
        $qte_catg2=$_POST['qte_ticket_catg2'];
        $qte_catg1=$_POST['qte_ticket_catg1'];
        if(!isset($_SESSION['id_user'])) header("location:/StreamStadium/Auth/sign_in");
        $id_user=$_SESSION['id_user'];
        $user=new User();

        $user->setId($id_user);
        $match=new Matchs();
        $match->setId($id_match);


        for($i=0;$i<$qte_catg3;$i++){
            $reservation=new Reservation($user,$match,3,30);
            $reservation->add();
            $infos_reservation=$reservation->get_infos_reservation();
            $seatNumber = substr(uniqid(), 0, 6);
            $ticketNumber = substr(uniqid(), 0, 6);
            $generate = new GenerateTickets($infos_reservation->name_team1, $infos_reservation->name_team2, $infos_reservation->price, $ticketNumber, $infos_reservation->city, $infos_reservation->name_stad, $seatNumber);
            $uniqueHash =$generate->generateTicket();
            $reservation->setTicket($uniqueHash);
            $reservation->update_hash();
        }
        for($i=0;$i<$qte_catg2;$i++){
            $reservation=new Reservation($user,$match,2,40);
            $reservation->add();
            $infos_reservation=$reservation->get_infos_reservation();
            $seatNumber = substr(uniqid(), 0, 6);
            $ticketNumber = substr(uniqid(), 0, 6);
            $generate = new GenerateTickets($infos_reservation->name_team1, $infos_reservation->name_team2, $infos_reservation->price, $ticketNumber, $infos_reservation->city, $infos_reservation->name_stad, $seatNumber);
            $uniqueHash =$generate->generateTicket();
            $reservation->setTicket($uniqueHash);
            $reservation->update_hash();
        }
        for($i=0;$i<$qte_catg1;$i++){
            $reservation=new Reservation($user,$match,1,50);
            $reservation->add();
            $infos_reservation=$reservation->get_infos_reservation();
            $seatNumber = substr(uniqid(), 0, 6);
            $ticketNumber = substr(uniqid(), 0, 6);
            $generate = new GenerateTickets($infos_reservation->name_team1, $infos_reservation->name_team2, $infos_reservation->price, $ticketNumber, $infos_reservation->city, $infos_reservation->name_stad, $seatNumber);
            $uniqueHash =$generate->generateTicket();
            $reservation->setTicket($uniqueHash);
            $reservation->update_hash();
        }
        
    
        header("Location: /Streamstadium/Reservation/my_tickets");
         


    }
    public function generate_ticket($rese):void{

    }

    function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
    public function my_tickets():void{
        session_start();
        $reservation=new Book();
        $id_user=$_SESSION['id_user'];
     
        $reservations=$reservation->reservation($id_user); 
         $this->render("views",'my_tickets','My Tickets',$reservations);
    }

    function update(int $id): void
    {
        // TODO: Implement update() method.
    }

}