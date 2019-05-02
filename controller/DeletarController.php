<?php
include_once "../model/Cliente.php";
session_start();
class DeletarController
{
    private $del;

    public function __construct()
    {
        $this->del = new Cliente;
        $this->deleta();
    }

    public function deleta()
    {
        if ($this->del->deletarCliente($_GET['id'])) {
            $_SESSION['mensagem'] = "Deletado com sucesso";
            header('Location: ../view/index.php');;
        } else {
            $_SESSION['mensagem'] = "Erro ao deletar";
            header('Location: ../view/index.php');;
        }
    }
}

new DeletarController();