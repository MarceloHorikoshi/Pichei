<?php

if (isset($_POST["enviar"])) cadastrar();
if (isset($_POST["b2"])) pesquisar($_POST["codigo"]);
if (isset($_POST["alterar"])) alterar();
if (isset($_POST["b4"])) remover();
if (isset($_GET["codigo"])) pesquisar($_GET["codigo"]);

function cadastrar()
{

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];


    $conexao = new mysqli("localhost", "root", "", "projetopichei");

    $sql = "insert into cliente(nome, sobrenome, idade, telefone, sexo,estado, cidade, bairro, cep, endereco, complemento, numero, email, cpf, senha) 
    values('$nome', '$sobrenome', '$idade', '$telefone', '$sexo','$estado', '$cidade', '$bairro', '$cep', '$endereco', '$complemento', '$numero', '$email', '$cpf', md5('$senha'))";

    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        mysqli_close($conexao);
        //echo "<h3> Cadastro efetuado com sucesso!</h3>";
        session_start();
        header("location: ./login.html");
    } else {
        mysqli_close($conexao);
        session_start();
        session_destroy();
        header("location: ./formulario.html");
        // echo "<h3> Cadastro não efetuado--(CPF ou email já existentes)</h3>";
    }
}

function pesquisar($codigo)
{

    $conexao = new mysqli("localhost", "root", "", "pwn");
    $sql = "select * from produto where codigo = $codigo";
    $resultado = mysqli_query($conexao, $sql);
    if ($reg = mysqli_fetch_array($resultado)) {
        echo "<script lang='javascript'>";
        echo "codigo.value = '" . $reg["codigo"] . "';";
        echo "titulo.value = '" . $reg["titulo"] . "';";
        echo "descritivo.value = '" . $reg["descritivo"] . "';";
        echo "valor.value = '" . $reg["valor"] . "';";
        echo "quantidade.value = '" . $reg["quantidade"] . "';";
        echo "categoria.value = '" . $reg["categoria"] . "';";
        echo "</script>";
    } else {
        echo "<h3> Registro não encontrado!!!</h3>";
    }
    mysqli_close($conexao);
}

function alterar()
{
    session_start();
    $codigo = $_SESSION["codigo"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $idade = $_POST["idade"];
    $telefone = $_POST["telefone"];
    $sexo = $_POST["sexo"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $complemento = $_POST["complemento"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $conexao = new mysqli("localhost", "root", "", "projetopichei");
    $sql = "update cliente set 
    nome='$nome', 
    sobrenome='$sobrenome', 
    idade='$idade', 
    telefone='$telefone',
    sexo='$sexo',
    estado='$estado', 
    cidade='$cidade', 
    bairro='$bairro', 
    cep='$cep',
    endereco='$endereco',
    complemento='$complemento', 
    numero='$numero', 
    email='$email', 
    cpf='$cpf',
    senha = md5('$senha')   
    where codigoCliente=$codigo";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    session_start();
    session_destroy();
    header("location: ./login.html");
}

function remover()
{
    $codigo = $_POST["codigo"];

    $conexao = new mysqli("localhost", "root", "", "pwn");
    $sql = "delete from produto where codigo=$codigo";
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    echo "<h3> Registro removido com sucesso!!</h3>";
}
