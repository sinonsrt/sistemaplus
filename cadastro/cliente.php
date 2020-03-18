<?php 
	if (!isset ($_SESSION["webplus"]["id"])) {
		exit;
	}

	//inicia as variaveis
	$nome = $endereco = $email = $telefoneFixo = $telefoneCell = $cpf = $dataNiver = $obs = "";

	//se o id não existir
	if (!isset($id ) ) $id = "";

	//verifica se existe um id
	if (!empty($id)) {
		$sql = "select * from cliente where id = ? limit 1";
		$consulta = $pdo->prepare($sql);
		$consulta->bindParam(1, $id);
		$consulta->execute();
		$dados	  = $consulta->fetch(PDO::FETCH_OBJ);

		$id				= $dados->id;
		$nome			= $dados->nome;	
		$endereco		= $dados->endereco;
		$email			= $dados->email;
		$telefoneFixo	= $dados->telefonefixo;
		$telefoneCell	= $dados->telefonecell;
		$cpf			= $dados->cpf;
		$dataNiver		= $dados->dataniver;
		$obs			= $dados->obs;
	}
?>
<div class="container">
	<h1 class="float-left">Cadastro de Cliente</h1>
	<div class="float-right">
		<a href="cadastro/editora" class="btn btn-success">Novo Registro</a>
		<a href="listar/editora" class="btn btn-info">Listar Registros</a>
	</div>

	<div class="clearfix"></div>

	<form name="formCadastro" method="post" action="salvar/cliente" data-parsley-validate>

		<label for="id">ID</label>
		<input type="text" name="id" id="id"
		class="form-control" readonly
		value="<?=$id;?>">

		<label for="nome">Nome do Cliente </label>
		<input type="text" name="nome" id="nome"
		class="form-control" required
		data-parsley-required-message="Preencha este campo, por favor"
		value="<?=$nome;?>">

		<label for="site">Site da Editora</label>
		<input type="text" name="site" id="site"
		class="form-control" required
		data-parsley-required-message="Preencha este campo, por favor"
		value="<?=$site;?>">

		<button type="submit" class="btn btn-success margin">
			<i class="fas fa-check"></i> Gravar Dados
		</button>

	</form>

</div> <!-- container -->