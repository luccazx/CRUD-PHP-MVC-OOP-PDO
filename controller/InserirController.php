<?php
require_once "../model/Cliente.php";
session_start();

class InserirController{

    private $cliente;

    public function __construct(){
        $this->cliente = new Cliente();
        $this->incluir();
    }

    public function incluir(){
        //RECEBENDO DADOS DO POST
        $this->cliente->setNome($_POST['nome']);
        $this->cliente->setIdade($_POST['idade']);
        $this->cliente->setEmail($_POST['email']);
        $this->cliente->setCpf($_POST['cpf']);
        $this->cliente->setEndereco($_POST['endereco']);

        //INSERINDO OS DADOS DO NO BANCO;
        if ($this->cliente->setCliente($this->cliente->getNome(), $this->cliente->getIdade(), $this->cliente->getCpf(), $this->cliente->getEmail(), $this->cliente->getEndereco())) {
            $_SESSION['mensagem'] = "Sucesso ao Cadastrar";
            header('Location: ../view/index.php');;
        } else {
            $_SESSION['mensagem'] = "Erro ao Cadastrar";
            header('Location: ../view/index.php');;
        }

    }
}
new InserirController();

?>

