<?php session_start();
$codigo = $_SESSION["codigo"];
$nome = $_SESSION["nome"];
$sobrenome = $_SESSION["sobrenome"];
$idade = $_SESSION["idade"];
$telefone = $_SESSION["telefone"];
$sexo = $_SESSION["sexo"];
$estado = $_SESSION["estado"];
$cidade = $_SESSION["cidade"];
$bairro = $_SESSION["bairro"];
$cep = $_SESSION["cep"];
$endereco = $_SESSION["endereco"];
$complemento = $_SESSION["complemento"];
$numero = $_SESSION["numero"];
$email = $_SESSION["email"];
$cpf = $_SESSION["cpf"];

echo '<script>';
echo 'console.log(' . json_encode($endereco) . ')';
echo '</script>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pichei - Perfil</title>
    <link rel="stylesheet" type="text/css" href="./formulario.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>

<body>

    <!--nav-bar-->
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
                            <img src="../Home/img/cart.png""> Carrinho</button> </a>

                </li>

                <li class=" nav-item active">

                            <a href="./perfil.php""> <button id=" perfil" class="btn btn-secondary" type="submit">
                                Perfil</button> </a>

                    <a href="./logout.php"> <button id="logout" class="btn btn-secondary" type="submit">
                            Logout</button> </a>'
                </li>
            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
            </form>

        </div>
    </nav>

    <!--button criar-->
    <div align="center">
        <p>
            <a name="topo"></a>
            <font face="Roboto" color="black" size="25">
                <h1>Bem vindo ao seu perfil, <?php echo $nome; ?>!</b></h1>
            </font>
        </p>
    </div>

    <!--Formulario-->

    <div class="mx-5 my-5">
        <form method="post" action="processamentoCadastro.php">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome" pattern="[A-Za-zÀ-ú ']{2,}" maxlength="50" title="Digite um nome válido contendo pelo menos 2 caracteres" required name="nome" value="<?php echo htmlspecialchars($nome); ?>">
                </div>
                <div class="form-group col-md-7">
                    <label for="inputSobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite seu sobrenome" pattern="[A-Za-zÀ-ú ']{2,}" maxlength="200" title="Digite seu sobrenome contendo pelo menos 2 caracteres" required name="sobrenome" value="<?php echo htmlspecialchars($sobrenome); ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="inputIdade">Idade</label>
                    <input type="number" class="form-control" id="inputIdade" placeholder="Digite seu nome" pattern="[0-9]" min="10" maxlength="3" title="Digite uma idade válida com até 3 dígitos" required name="idade" <?php echo 'value=' . $idade . ''; ?>>
                </div>
                <div class="form-group col-md-1">
                    <label for="inputSobrenome">Sexo</label>
                    <select id="inputSex" class="form-control" name="sexo">
                        <option selected><?php echo $sexo; ?></option>
                        <option>M</option>
                        <option>F</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCpf">CPF</label>
                    <input type="text" class="form-control" id="inputCpf" placeholder="000.000.000-00" pattern="(?=.*\d)(?=.*[0-9]).{14}" maxlength="14" title="Digite um CPF válido" required name="cpf" <?php echo 'value=' . $cpf . ''; ?>>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTel">Telefone</label>
                    <input type="text" class="form-control" id="inputTel" placeholder="(00) 00000-0000" name="telefone" value="<?php echo htmlspecialchars($telefone); ?>">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="exemplo@email.com" pattern="(?@\d)" maxlength="50" title="O e-mail precisa ser preenchido com padrão @.com" required name="email" <?php echo 'value=' . $email . ''; ?>>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Insira uma senha" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="20" title="A senha precisa conter pelo menos um número, uma letra maiúscula, uma letra minúscula e, pelo menos, 8 caracteres" required name="senha">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="inputAddress">Rua</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Insira sua rua, logradouro, travessa, avenida..." name="endereco" value="<?php echo htmlspecialchars($endereco); ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputNumber">Número</label>
                    <input type="text" class="form-control" id="inputNumber" placeholder="N°" name="numero" <?php echo 'value=' . $numero . ''; ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Complemento</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Bloco, ponto de referência..." name="complemento" value="<?php echo htmlspecialchars($complemento); ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputBairro">Bairro</label>
                    <input type="text" class="form-control" id="inputBairro" placeholder="Insira seu bairro" name="bairro" value="<?php echo htmlspecialchars($bairro); ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Insira sua cidade" name="cidade" value="<?php echo htmlspecialchars($cidade); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control" name="estado">
                        <option selected><?php echo $estado; ?></option>
                        <option>SP</option>
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SE</option>
                        <option>TO</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputZip">CEP</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="00000-000" name="cep" <?php echo 'value=' . $cep . ''; ?>>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="alterar">Alterar</button>
        </form>
    </div>

</body>

<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-muted">PICHEI INFORMÁTICA® É UMA MARCA REGISTRADA DE BAZINGA E PICHEI INFORMATICA LTDA ©
            2020</span>
    </div>
</footer>

<script type="text/javascript">
    $("#inputTel").mask("(00) 00000-0000");
    $("#inputZip").mask("00000-000");
    $("#inputCpf").mask("000.000.000-00");
</script>

</html>