<?php
include_once '../includes/header.php';
include_once '../controller/AlterarController.php';
$obj = new AlterarController();
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="../controller/AlterarController.php" method="POST">

            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php $obj->showNome();?>">
                <label for="nome">nome</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="idade" id="idade" value="<?php $obj->showIdade();?>">
                <label for="idade">idade</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf" value="<?php $obj->showCpf();?>">
                <label for="cpf">cpf</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" value="<?php $obj->showEmail(); ?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value="<?php $obj->showEndereco();?>">
                <label for="endereco">endereco</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Atualizar </button>
			<a href="../view/index.php" class="btn green"> Lista de pacientes </a>
		</form>

	</div>
</div>

<?php
// Footer.
include_once '../includes/footer.php';
?>
