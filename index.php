<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Open Business</title>
	<meta name="description" content="">
	<meta name="author" content="JC">
	<link rel="stylesheet" type="text/css" href="resources/css/main.css">
	<link rel="shortcut icon" href="resources/images/favicon.png" type="image/png">
</head>
<body>
	<div id="container">
		<div id="head">
			<a href="/"><div id="logo"></div></a>
			<div class="menu">
				<!--<span class="fecha-hora">Lima, 28 de febrero del 2013</span>-->
				<nav>
					<?php
						$mod = isset($_GET['mod']) ? $_GET['mod'] : null;
						$pro; $cli; $con;
						switch ($mod) {
							case 'productos':
								$pro = 'active';
								break;
							case 'clientes':
								$cli = 'active';
								break;
							case 'contactenos':
								$con = 'active';
								break;
							default:
								$pro = 'active';
								break;
						}
					?>
					<a href="?mod=productos" class="border-round <?php echo $pro; ?>">Productos</a>
					<a href="?mod=clientes" class="border-round <?php echo $cli; ?>">Clientes</a>
					<a href="?mod=contactenos" class="border-round <?php echo $con; ?>">Contactanos</a>
				</nav>
			</div>
		</div>
		<div class="separador"></div>
		<?php

		if($_GET){
			$mod = isset($_GET['mod']) ? $_GET['mod'] : null;
			$cat = isset($_GET['cat']) ? $_GET['cat'] : null;
			switch ($mod) {
				case 'productos':
					switch ($cat) {
						/*enlace a los productos*/
						case 'ticketeras':
							include_once("$cat.php");
							break;
						/*end*/
						default:
							include_once('categorias.php');
							break;
					}
					break;
				case 'clientes':
					include_once('clientes.php');
					break;
				case 'contactenos':
					include_once('contactenos.php');
					break;
				default:
					include_once('categorias.php');
					break;
			}
		} else {
			include_once('categorias.php');
		}

		?>
		<div class="separador"></div>
		<div id="pie">
			<div id="copy">&copy;2013 Open Business</div>
			<div class="menu">
				<nav>
					<a href="?mod=productos" class="<?php echo $pro; ?>">Productos</a>
					<a href="?mod=clientes" class="<?php echo $cli; ?>">Clientes</a>
					<a href="?mod=contactenos" class="<?php echo $con; ?>">Contactanos</a>
				</nav>
			</div>
		</div>
	</div>
</body>
</html>