<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Pichei - Home</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <!--Nave Bar-->
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

    <!--Nave Bar-->

    <div align="center">
        <p>
            <a name="topo"></a>
            <font face="Roboto" color="black" size="25">
                <h1>Pichei Produtos</b></h1>
            </font>
        </p>
    </div>

    <div id="bannerimage"></div>

    <div align="center" class="container-lg my-3">
        <?php

        $conexao = new mysqli("localhost", "root", "", "projetopichei");
        $sql = "select * from produto where destaque = 1 order by titulo";

        $resultado = mysqli_query($conexao, $sql);
        $order_count  = 0;

        echo '<h1 class="produtosEmDestaque">Produtos em Destaque</h1>
                        <div id="columns" class="container">';

        echo '<div class="row">';
        while ($obj = mysqli_fetch_object($resultado)) {

            echo '<div class="column">';
            echo '<figure class="order-' . $order_count++ . 'p-2 bd-highlight">
                            <img class="figura" src="../img/produtos/' . $obj->categoria . '/' . $obj->endereco_img . '">
                            <figcaption>' . $obj->descritivo . '</figcaption><br />
                            <form class="form-inline my-2 my-lg-0" action="./produtoDetalhe.php?btn_comprar=' . $obj->codigo . '" method="GET">
						<button id="BotaoComprar1" class="button" btn-outline-danger my-2 my-sm-0" name="btn_comprar" type="submit" value="' . $obj->codigo . '">Comprar</button>
            		</form><br>
                            <span class="price">R$' . $obj->valor . '</span>
                        </figure>';
            echo '<div class="column">';
        }

        echo '</div>';
        echo '</div>';

        mysqli_free_result($resultado);
        mysqli_close($conexao);
        ?>
    </div>


    <div align="center" style="padding-top: 20px;">
        <p>
            <a name="flexTitulo"></a>
            <font face="Roboto" color="black" size="25">
                <h1>Categorias</b></h1>
            </font>
        </p>
    </div>

    <ul class="flex-container">
        <li class="flex-item">
            <h4 class="fonteFlexBox">Gabinetes</h4>
            <a href="./gabinete.php"><img class="imgFlexbox" src="../img/Flexbox/cpu-tower.png" alt="Gabinete"></a>
        </li>
        <li class="flex-item">
            <h4 class="fonteFlexBox">Processadores</h4>
            <a href="./processador.php"><img class="imgFlexbox" src="../img/Flexbox/cpu.png" alt="Processador"></a>
        </li>
        <li class="flex-item">
            <h4 class="fonteFlexBox">Placas-Mãe</h4>
            <a href="./placamae.php"><img class="imgFlexbox" src="../img/Flexbox/motherboard.png" alt="Placa-Mãe"></a>
        </li>
        <li class="flex-item">
            <h4 class="fonteFlexBox">Memórias-Ram</h4>
            <a href="./memoria.php"><img class="imgFlexbox" src="../img/Flexbox/ram.png" alt="Memória-Ram"></a>
        </li>
        <li class="flex-item">
            <h4 class="fonteFlexBox">Placas-de-Vídeo</h4>
            <a href="./placavideo.php"><img class="imgFlexbox" src="../img/Flexbox/video-card.png" alt="Placa-de-Vídeo"></a>
        </li>
    </ul>

    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container">
            <span class="text-muted">PICHEI INFORMÁTICA® É UMA MARCA REGISTRADA DE BAZINGA E PICHEI INFORMATICA LTDA ©
                2020</span>
        </div>
    </footer>

</body>

</html>