<?php

class Dbconfig{

    public function __contruct(){
        $this->connect();
    }

    protected function connect(){
        $host = 'localhost';
        $db = 'clinica';
        $username = 'postgres';
        $password = 'ca1997';

        try {
            // create a PostgreSQL database connection
            $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
            $pdo = new PDO($dsn);
            return $pdo;
        } catch (PDOException $e) {
            // report error message
            echo $e->getMessage();
        }
    }
}
?>