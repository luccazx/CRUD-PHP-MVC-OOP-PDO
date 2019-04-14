<?php
require_once 'Dbconfig.php';

class Cliente extends Dbconfig {

    private $nome;
    private $cpf;
    private $email;
    private $idade;
    private $endereco;


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getCliente()
    {
        $sql = "SELECT * FROM CLIENTE";
        $stmt =$this->connect()->query($sql);
        foreach ($stmt as $row) {
            $array[] = $row;
        }
        return $array;
    }//retorna todos os clientes

    public function setCliente($nome,$idade,$cpf,$email,$endereco){

        $sql = "INSERT INTO cliente (nome, email, cpf,endereco,idade) VALUES (:nome,:email,:cpf,:endereco,:idade)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':cpf',$cpf);
        $stmt->bindParam(':endereco',$endereco);
        $stmt->bindParam(':idade',$idade);
        if($stmt->execute()){
            $_SESSION['mensagem'] = "Cadastrado com sucesso";
            header('Location: ..view/index.php');
        } else {
            $_SESSION['mensagem'] = "Erro ao Cadastrar";
            header('Location: ..view/index.php');;
        }

    }

    public function queryCliente()
    {
        $this->setNome("teste1");
        $sql = "SELECT * FROM CLIENTE WHERE nome=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->getNome()]);

        if ($stmt->rowCount()){
            while ($row = $stmt->fetch()){
                return $row['nome'];
            }
        }
    }//busca cliente por id

    public function updateCliente(){}

    public function deletarCliente(){}
}
