<?php

namespace MVC\Model;
use MVC\Model\Crud as CrudAlias;

class Team extends CrudAlias
{
    private int $id;
    private string $name;
    private int $cups;

    /**
     * @param string $name
     * @param int $cups
     * @param int $id
     */
    public function __construct(string $name="null", int $cups=0,int $id=-1)
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->cups = $cups;
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

    public function getCups(): int
    {
        return $this->cups;
    }

    public function setCups(int $cups): void
    {
        $this->cups = $cups;
    }
    public function edit():void{
        $this->update('team', $this->id, ['name' => $this->name,'cups' => $this->cups]);
    }

    public function destroy():void{
        $this->delete('team', $this->id);
    }

    public function add(): void
    {
        $this->id = $this->insert('team', ['name' => $this->name, 'cups' => $this->cups]);
    }

    public function show(): void
    {
        $team= $this->select('team', $this->id);
        $this->name=$team->name;
        $this->cups=$team->cups;
    }
    public function showall(): array
    {
        return $this->selectAll('teams');
    }
}