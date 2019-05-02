<?php
include_once '../model/Cliente.php';
class ListarController{

    private $cliente;

    public function __construct(){
        $this->criarTabela();
    }

    public function criarTabela(){ //listar
        $this->cliente = new Cliente();
        $row = $this->cliente->getCliente();
        foreach ($row as $value){
            echo "<tr>";
            echo "<td>" .$value['nome'] . "</td>";
            echo "<td>" .$value['idade'] . "</td>";
            echo "<td>" .$value['cpf'] . "</td>";
            echo "<td>" .$value['email'] . "</td>";
            echo "<td>" .$value['endereco'] . "</td>";
            echo "<td><a href=editar.php?id=".$value['cliente_id'] ." class=\"btn-floating orange\"><i class=\"material-icons\">edit</i></td>";
            echo "<td><a onclick=\"return confirm('Tem certeza que deseja deletar o usuário " . $value['nome'] . "')\" href=../controller/DeletarController.php?id=" . $value['cliente_id'] . " class=\"btn-floating red\"><i class=\"material-icons\">delete</i></a></td>";
            echo "</tr>";
        }
    }
}


