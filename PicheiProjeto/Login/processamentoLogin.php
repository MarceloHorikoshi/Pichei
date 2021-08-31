<?php
if (isset($_POST["btn_login"])) fazerLogin();
function fazerLogin()
{
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $conexa = new mysqli("localhost", "root", "", "projetopichei");
    $sql = "select * from cliente where email='$email' and senha=md5('$senha')";

    $resultado = mysqli_query($conexa, $sql);
    if ($reg = mysqli_fetch_array($resultado)) {
        session_start();

        $_SESSION["codigo"] = $reg["codigoCliente"];
        $_SESSION["nome"] = $reg["nome"];
        $_SESSION["sobrenome"] = $reg["sobrenome"];
        $_SESSION["idade"] = $reg["idade"];
        $_SESSION["telefone"] = $reg["telefone"];
        $_SESSION["sexo"] = $reg["sexo"];
        $_SESSION["estado"] = $reg["estado"];
        $_SESSION["cidade"] = $reg["cidade"];
        $_SESSION["bairro"] = $reg["bairro"];
        $_SESSION["cep"] = $reg["cep"];
        $_SESSION["endereco"] = $reg["endereco"];
        $_SESSION["complemento"] = $reg["complemento"];
        $_SESSION["numero"] = $reg["numero"];
        $_SESSION["email"] = $reg["email"];
        $_SESSION["cpf"] = $reg["cpf"];

        /*$nome = $_SESSION["nome"];
        echo '<script>';
                    echo 'console.log(' . json_encode($nome) . ')';
                    echo '</script>';*/

        header("location: ../Home/html/home.php");
        exit();
    } else {
        session_start();
        session_destroy();
        header("location: ./login.html");
        echo "<h3>Usuario e senha invalidos !</h3>";
    }
    mysqli_close($conexa);
}
