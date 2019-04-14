<?php
include_once '../includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Paciente </h3>
        <form method="post" action="../controller/InserirController.php" id="form" name="form" >
            <div class="input-field col s12">
                <input type="text" id="nome" name="nome" placeholder="NOME" required>
                <input type="text" id="idade" name="idade" placeholder="IDADE">
                <input type="number" id="cpf" name="cpf" placeholder="CPF" required>
                <input type="text" id="email" name="email" placeholder="EMAIL">
                <input type="text" id="dendereco" name="endereco" placeholder="ENDERECO">
            </div>

            <div class="col s8">
                <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
                <a href="../view/index.php" class="btn green"> Lista de pacientes </a>
            </div>
        </form>
	</div>
</div>

<?php

include_once '../includes/footer.php';
?>
