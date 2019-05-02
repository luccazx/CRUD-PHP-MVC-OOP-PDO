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
        $sql = "SELECT * FROM CLIENTE ORDER BY CLIENTE_ID";
        $stmt =$this->connect()->query($sql);
        foreach ($stmt as $row) {
            $array[] = $row;
        }
        return $array;
    }//retorna todos os clientes

    public function setCliente($nome,$idade,$cpf,$email,$endereco){
        $sql = "INSERT INTO cliente (nome, email, cpf,endereco,idade) VALUES (:nome,:email,:cpf,:endereco,:idade)";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([':nome' => $nome, ':idade' => $idade, ':cpf' => $cpf, ':email' => $email, ':endereco' => $endereco]))
            return false;
        return true;
    }//adiciona

    public function queryCliente($id)
    {
        $sql = "SELECT * FROM cliente WHERE cliente_id=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $result = $stmt->fetch();
    }//busca cliente por id

    public function updateCliente($nome, $idade, $cpf, $email, $endereco, $id)
    { //$nome,$idade,$cpf,$email,$endereco
        $sql = 'UPDATE cliente SET nome=:nome, idade=:idade, cpf=:cpf, email=:email, endereco=:endereco WHERE cliente_id=:id';
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute([':nome' => $nome, ':idade' => $idade, ':cpf' => $cpf, ':email' => $email, ':endereco' => $endereco, ':id' => $id]))
            return false;
        return true;
    }

    public function deletarCliente($id)
    {
        $sql = "DELETE FROM cliente WHERE cliente_id =:id";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute([':id' => $id]))
            return false;
        return true;

    }
}
