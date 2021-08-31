<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">

	<title>Produto Detalhe</title>
	<link rel="stylesheet" type="text/css" href="../css/detalheplacavideo.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
						<a class="dropdown-item" href="./placamae.php">Placa mãe</a>
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


			<form class="form-inline my-2 my-lg-0" action="listarProdutos.php" method="GET">
				<input class="form-control mr-sm-2" name="nome_produto" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
			</form>

		</div>
	</nav>


	<?php
	if (isset($_GET["btn_comprar"])) produtoDetalhe($_REQUEST["btn_comprar"]);


	function produtoDetalhe($codigo_produto)
	{
		$conexao = new mysqli("localhost", "root", "", "projetopichei");
		$sql = "select * from produto where codigo = '$codigo_produto'";

		$resultado = mysqli_query($conexao, $sql);

		echo '<div class="container">
		<div class="row my-5">';
		while ($obj = mysqli_fetch_object($resultado)) {

			echo '<div class="col-4" id="imagem">
                <img src="../img/produtos/' . $obj->categoria . '/' . $obj->endereco_img . ' "width="120%" height="70%">
        </div>

        <div class="col-1"></div>

        <div class="col-7">
            <p class="price1">' . $obj->titulo . '</p>
            <p class="texto">' . $obj->descritivo . '</p>
            <span class="price2">R$' . $obj->valor . '</span> <br /> <br />
            <div class="button-align">
                <a class="button" href="#">Adicionar ao Carrinho</a>
            </div>

        </div>';
		}

		echo '</div>
		</div>';
	}
	?>

</body>

<footer class="footer mt-auto py-3 bg-dark">
	<div class="container">
		<span class="text-muted">PICHEI INFORMÁTICA® É UMA MARCA REGISTRADA DE BAZINGA E PICHEI INFORMATICA LTDA ©
			2020</span>
	</div>
</footer>

</html>