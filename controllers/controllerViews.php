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
			sup();
			include "views/spot.html";

			extract($_POST);
			session_start();

			$_SESSION["productos"].=",".$producto;
			$_SESSION["precios"].=",".$precio;
			$_SESSION["cantidades"].=",".$cantidad;
			$_SESSION["total"].=",".$cantidad*$precio;

			echo "</div>";
			echo "Agregaste al Carrito: ";
			echo "<hr />";
			echo "Producto: ".$producto."<br />";
			echo "Precio: S/ ".$precio."<br />";
			echo "Cantidad: ".$cantidad."<br />";
			echo "Total: S/ ".$precio*$cantidad;
			echo "<hr />";
			echo "Resumen de su Carrito de Compras:";
			echo "<hr />";

			$pro=explode(",",$_SESSION["productos"]);
			$pre=explode(",",$_SESSION["precios"]);
			$cant=explode(",",$_SESSION["cantidades"]);
			$to=explode(",",$_SESSION["total"]);

			echo "<table style='border:1px solid green; border-collapse: collapse; margin:auto; font-size:30px;'>";

			echo "<tr>";
			echo "<td>",Productos,"</td>";
			echo "<td>",precio,"</td>";
			echo "<td>",cantidad,"</td>";
			echo "<td>",total,"</td>";
			echo "<td>",opciones,"</td>";
			echo "</tr>";

			for($i=1;$i<count($pro);$i++)
			{
				echo "<tr>";
					echo "<td>",$pro[$i],"</td>";
					echo "<td>",$pre[$i],"</td>";
					echo "<td>",$cant[$i],"</td>";
					echo "<td>",$to[$i],"</td>";
					echo "<td>","<button>Eliminar<button>","</td>";
				echo "</tr>";
			}
			
			echo "<tr>";
			echo "<td>","total a pagar","</td>";
			echo "<td colspan='4'>",array_sum($to),"</td>";
			echo "</tr>";
			echo "</table>";
			echo "<button type='submit' id='comprar'>Realizar Compra</button><br />";
			echo "<a href='index.php'>comprar mas</a>";
			echo "</br>";
			echo "<a href='salir.php'>Cerrar sesion</a>";
			inf();
		}


	}

 ?>
