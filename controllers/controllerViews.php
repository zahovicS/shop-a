<?php

	class controllersViews
	{
		function __construct()
		{
			include "views/base.php";
			$_SESSION["productos"]="";
			$_SESSION["precios"]="";
			$_SESSION["cantidades"]="";
			$_SESSION["total"]="";
		}
		function shop()
		{
			session_start();
			sup();
			include "controllers/controllersProductos.php";
			$tabla=new controllersProductos();
			$r=$tabla->record;
			$r->listar();
			inf();
		}/*
		function carro()
		{
			session_start();
			sup();
			inf();
		}*/
		function resume()
		{
			session_start();
			extract($_POST);
			session_start();
			$_SESSION["productos"].=",".$producto;
			$_SESSION["precios"].=",".$precio;
			$_SESSION["cantidades"].=",".$cantidad;
			$_SESSION["total"].=",".$cantidad*$precio;
			echo json_encode($_SESSION);
		}
	}
 ?>
