<?php

namespace MVC\connexion;

use PDO;
use PDOException;

class connexion
{
    public static PDO|null $pdo = null;
    private string $ServerName="localhost";
    private string $Name="mvc_proj";
    private string $UserName="OussamaBL";
    private string $password="OussamaBL555@?";

    public function __construct()
    {
        /*$serverName = $_ENV["DB_SERVERNAME"];
        $db_name = $_ENV["DB_NAME"];
        $userName = $_ENV["DB_USERNAME"];
        $password = $_ENV["DB_PASSWORD"];
        print_r($_ENV);*/

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