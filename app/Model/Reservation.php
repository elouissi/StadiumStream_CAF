<?php

namespace MVC\Model;
use MVC\Model\User;
use MVC\Model\Matchs;
use MVC\Model\Crud;
class Reservation extends Crud
{
private int $id;
private User $user;
private Matchs $match;
private string $date_hour;
private string $status;
private string $ticket;
private int $category;
private float $price;

    /**
     * @param int $id
     * @param \MVC\Model\User $user
     * @param \MVC\Model\Matchs $match
     * @param string $date_hour
     * @param string $status
     * @param string $ticket
     * @param int $category
     * @param float $price
     */
    public function __construct(User $user, Matchs $match, int $category, float $price,string $ticket="",string $date_hour="",string $status="",int $id=0)
    {
        parent::__construct();
        $this->id = $id;
        $this->user = $user;
        $this->match = $match;
        $this->date_hour = $date_hour;
        $this->status = $status;
        $this->ticket = $ticket;
        $this->category = $category;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUser(): \MVC\Model\User
    {
        return $this->user;
    }

    public function setUser(\MVC\Model\User $user): void
    {
        $this->user = $user;
    }

    public function getMatch(): \MVC\Model\Matchs
    {
        return $this->match;
    }

    public function setMatch(\MVC\Model\Matchs $match): void
    {
        $this->match = $match;
    }

    public function getDateHour(): string
    {
        return $this->date_hour;
    }

    public function setDateHour(string $date_hour): void
    {
        $this->date_hour = $date_hour;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getTicket(): string
    {
        return $this->ticket;
    }

    public function setTicket(string $ticket): void
    {
        $this->ticket = $ticket;
    }

    public function getCategory(): int
    {
        return $this->category;
    }

    public function setCategory(int $category): void
    {
        $this->category = $category;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


    public function add(): void
    {
        $this->id = $this->insert('reservation', ['id_user' => $this->user->getId(), 'id_match' => $this->match->getId(),'category'=>$this->category,'price'=>$this->price ]);
    }

    public function get_infos_reservation():object{
        return $this->get_data_reservation($this->id);
    }
    public function update_hash():void{
        $this->update('reservation', $this->id, ['ticket' => $this->ticket]);
    }
 

}
