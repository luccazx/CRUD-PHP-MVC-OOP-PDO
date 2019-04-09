<?php
// Header
include_once '../includes/header.php';
include_once '../model/Dbconfig.php';

if(isset($_GET['email'])) {
    $prk = pg_escape_string($conexao, $_GET['prk']);
    $query = "SELECT * FROM PACIENTE WHERE PRK='{$prk}'";
    $resultado = pg_query($conexao, $query);
    $dados = pg_fetch_array($resultado);
}

?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Paciente </h3>
		<form action="php_action/update.php" method="POST">

            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo$dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>

            <div class="input-field col s12">
                <input type="date" name="idade" id="idade">
                <label for="idade"></label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="cpf" id="cpf">
                <label for="cpf">cpf</label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="endereco">endereco</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn"> Atualizar </button>
			<a href="view/index.php" class="btn green"> Lista de pacientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer.
include_once '../includes/footer.php';
?>
