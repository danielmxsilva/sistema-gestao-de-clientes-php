<?php


	sleep(1);

	include("../../config.php");

	$data['sucesso'] = true;
	$data['mensagem'] = "";

	if(Painel::logado() == false){
		die("Você não está logado!");
	}


	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$tipo = $_POST['tipo_cliente'];
	$cpf = '';
	$cnpj = '';
	$imagem = '';

	if($tipo == 'fisico'){
		$cpf = $_POST['cpf'];
	}else if($tipo == 'juridico'){
		$cnpj = $_POST['cnpj'];
	}

	if(isset($_FILES['imagem_adicionar'])){
		if(Painel::imagemValida($_FILES['imagem_adicionar'])){
			$imagem = $_FILES['imagem_adicionar'];
		}else{
			$imagem = "";
			$data['sucesso'] = false;
			$data['mensagem'] = "Imagem inválida! Por favor use imagens PNG,JPG ou JPEG";
		}
		
	}

	if($data['sucesso']){
		if(is_array($imagem)){
			$imagem = Painel::uploadFile($imagem);
		}
		$sql = Mysql::conectar()->prepare("INSERT INTO `tb_admin.clientes` VALUES(null,?,?,?,?,?)");
		$dadoFinal = ($cpf == '') ? $cnpj : $cpf;
		$sql->execute(array($nome,$email,$tipo,$dadoFinal,$imagem));
		//Tudo certo, só cadastrar
	}

	die(json_encode($data));

?>