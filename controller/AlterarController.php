<?php
include_once "../model/Cliente.php";
session_start();

class AlterarController
{

    private $clienteId;

    public function __construct($id)
    {
        $this->cliente = new Cliente();
        $this->mostrar($id);
    }

    public function mostrar($id)
    {
        $row = $this->cliente->queryCliente($id);
        $this->cliente->setNome($row['nome']);
        $this->cliente->setCpf($row['cpf']);
        $this->cliente->setIdade($row['idade']);
        $this->cliente->setEmail($row['email']);
        $this->cliente->setEndereco($row['endereco']);
        $this->clienteId = $row['cliente_id'];
    }

    public function editar($nome, $idade, $cpf, $email, $endereco, $id)
    {
        if ($this->cliente->updateCliente($nome, $idade, $cpf, $email, $endereco, $id)) {//[$nome,$idade,$cpf,$email,$endereco]
            $_SESSION['mensagem'] = "Alterado com suceero";
            header('Location: ../view/index.php');
        } else {
            $_SESSION['mensagem'] = "Erro ao alterar";
            header('Location: ../view/index.php');
        }
    }

    public function getNome()
    {
        return $this->cliente->getNome();
    }

    public function getCpf()
    {
        return $this->cliente->getCpf();
    }

    public function getIdade()
    {
        return $this->cliente->getIdade();
    }

    public function getEmail()
    {
        return $this->cliente->getEmail();
    }

    public function getClienteId()
    {
        return $this->clienteId;
    }

    public function getEndereco()
    {
        return $this->cliente->getEndereco();
    }
}

$id = filter_input(INPUT_GET, 'id');
$edit = new AlterarController($id);
if (isset($_POST['id'])) {
    $edit->editar($_POST['nome'], $_POST['idade'], $_POST['cpf'], $_POST['email'], $_POST['endereco'], $_POST['id']);
}



