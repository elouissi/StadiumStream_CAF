<?php 
namespace MVC\Model;
use MVC\Model\Crud as CrudAlias;
use MVC\connexion\connexion;
use PDO;
class Stats extends CrudAlias
{ 	 	 	 	
    public function __construct () {
        parent::__construct();
    } 	
    
    public function getTicketCount() {
        $sql = "SELECT COUNT(*) as 'count' FROM reservation";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
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
    public function getCity(): string
    {
        return $this->city;
    }
    public function setCity(string $city): void
    {
        $this->city = $city;
    }
    public function getAdress():string
    {
        return $this->adress;
    }
    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
//methode
public function edit():void{
    $this->update('Stade',$this->id,['name'=>$this->name,'city'=>$this->city,
    'adress'=>$this->adress ,'capacity'=>$this->capacity,'image'=>$this->image]); 
}
public function destroy():void
{
    $this->delete('Stade', $this->id);
}
public function add(): void
{
    $this->id = $this->insert('Stade', ['name'=>$this->name,'city'=>$this->city,
    'adress'=>$this->adress ,'capacity'=>$this->capacity,'image'=>$this->image]); 
}
public function show() 
{
     return $this->select_stades($this->id);
}

 
public function showall(): array
{
    return $this->selectAll("stades");
}


}