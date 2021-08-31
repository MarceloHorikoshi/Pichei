<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>

    <link rel="stylesheet" type="text/css" href="./recuperar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>

<body>
    <!--Nave Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../Home/html/home.php">
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
                        <a class="dropdown-item" href="../Home/html/gabinete.php">Gabinete</a>
                        <a class="dropdown-item" href="../Home/html/placavideo.php">Placa de vídeo</a>
                        <a class="dropdown-item" href="../Home/html/processador.php">Processador</a>
                        <a class="dropdown-item" href="../Home/html/memoria.php">Memória</a>
                        <a class="dropdown-item" href="../Home/html/placamae.php">Placa mãe</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a href="/html/buyCart.html"> <button class="btn btn btn-danger my-2 my-sm-0 mx-4" type="submit">
                            <img src="../Home/img/cart.png"> Carrinho</button> </a>

                </li>

                <li class="nav-item active">
                    <a href="./formulario.html"> <button id="cadastro" class="btn btn-secondary" type="submit">
                            Cadastre-se</button> </a>
                </li>
            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
            </form>

        </div>
    </nav>

    <form method="post" class="recuperar">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputEmail4" id="labelInput">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="exemplo@email.com" pattern="(?@\d)" maxlength="50" title="O e-mail precisa ser preenchido com padrão @.com" required name="emailRecuperar">
            </div>
            <br>

            <div class="form-group col-md-3">
                <input type="submit" id="buttonEnviar" class="btn btn-default btn-work" name="enviarEmail" value="Enviar" />
            </div>
        </div>

    </form>

</body>

</html>


<?php


if (isset($_POST["enviarEmail"])) enviarEmailSenha();
function enviarEmailSenha()
{
    $email = $_POST["emailRecuperar"];

    echo '<script>';
    echo 'console.log(' . json_encode($email) . ')';
    echo '</script>';

    $conexao = new mysqli("localhost", "root", "", "projetopichei");
    $sql = "select * from cliente where email like '%$email%'";

    $resultado = mysqli_query($conexao, $sql);
    if ($reg = mysqli_fetch_array($resultado)) {
        $senha = $reg["senha"];

        $para = $email;
        $assunto = "Recuperação de Senha";
        $mensagem = "Sua senha é: "  . md5($senha);
        $header = "MIME-Version: 1.0\r\n";
        $header .= "from: E-mail de recuperação de senha<fatecpwAds2016@outlook.com>";
        mail($para, $assunto, $mensagem, $header);
        echo "<h3 class=reg>Email enviado com sucesso!!!</h3>";
    } else {

        echo "<h3 class=regN> Registro não encontrado!</h3>";
    }
    mysqli_close($conexao);
}
?>