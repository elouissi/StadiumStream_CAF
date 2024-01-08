<?php

namespace MVC\Model;
use MVC\Model\Crud as CrudAlias;
class User extends CrudAlias
{
    private int $id;
    private string $full_name;
    private string $email;
    private int $age;
    private string $cin;
    private bool $verify;

    public function isVerify(): bool
    {
        return $this->verify;
    }

    public function setVerify(bool $verify): void
    {
        $this->verify = $verify;
    }

    public function getCin(): string
    {
        return $this->cin;
    }

    public function setCin(string $cin): void
    {
        $this->cin = $cin;
    }
    private string $phone;

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    private string $password;

    /**
     * @param string $full_name
     * @param string $email
     * @param int $age
     * @param string $phone
     * @param string $cin
     * @param string $password
     * @param bool $verify
     * @param int $id
     */
    public function __construct(string $full_name="null", string $email="null", int $age=0,string $phone="null",string $cin="null",string $password="null",bool $verify=false,int $id=0)
    {
        parent::__construct();
        $this->id = $id;
        $this->full_name = $full_name;
        $this->email = $email;
        $this->age = $age;
        $this->phone = $phone;
        $this->cin = $cin;
        $this->password = $password;
        $this->verify = $verify;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFull_name(): string
    {
        return $this->full_name;
    }

    public function setFull_name(string $name): void
    {
        $this->full_name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }


    public function edit():void{
        $this->update('users', $this->id, ['full_name' => $this->full_name,'email'=>$this->email,'age'=>$this->age,'phone'=>$this->phone]);

    }

    public function destroy():void{
        $this->delete('users', $this->id);
    }

    public function add(): void
    {
        $this->id = $this->insert('users', ['full_name' => $this->full_name, 'email' => $this->email,'phone'=>$this->phone,'age'=>$this->age,'cin'=>$this->cin,'password'=>$this->password,'role'=>'spectateur']);
    }

    public function show(): void
    {
        $user= $this->select('users', $this->id);
        $this->full_name=$user->full_name;
        $this->email=$user->email;
        $this->age=$user->age;
        $this->phone=$user->phone;
        $this->cin=$user->cin;
        $this->verify=$user->verify;
    }
    public function check_auth_register(): ?object
    {
        return $this->select_auth($this->email,$this->cin);
    }
    public function check_auth_login(): ?object
    {
        return $this->select_auth($this->email);
    }
    public function verify():void{
        $this->update('users', $this->id, ['verify' => true]);
    }
}

