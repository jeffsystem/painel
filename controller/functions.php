<?php

session_start();

$teste = $_SESSION['teste'];

	if($teste == 'logado'){

		var_dump($teste);
		//header("location:/painel/index.php");

	}else{
		header("location:/login/index.php");

		session_destroy();
	}

function url() {

	$request = $_SERVER['REQUEST_SCHEME'].'://';
	$server = $_SERVER['SERVER_NAME'].'/';
	$panel = explode('/',$_SERVER['REQUEST_URI']);
	$painel = $panel[1];

	echo $request.$server.$painel.'/';
}

function home() {

	$request = $_SERVER['REQUEST_SCHEME'].'://';
	$server = $_SERVER['SERVER_NAME'].'/';
	$panel = explode('/',$_SERVER['REQUEST_URI']);
	$painel = $panel[1];

	echo $request.$server.$painel.'/';
}

function view() {
	
	$request = $_SERVER['REQUEST_SCHEME'].'://';
	$server = $_SERVER['SERVER_NAME'].'/';
	$panel = explode('/',$_SERVER['REQUEST_URI']);
	$painel = $panel[1];

	echo $request.$server.$painel.'/views/';
	return $request.$server.$painel.'/views/';
}

function localView(){
	$painel =$_SERVER["DOCUMENT_ROOT"].'/painel/';
	return $painel;
}