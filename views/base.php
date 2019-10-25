<?php 
function sup()
{

echo <<<HTML

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="views/style/index.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="
						width=device-width,
						initial-scale=1,
						user-scalable=yes" />
	<title>Tienda</title> 
</head>
<body>
	
	<header class="cabecera">
		<div class="cabecera__centro">
			
			<div class="cabecera__btn">Computer Master</div>
			
			<div class="cabecera__btn textField">
				<input type="text" name="" />
				<div class="cabecera__icono"></div>
			</div>
			<div class="cabecera__btns">
				<div>menu</div>
				<div><button class="comprar" id="btncarrito">Carrito</button></div>
				<div>carrito</div>
			</div>
		</div>
	</header>
	<div class="carrito__list" id="lista_carrito">
	</div>
	<nav class="menu">
		<div class="menu__centro">
			<div class="menu__item"></div>
			<div class="menu__item"></div>
			<div class="menu__item"></div>
			<div class="menu__item"></div>
			<div class="menu__item"></div>
			<div class="menu__item"></div>
			<div class="menu__item"></div>
			<div class="menu__item"></div>
			<div class="menu__item"></div>
		</div>
	</nav>

	<div class="submenu" id="a">
		<div class="menu__item">a</div>
		<div class="menu__item">a</div>
		<div class="menu__item">a</div>
		<div class="menu__item">a</div>
	</div>
	<div class="submenu" id="b">
		<div class="menu__item">b</div>
		<div class="menu__item">b</div>
		<div class="menu__item">b</div>
		<div class="menu__item">b</div>
	</div>
	<div class="submenu" id="c">
		<div class="menu__item">c</div>
		<div class="menu__item">c</div>
		<div class="menu__item">c</div>
		<div class="menu__item">c</div>
	</div>
	<div class="submenu" id="d">
		<div class="menu__item">d</div>
		<div class="menu__item">d</div>
		<div class="menu__item">d</div>
		<div class="menu__item">d</div>
	</div>
	<div class="submenu" id="e">
		<div class="menu__item">e</div>
		<div class="menu__item">e</div>
		<div class="menu__item">e</div>
		<div class="menu__item">e</div>
	</div>
	<div class="submenu" id="f">
		<div class="menu__item">f</div>
		<div class="menu__item">f</div>
		<div class="menu__item">f</div>
		<div class="menu__item">f</div>
	</div>
	<div class="submenu" id="g">
		<div class="menu__item">g</div>
		<div class="menu__item">g</div>
		<div class="menu__item">g</div>
		<div class="menu__item">g</div>
	</div>

	<div class="productos" id="productos">
HTML;
}


/*
		<div class="productos__item">
			<figure class="productos__imagen"></figure>
			<p class="productos__nombre">Producto</p>
			
			<p class="productos__precio">
				<label>Precio</label>
				<input type="number" min="1" name="" class="productos__cantidad">
			</p>
			<a href="#" class="productos__add">Agregar</a>
		</div>
*/

function inf()
{
	echo <<<Alexander
	</div>

	<script type="text/javascript">
		let menu=document.querySelectorAll(".menu__centro>.menu__item");
		let subMenu=document.querySelectorAll(".submenu");
		let items=document.querySelectorAll(".productoItems");

		for (let i = 0; i < menu.length; i++) {
			if(i==0){

			}else{
				menu[i].addEventListener("mouseover",()=>{
					subMenu[i].classList.toggle("submenu--show");
				});
			}
		}

		productos.addEventListener("mouseover",()=>{
			for (var i = 0; i < subMenu.length; i++) {
				subMenu[i].classList.remove("submenu--show");
			}
		});

		/*comprar.addEventListener("click",()=>{
			spot.classList.add("spot--Show");
			document.querySelector("body").style.overflow="hidden";
			document.querySelector(".spot__image").classList.add("spot--Animation");
			setTimeout(function(){
				console.log("1 segundo despues");
				document.querySelector(".spot__congratulation").classList.add("spot__congratulation--show");
				},1000)
			setTimeout(function(){

				spot.classList.remove("spot--Show");
				},2000);

		});*/
		btncarrito.addEventListener("click",()=>{		
			window.location='car.php';
		});
		window.addEventListener("keydown",(e)=>{
			if(e.key=="F5"){
				e.preventDefault();
			}
		});
		for(var frm=0;frm<items.length;frm++){
			
			items[frm].addEventListener("submit",function (e){
				e.preventDefault();	
				let frmProducto=new FormData(this);
				let Ajax=new XMLHttpRequest();
				Ajax.addEventListener("load",(e)=>{
					});
				Ajax.open("post","proceso.php");	
				Ajax.send(frmProducto);
			});

		}


	</script>
</body>
</html>
Alexander;
}