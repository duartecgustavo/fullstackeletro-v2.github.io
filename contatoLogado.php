<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, loja_virtual, contato">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/bootstrap/bootstrap.css">
    <title>Full-Stack-Eletro</title>

    <script src="./JS/eventos.js"></script>

    <style>
        @media(max-width: 993px) {
            .desktop {
                display: none !important;
            }
        }

        @media(min-width: 993px) {
            .phone {
                display: none !important;
            }
        }
    </style>

</head>

<body style="background-color: rgb(240, 240, 240);">

    <!-- MENU DESKTOP -->
    <nav class="desktop nav d-flex align-items-center bg-danger" style="height: 12vh; box-shadow: 2px 2px 10px black; ">

        <a class="col-lg-3 d-flex align-items-center justify-content-left" href="index.html" style="height: 100% !important;  ">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" style="width: 150px; height: 100% !important;" alt="">
        </a>

        <div class="d-flex col-lg-9">

            <div class="d-flex justify-content-end col-lg-10">
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="homeLogado.php">Home</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="produtosLogado.php">Produtos</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="lojasLogado.php">Lojas</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2" style="font-size: 20px; color: black !important; background-color: rgba(228, 220, 220, 0.651); border-radius: 20px;" href="contatoLogado.php">Contatos</a>
            </div>
            <div class="d-flex justify-content-center align-items-center col-lg-2">
                <h5 class="col-lg-7 d-flex justify-content-end">Oi, <?php echo $_SESSION['nome'] ?></h5>
                <div class="dropdown">
                    <button class="btn text-white rounded-circle dropdown-toggle mb-1 p-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #292929; box-shadow: 3px 3px 5px black;">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item py-2" href="perfilUsuario.php">Meu perfil</a>   
                        <a class="dropdown-item py-2" href="./conexao_BD/sair.php">Sair</a>
                    </div>
                </div>
            </div>

        </div>

    </nav>
    <!-- /MENU DESKTOP -->

    <!-- MENU DEVICE -->
    <nav class="phone nav row align-items-center bg-danger" style="height: 15vh; box-shadow: 2px 2px 10px black;">

        <a class="col-6 col-sm-6 col-md-6 col-lg-6 d-flex align-items-center justify-content-left" href="index.html" style="height: 100% !important;">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" style="width: 150px; height: 100% !important;" alt="">
        </a>


        <button class="navbar-toggler col-5 col-sm-5 col-md-5 col-lg-5 d-flex align-items-center justify-content-end bg-danger pr-4" type="button" style="height: 100%;">
            <div class="dropdown">
                <a class="btn navbar-toggler-icon" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="mx-auto my-auto" src="./imgs/svgs/seta-para-baixo-do-angulo.svg" alt="" style="width: 20px;">
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="width: 80vw;" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item p-3 dropBar" style="background-color:#DB465A !important; font-weight: bold;" href="index.html">HOME</a>
                    <a class="dropdown-item p-3 dropBar" style="background-color:#E17A84 !important; font-weight: bold;" href="produtos.php">PRODUTOS</a>
                    <a class="dropdown-item p-3 dropBar" style="background-color:#DB465A !important; font-weight: bold;" href="contato.html">CONTATO</a>
                </div>
            </div>
        </button>
    </nav>
    <!-- /MENU DEVICE -->

    <div style="display: flex ; align-items: center; justify-content: center; height: 78vh;">

        <div class="container-fluid">

            <h3 class="text-center " style="color:#DC3545; font-weight: 800;">ENTRE EM CONTATO!</h3>

            <div class="row d-flex align-items-center justify-content-center;">

                <form class="col-12 col-sm-12 col-md-8 col-lg-4 col-xl-4 p-4 mx-auto" action="" style="background-color: #ffffff;  box-shadow: 5px 5px 2px black;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="digite sua senha">
                    </div>
                    <div>
                        <label for="validationTextarea">Mensagem</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="O que está pensando?"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn mt-3 font-weight-bold" style="width: 100%; border: 3px solid #DC3545; color: #DC3545;">ENVIAR</button>
                    </div>

                    <div class="text-center mt-4">
                        <a href=""><img class="mx-2" src="./imgs/wpp.svg" alt=""></a>
                        <a href=""><img class="mx-2" src="./imgs/instagram.svg" alt=""></a>
                        <a href=""><img class="mx-2" src="./imgs/twitter.svg" alt=""></a>
                        <a href=""><img class="mx-2" src="./imgs/github.svg" alt=""></a>
                        <a href=""><img class="mx-2" src="./imgs/email.svg" alt=""></a>
                    </div>
                </form>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <footer class="container-fluid font-weight-bold" style="height: 10vh; font-size: 110%; background-color: rgb(37, 37, 37);">
        <div class="container text-center d-flex align-items-center justify-content-center" style="height: 100%; font-family: 'Rubik', sans-serif; color: rgb(224, 224, 224);">
            ©2020 - Recode Pró - Full-Stack-Eletro
        </div>
    </footer>

    <script src="./JS/eventos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>