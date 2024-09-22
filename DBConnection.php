<?php

class DBConnection
{
    private $hostName = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'gamesstore';
   
   

    public function DatabaseConnection()
    {
        $con = new mysqli($this->hostName, $this->username, $this->password, $this->database);

        if ($con->connect_error) {
            die("<h1>Database Connection Failed: " . $con->connect_error . "</h1>");
        }

        return $con;
    }
}
?>