<?php

$nome = "Josimar";

function teste() {

	global $nome;
	echo $nome;
}

function teste2() {

	$nome = "José";
	echo $nome = " agora no teste2";
}

teste();
teste2();

?>