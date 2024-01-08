<?php

namespace MVC\Model;

use MVC\Model\Crud as CrudAlias;

class Verification extends CrudAlias
{
    private int $id;
    private string $email;
    private string $token;
    private string $expires;

    /**
     * @param int $id
     * @param string $email
     * @param string $token
     * @param string $expires
     */
    public function __construct(string $email="", string $token="", string $expires="",int $id=0)
    {
        parent::__construct();
        $this->id = $id;
        $this->email = $email;
        $this->token = $token;
        $this->expires = $expires;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getExpires(): string
    {
        return $this->expires;
    }

    public function setExpires(string $expires): void
    {
        $this->expires = $expires;
    }
    public function add():void{
        $this->id = $this->insert('verification', ['email' => $this->email, 'token' => $this->token,'expires'=>$this->expires]);
    }

    public function check_token(): ?object{
        return $this->select_token_verify($this->token,$this->expires);
    }
    public function destroy():void{
        $this->delete_verification($this->email);
    }

}