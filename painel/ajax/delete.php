<?php

	sleep(0.3);

	include("../../config.php");

	$data['sucesso'] = true;
	$data['mensagem'] = "";

	if(Painel::logado() == false){
		die("Você não está logado!");
	}

	echo "ok deletando o cliente de id ".$_POST['id'];

?>