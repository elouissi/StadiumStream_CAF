<?php

namespace MVC\connexion;

use PDO;
use PDOException;

class connexion
{
    public static PDO|null $pdo = null;
    private string $ServerName="localhost";
    private string $Name="streamstadium";
    private string $UserName="root";
    private string $password="";

    public function __construct()
    {
        try{
            if(self::$pdo === null){
                $dsn = "mysql:host=$this->ServerName;dbname=$this->Name;charset=utf8";
                self::$pdo = new PDO($dsn, $this->UserName, $this->password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }
        catch (PDOException $e) {
            echo "Error adding user: " . $e->getMessage();
            return false;
        }
    }

}
