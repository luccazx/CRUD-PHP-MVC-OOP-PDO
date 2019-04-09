<?php
    require_once '../includes/mensagem.php';
    require_once '../includes/header.php';
    require_once '../controller/ListarController.php';
?>

<div class="row">
    <div class="col s12 m10 push-m1">
		<h3 class="light"> Lista de Pacientes </h3>
		<table class="striped">
            <thead>
            <tr>
                    <th>Nome:</th>
                    <th>Idade</th>
                    <th>cpf</th>
                    <th>email</th>
                    <th>endereco</th>
                </tr>
            </thead>
        <tbody>
                <?php $listar = new ListarController(); ?>
        </tbody>
        </table>
            <br>
            <a href="adicionar.php" class="btn"> Adicionar paciente</a>
    </div>
</div>
<?php
include_once '../includes/footer.php';
?>



