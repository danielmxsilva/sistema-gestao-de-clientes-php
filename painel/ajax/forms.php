<?php


	sleep(2);

	include("../../config.php");

	$data['sucesso'] = true;
	$data['erros'] = "";

	if(Painel::logado() == false){
		die("Você não está logado!");
	}


	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$tipo = $_POST['tipo_cliente'];
	$cpf = '';
	$cnpj = '';

	if($tipo == 'fisico'){
		$cpf = $_POST['cpf'];
	}else if($tipo == 'juridico'){
		$cnpj = $_POST['cnpj'];
	}

	if(isset($_FILES['imagem_adicionar'])){
		$imagem = $_FILES['imagem_adicionar'];
	}else{
		$data['sucesso'] = false;
		$data['erros'] = "Imagem inválida";
	}

	die(json_encode($data));

?>