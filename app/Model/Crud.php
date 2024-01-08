<?php

namespace MVC\Model;

use MVC\connexion\connexion;
use MVC\interfaces\Crud as CrudInterface;
use PDO;

abstract class Crud implements CrudInterface
{
    public function __construct()
    {
        new connexion();
    }

    public function insert(string $table,array $data):int
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "insert into $table($columns) values ($values)";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(array_values($data));

        return connexion::$pdo->lastInsertId();
    }
    public function select(string $table,int $id):object
    {
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function select_auth(string $email,string $cin=null)
    {
        $sql = "select * from users where email = ?";
        if($cin!=null) $sql.=" and cin = ?";
        $stmt = connexion::$pdo->prepare($sql);
        if($cin!=null) $stmt->execute([$email,$cin]);
        else $stmt->execute([$email]);

        return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_OBJ) : null;

    }


    public function selectAll(string $table):array
    {
        $sql = "SELECT * FROM $table";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute();

        //return $stmt->fetch(PDO::FETCH_OBJ);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(string $table,int $id,array $data):int
    {
        $setClause = implode(' = ?, ', array_keys($data)) . ' = ?';
        $sql = "UPDATE $table SET $setClause WHERE id = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount();
    }

    public function delete(string $table,int $id):int
    {
        $sql = "DELETE FROM $table WHERE id = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
    public function selectAll_matchs():array
    {
        $sql = "SELECT matchs.*, team1.name AS team1_name,   team2.name AS team2_name, stades.name AS stade_name FROM matchs  JOIN   teams AS team1 ON matchs.id_team1 = team1.id  JOIN        teams AS team2 ON matchs.id_team2 = team2.id JOIN   stades ON matchs.id_stad = stades.id";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function select_matchs(int $id): object

    {
        $sql = "SELECT matchs.*, 
        team1.name AS team1_name,   
        team2.name AS team2_name, 
        team1.coach AS team1_coach, 
        team2.coach AS team2_coach, 
        team1.image AS team1_image, 
        team2.image AS team2_image, 
        team1.description AS team1_description, 
        team2.description AS team2_description, 
        team1.federation AS team1_federation, 
        team2.federation AS team2_federation, 
        team1.cups AS team1_cups, 
        team2.cups AS team2_cups,
        team1.groupe AS team1_groupe, 
        team2.groupe AS team2_groupe,
        stades.name AS stade_name,  
        stades.capacity AS stade_capacity,
        stades.city AS stade_city  
        FROM matchs  
        JOIN teams AS team1 ON matchs.id_team1 = team1.id  
        JOIN teams AS team2 ON matchs.id_team2 = team2.id 
        JOIN stades ON matchs.id_stad = stades.id            
        WHERE matchs.id = $id";
         $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function select_stades(int $id):array
    {
        $sql = "SELECT * FROM stades WHERE id = $id";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
 
    public function delete_verification(string $email):int
    {
        $sql = "DELETE FROM verification WHERE email = ?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$email]);

        return $stmt->rowCount();
    }
    public function select_token_verify($token,$expires): ?object{
        $sql = "select * from verification where token= ? and expires >= ? ";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$token,$expires]);
        return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_OBJ) : null;
    }
    public   function select_reservation(int $id_user):array
    {
        $sql = "SELECT 
        r.*, 
        t1.name AS team1_name,   
        t2.name AS team2_name, 
        t1.coach AS team1_coach, 
        t2.coach AS team2_coach, 
        t1.image AS team1_image, 
        t2.image AS team2_image, 
        t1.description AS team1_description, 
        t2.description AS team2_description, 
        t1.federation AS team1_federation, 
        t2.federation AS team2_federation, 
        t1.cups AS team1_cups, 
        t2.cups AS team2_cups,
        t1.groupe AS team1_groupe, 
        t2.groupe AS team2_groupe,
        s.name AS stade_name,  
        s.capacity AS stade_capacity,
        s.city AS stade_city,
        m.image AS image_match,
        m.date_hour AS date_hour

    FROM 
        reservation r
        INNER JOIN matchs m ON m.id = r.id_match  
        INNER JOIN teams t1 ON m.id_team1 = t1.id  
        INNER JOIN teams t2 ON m.id_team2 = t2.id
        INNER JOIN stades s ON m.id_stad = s.id
    WHERE 
        r.id_user = $id_user;
    ";

        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute(); 
        return($stmt->fetchAll(PDO::FETCH_OBJ));
    }
    public function get_data_reservation(int $id):object{
        $sql="select r.price,r.category,t1.name as 'name_team1',t2.name as 'name_team2',s.name as 'name_stad',s.city
        from reservation r inner join matchs m on r.id_match=m.id
        inner join teams t1 on m.id_team1=t1.id
        inner join teams t2 on m.id_team2=t2.id
        inner join stades s on m.id_stad=s.id
        where r.id=?";
        $stmt = connexion::$pdo->prepare($sql);
        $stmt->execute([$id]); 
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

}