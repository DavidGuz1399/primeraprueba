<?php
require_once "models/database.php";
session_start();
if (!isset($_GET['c'])){
	require_once "controllers/home.controller.php";
	$controller=new HomeController();
	call_user_func(array($controller,'Index'));
}else{
	$controller=$_GET['c'];
	$accion=isset($_GET['a']) ? $_GET['a'] :'Index';
	require_once "controllers/$controller.controller.php";
	$controller=ucwords($controller) . 'Controller';
	$controller=new $controller;
	call_user_func(array($controller,$accion));
}
?>