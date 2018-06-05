<?php

function url() {

	$request = $_SERVER['REQUEST_SCHEME'].'://';
	$server = $_SERVER['SERVER_NAME'].'/';
	$panel = explode('/',$_SERVER['REQUEST_URI']);
	$painel = $panel[1];

	echo $request.$server.$painel.'/';

	//return $request.$server;
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