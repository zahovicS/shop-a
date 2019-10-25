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
		}
		function resume()
		{
			session_start();
			extract($_POST);
			session_start();
			$_SESSION["productos"].=",".$producto;
			$_SESSION["precios"].=",".$precio;
			$_SESSION["cantidades"].=",".$cantidad;
			$_SESSION["total"].=",".$cantidad*$precio;
			var_dump($_SESSION);
		}
		function ver()
		{
			echo json_encode(
			$pro=explode(",",$_SESSION["productos"]),
			$pre=explode(",",$_SESSION["precios"]),
			$cant=explode(",",$_SESSION["cantidades"]),
			$to=explode(",",$_SESSION["total"]));
		}
	}

 ?>
