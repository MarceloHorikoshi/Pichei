<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">

	<title>Pichei Placa Mãe</title>
	<link rel="stylesheet" type="text/css" href="../css/placamae.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="./home.php">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh84OO1F2vdrJZd-xLtdtZDln-x7MlTTED8QeL9i85Ps9HtO7i50TRxwMg4vLG_WlV6IA&usqp=CAU" width="30" height="30" class="d-inline-block align-top" alt="">
			Pichei
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Produtos
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="./gabinete.php">Gabinete</a>
						<a class="dropdown-item" href="./placavideo.php">Placa de vídeo</a>
						<a class="dropdown-item" href="./processador.php">Processador</a>
						<a class="dropdown-item" href="./memoria.php">Memória</a>
						<a class="dropdown-item" href="#">Placa mãe</a>
					</div>
				</li>
				<li class="nav-item active">
					<a href="/html/buyCart.html"> <button class="btn btn btn-danger my-2 my-sm-0 mx-4" type="submit">
							<img src="../img/cart.png"> Carrinho</button> </a>

				</li>
				<li class="nav-item active">
					<?php
					//$codigo = $_SESSION["codigo"];


					/*echo '<script>';
                    echo 'console.log(' . json_encode($codigo) . ')';
                    echo '</script>';*/

					if (!(isset($_SESSION['codigo']) && $_SESSION['codigo'] != '')) {

						echo '<a href="../../Login/login.html"> <button id="cadastro" class="btn btn-secondary" type="submit">
                                Login</button> </a>';
					} else {
						echo '<a href="../../Login/perfil.php""> <button id="perfil" class="btn btn-secondary" type="submit">
                        Perfil</button> </a>';

						echo '<a href="../../Login/logout.php"> <button id="logout" class="btn btn-secondary" type="submit">
                        Logout</button> </a>';
					} ?>
				</li>
			</ul>


			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
			</form>

		</div>
	</nav>
	<div align="center">
		<p>
			<a name="topo"></a>
			<font face="Roboto" color="black" size="25">
				<h1>Placa Mãe</b></h1>
			</font>
		</p>
	</div>

	<div id="columns" class="columns_5">
		<?php
		$order_count = 0;
		$conexao = new mysqli("localhost", "root", "", "projetopichei");
		$sql = "select * from produto where categoria like 'mae' order by titulo";

		$resultado = mysqli_query($conexao, $sql);
		while ($obj = mysqli_fetch_object($resultado)) {

			$codigo = $obj->codigo;

			echo '<figure class="order-' . $order_count++ . 'p-2 bd-highlight">
					<img src="../img/produtos/' . $obj->categoria . '/' . $obj->endereco_img . '">
					<figcaption>' . $obj->descritivo . '</figcaption><br />
					<span class="price">R$:' . $obj->valor . '</span>
					<form class="form-inline my-2 my-lg-0" action="./produtoDetalhe.php?btn_comprar=' . $codigo . '" method="GET">
						<button id="BotaoComprar' . $codigo . '" class="button" btn-outline-danger my-2 my-sm-0" name="btn_comprar" type="submit" value="' . $codigo . '">Comprar</button>
            		</form>
					</figure>';
		}
		mysqli_close($conexao);

		?>
		?>
	</div>

</body>

<footer class="footer mt-auto py-3 bg-dark">
	<div class="container">
		<span class="text-muted">PICHEI INFORMÁTICA® É UMA MARCA REGISTRADA DE BAZINGA E PICHEI INFORMATICA LTDA ©
			2020</span>
	</div>
</footer>

</html>