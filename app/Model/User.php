<?php

namespace MVC\Model;
use MVC\Model\Crud as CrudAlias;
class User extends CrudAlias
{
    private int $id;
    private string $name;
    private string $email;
    private int $age;

    /**
     * @param string $name
     * @param string $email
     * @param int $age
     * @param int|null $id
     */
    public function __construct(string $name, string $email, int $age,int $id=null)
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
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
        $this->update('users', $this->id, ['name' => $this->name]);
    }

    public function destroy():void{
        $this->delete('users', $this->id);
    }

    public function add(): void
    {
        $this->id = $this->insert('users', ['name' => $this->name, 'email' => $this->email]);
    }

    public function show(): object
    {
        return $this->select('users', $this->id);
    }
}