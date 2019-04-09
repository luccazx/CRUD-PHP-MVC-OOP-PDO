<?php

class Dbconfig{

    private $con;

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
    public function setCliente($nome,$idade,$cpf,$email,$endereco){
        $query = "INSERT INTO cliente (nome, email, cpf,endereco,idade) VALUES ('$nome','$email','$cpf','$endereco','$idade')";
        if (pg_query($this->connect(), $query)):
            $_SESSION['mensagem'] = "Cadastrado com sucesso";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro no cadastro";
            header('Location: ../index.php');
        endif;
    }

}
?>