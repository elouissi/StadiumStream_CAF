<?php

namespace MVC\Model;
use MVC\Model\Crud as CrudAlias;
class Matchs extends CrudAlias
{ 

    private int $id;
    private string $date_hour;
    private string $image;

    /**
     * @param string $date_hour
     * @param int $image
     * @param int $id
     */
    public function __construct(string $date_hour="null", int $image=0,int $id=1)
    {
        parent::__construct();
        $this->id = $id;
        $this->date_hour = $date_hour;
        $this->image = $image;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getdate_hour(): string
    {
        return $this->date_hour;
    }

    public function setdate_hour(string $date_hour): void
    {
        $this->date_hour = $date_hour;
    }

    public function getimage(): string
    {
        return $this->image;
    }

    public function setimage(string $image): void
    {
        $this->image = $image;
    }
    public function edit():void{
        $this->update('team', $this->id, ['date_hour' => $this->date_hour,'image' => $this->image]);
    }

    public function destroy():void{
        $this->delete('team', $this->id);
    }

    public function add(): void
    {
        $this->id = $this->insert('team', ['date_hour' => $this->date_hour, 'image' => $this->image]);
    }
    public function show()
{
    return $this->select_matchs($this->id);
}
public function showall(): array
{
 
    return $this->selectAll_matchs();
}
}