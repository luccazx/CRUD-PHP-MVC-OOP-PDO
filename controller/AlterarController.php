<?php
include_once "../model/Cliente.php";

class AlterarController
{
    protected $editar;
    public function __construct(){
        $this->editar = new Cliente();
        $this->carregarInfo();
    }

    public function carregarInfo(){
        $row = $this->editar->queryCliente($_GET['id']);
        foreach ($row as $value){
            $this->editar->setNome($value['nome']);
            $this->editar->setNome($value['nome']);
            $this->editar->setCpf($value['cpf']);
            $this->editar->setIdade($value['idade']);
            $this->editar->setEmail($value['email']);
            $this->editar->setEndereco($value['endereco']);
        }//ASSOCIAR DADOS
    }

    //MÉTODOS PARA EXIBIR ATRIBUTOS DO BANCO
    public function showNome(){
        echo $this->editar->getNome();
    }

    public function showCpf(){
        echo $this->editar->getCpf();
    }

    public function showIdade(){
        echo $this->editar->getIdade();
    }

    public function showEmail(){
        echo $this->editar->getEmail();
    }

    public function showEndereco(){
        echo $this->editar->getEndereco();
    }
}
    //IMPLEMENTAR ALTERAÇÃO NO BANCO
