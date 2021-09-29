<div class="wraper-titulo">
				<div class="titulo-content">
					<img src="<?php echo INCLUDE_PATH_PAINEL?>img/icon-adm.png">
					<h2>Administrar Painel</h2>
				</div><!--titulo-content-->
				<div class="breadcrump">
				<a href="<?php echo INCLUDE_PATH_PAINEL?>index.php">
					<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/home.png">
					<h2>Home</h2>
				</a>
					<span>/</span>
					<img src="<?php echo INCLUDE_PATH_PAINEL?>img/icon-adm.png">
					<h2 class="active-btn">Cadastrar Clientes</h2>
				</div><!--breadcrump-->
</div><!--wraper-titulo-->

<?php permissaoPagina(1)?>

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-usuario.png">
	<h2>Cadastrar Clientes</h2>

	<?php
		if(isset($_POST['acao_adicionar'])){
			$user = $_POST['user'];
			$nome = $_POST['nome'];
			$password = $_POST['password'];
			$imagem_default = $_POST['imagem_default'];
			$imagem = $_FILES['imagem_adicionar'];
			$cargo = $_POST['cargo'];
			$usuario = new Usuario();

			if($user == ''){
				Painel::alert('erro','Adicione um Login para continuar');
			}else if($nome == ''){
				Painel::alert('erro','Adicione um Nome pra continuar');
			}else if($password == ''){
				Painel::alert('erro','Adicione uma Senha para continuar');
			}else if($cargo == ''){
				Painel::alert('erro','Adicione um Cargo para continuar');
			}else if($cargo >= $_SESSION['cargo']){
				Painel::alert('erro','Você precisa adicionar um cargo melhor que o seu');
			}

			if($imagem['name'] != ''){
				if(Painel::userExists($user)){
					Painel::alert('erro','O Login já existe, adicione outro!');
				}else if(Painel::imagemValida($imagem) == true){
					$imagem = Painel::uploadFile($imagem);
					if($usuario->adicionarUsuario($user,$password,$imagem,$nome,$cargo)){
						Painel::alert('sucesso','Usuario Adicionado Com Sucesso!');
					}else{
						Painel::alert('erro','Ocorreu algum erro!');
					}
				}else{
					Painel::alert('erro','O formato da Imagem Não é Valida');
				}

			}else{
				$imagem = $imagem_default;
				if(Painel::userExists($user)){
					Painel::alert('erro','o Login já existe, adicione outro!');
				}else{
					if($usuario->adicionarUsuario($user,$password,$imagem,$nome,$cargo)){
						Painel::alert('sucesso','Usuario Adicionado Com sucesso!');
					}else{
						Painel::alert('erro','Campos Vazios Não São Permitidos!');
					}
				}
			}
		}
	?>

	<div class="form-editar">
		<form class="ajax" action="<?php echo INCLUDE_PATH_PAINEL?>ajax/forms.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Nome:</span>
				<input type="text" name="user" value="" required>
			</div><!--from-group-->
			<div class="form-group">
				<span>E-mail:</span>
				<input type="text" name="nome" value="" required>
			</div><!--from-group-->
			<div class="form-group">
				<span>Tipo:</span>
				<select name="tipo_cliente" required>
					<option value="fisico">Físico</option>
					<option value="juridico">Juridico</option>
				</select>
			</div><!--form-group-->

			<div ref="cpf" class="cpf-input form-group">
				<span>CPF:</span>
				<input type="text" name="cpf" value="">
			</div><!--from-group-->

			<div style="display:none;" ref="cnpj" class="cnpj-input form-group">
				<span>CNPJ:</span>
				<input type="text" name="cnpj" value="">
			</div><!--from-group-->

			<div class="form-group">
				<span>Imagen:</span>
				<input type="hidden" name="imagem_default" value=" ">
				<input type="file" name="imagem_adicionar" id="input-img-adicionar">
				<label for="input-img-adicionar" name="imagem_adicionar"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_adicionar','Cadastrar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->
