<?php
include_once '../controller/AlterarController.php';
include_once '../includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
        <h3 class="light"> ALTERAR INFORMAÇÕES </h3>
		<form action="../controller/AlterarController.php" method="POST">

            <div class="form-group input-field col s12">
                <div class="form-group">
                    <label for="email">NOME</label>
                    <input placeholder="INFORMAR NOME" required type="text" name="nome" id="nome"
                           value="<?php echo $edit->getNome() ?>">
                </div>

                <div class="form-group">
                    <label for="email">IDADE</label>
                    <input placeholder="INFORMAR IDADE" type="text" name="idade" id="idade"
                           value="<?php echo $edit->getIdade() ?>">
                </div>

                <div class="form-group">
                    <label for="email">CPF</label>
                    <input placeholder="INFORMAR CPF" required type="text" name="cpf" id="cpf"
                           value="<?php echo $edit->getCpf() ?>">
                </div>

                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input value="<?php echo $edit->getEmail() ?>" type="text" name="email" id="email"
                           placeholder="INFORMAR CPF">
                </div>
                <div class="form-group">
                    <label for="email">ENDERECO</label>
                    <input placeholder="INFORMAR ENDERECO" type="text" name="endereco" id="endereco"
                           value="<?php echo $edit->getEndereco() ?>">
                </div>
            </div>

            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $edit->getClienteId() ?>">
                <br>
                <button type="submit" class="btn btn-info"> Alterar Informações</button>
                <a href="../view/index.php" class="btn green"> Lista de pacientes </a>
            </div>
        </form>
	</div>
</div>

<?php
// Footer.
include_once '../includes/footer.php';
?>
