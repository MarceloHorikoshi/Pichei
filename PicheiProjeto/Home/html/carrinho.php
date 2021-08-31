<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pichei - Carrinho de Compras</title>

    <link rel="stylesheet" type="text/css" href="/css/buyCart.css">
</head>

<body class="skin-light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!--Nave Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./home.html">
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
                        <a class="dropdown-item" href="./gabinete.html">Gabinete</a>
                        <a class="dropdown-item" href="./placavideo.html">Placa de vídeo</a>
                        <a class="dropdown-item" href="./processador.html">Processador</a>
                        <a class="dropdown-item" href="./memoria.html">Memória</a>
                        <a class="dropdown-item" href="./placamae.html">Placa mãe</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a href="/html/buyCart.html"> <button class="btn btn btn-danger my-2 my-sm-0 mx-4" type="submit">
                            <img src="/img/cart.png"> Carrinho</button> </a>

                </li>

                <li class="nav-item active">
                    <a href="./formulario.html"> <button class="btn btn-secondary" type="submit">
                            Cadastre-se</button> </a>
                </li>
            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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


    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Produto</th>
                    <th style="width:20%">Preço</th>
                    <th style="width:10%">Quantidade</th>
                    <th style="width:10%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                <table id="resultado" border="1">
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs mx-1" id="corrigirImagem"><a href="/html/0_detalheplacavideo.html"><img src="https://media.pichau.com.br/media/catalog/product/cache/6ee86225acc73f593166d49264424d36/t/u/tuf-rx6800xt-o16g-gaming-7.jpg" alt="gabineteCompra" class="img-responsive" width="200%" /></a></div>
                                <div class="col-sm-7 mx-4">
                                    <h4 class="nomargin">Placa de Vídeo</h4>
                                    <p>PLACA DE VIDEO ASUS RADEON RX 6800 XT OC 16GB TUF GAMING </p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">
                            R$ <p style="display:inline" id="precoProduto3">10999.86</p>
                        </td>
                        <td data-th="Quantity" widht="10px">
                            <input id="qtProd3" type="number" style="text-align:right" onchange="multiplicacao3()" value="0">
                        </td>
                        <td data-th="Subtotal" class="text-center">
                            <input type="text" id="res3" style="text-align:center" value=0 readonly>
                        </td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="./home.html" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                            Comprando</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total: R$ <input type="text" id="totalTudo" style="text-align:center" readonly /> </strong></td>
                    <td><a href="#" class="btn btn-success btn-block">Finalizar</a>
                    </td>
                </tr>

            </tfoot>
        </table>
        </table>
    </div>


</body>

<footer id="footer" class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-muted">PICHEI INFORMÁTICA® É UMA MARCA REGISTRADA DE BAZINGA E PICHEI INFORMATICA LTDA ©
            2020</span>
    </div>
</footer>

</html>

<script lang="javascript">
    $(<?php '#adicionarCarrinho' . $codigo; ?>).click(function() {
        var x = $(<?php '#BotaoComprar' . $codigo; ?>).val();
        $.ajax({
            url: 'buscaCarrinho.php',
            type: 'GET',
            data: {
                busca: x
            },
            success: function(response) {
                $("#resultado").html(response);
            },
            error: function() {
                alert("error");
            }
        });
    });


    function multiplicacao() {
        if (qntdProduto.value == "" || isNaN(qntdProduto.value)) { //isNaN is not a number
            alert("Informe um valor para n1 !");
            qntdProduto.value = "";
            qntdProduto.focus();
            return false;
        }

        var precoNumero = parseFloat($('#precoProduto1').text());
        if (precoNumero.value == "") { //isNaN is not a number
            alert("Informe um valor para n2 !");
            precoNumero.value = "";
            precoNumero.focus();
            return false;
        }

        var a = parseFloat(qntdProduto.value);
        var b = a * precoNumero;
        resultado.value = b.toFixed(2);

        total();
    }

    function multiplicacao2() {
        if (qtProd2.value == "" || isNaN(qtProd2.value)) { //isNaN is not a number
            alert("Informe um valor para n1 !");
            qtProd2.value = "";
            qtProd2.focus();
            return false;
        }

        var prNum2 = parseFloat($('#precoProduto2').text());
        if (prNum2.value == "") { //isNaN is not a number
            alert("Informe um valor para n2 !");
            prNum2.value = "";
            prNum2.focus();
            return false;
        }

        var c = parseFloat(qtProd2.value);
        var d = c * prNum2;
        res2.value = d.toFixed(2);

        total();
    }

    function multiplicacao3() {
        if (qtProd3.value == "" || isNaN(qtProd3.value)) { //isNaN is not a number
            alert("Informe um valor para n1 !");
            qtProd3.value = "";
            qtProd3.focus();
            return false;
        }

        var prNum3 = parseFloat($('#precoProduto3').text());
        if (prNum3.value == "") { //isNaN is not a number
            alert("Informe um valor para n2 !");
            prNum3.value = "";
            prNum3.focus();
            return false;
        }

        var e = parseFloat(qtProd3.value);
        var f = e * prNum3;
        res3.value = f.toFixed(2);

        total();
    }

    function total() {
        var parcial1 = parseFloat(resultado.value);
        var parcial2 = parseFloat(res2.value);
        var parcial3 = parseFloat(res3.value);
        var totalmesmo = parcial1 + parcial2 + parcial3;

        totalTudo.value = totalmesmo.toFixed(2);
    }
</script>