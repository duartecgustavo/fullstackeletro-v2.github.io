<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, tecnologia">

    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="./CSS/bootstrap/global.css">
    <title>Full-Stack-Eletro</title>

    <style>
        @media(max-width: 993px) {
            .desktop {
                display: none !important;
            }
        }

        @media(max-width: 993px) {
            .phone-min {
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

<body style="background-color: #777777; background-image: url('./imgs/bg\ pattern'); ">


    <!-- MENU DESKTOP -->
    <nav class="desktop nav d-flex align-items-center bg-danger" style="height: 12vh; box-shadow: 2px 2px 10px black; ">

        <a class="col-lg-3 d-flex align-items-center justify-content-left" href="index.html" style="height: 100% !important;  ">
            <img class="col-lg-5 p-2" src="./imgs/svgs/logoSVG.svg" style="width: 150px; height: 100% !important;" alt="">
        </a>

        <div class="d-flex col-lg-9">

            <div class="d-flex justify-content-end col-lg-10">
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2" style="font-size: 20px; color: black !important; background-color: rgba(228, 220, 220, 0.651); border-radius: 20px;" href="homeLogado.php">Home</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="produtosLogado.php">Produtos</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="lojasLogado.php">Lojas</a>
                <a class="nav-link2 font-weight-bold text-white text-center col-lg-2 bg-danger" style="font-size: 20px; color: black !important;" href="contatoLogado.php">Contatos</a>
            </div>
            <div class="d-flex justify-content-center align-items-center col-lg-2 mt-2">
                <h5 class="col-lg-7 d-flex justify-content-end">Oi, <?php echo $_SESSION['nome'] ?></h5>
                <div class="dropdown" style="">
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
                    <a class="dropdown-item p-3 dropBar" style="background-color:#E17A84 !important; font-weight: bold;" href="lojas.html">LOJAS</a>
                    <a class="dropdown-item p-3 dropBar" style="background-color:#DB465A !important; font-weight: bold;" href="contato.html">CONTATO</a>
                </div>
            </div>
        </button>
    </nav>
    <!-- /MENU DEVICE -->




    <!-- BANNERS BODY DESKTOP -->


    <div class="desktop container-fluid mb-4" style="">

        <!-- CARROSEL -->
        <div class="container col-sm-10 col-md-10 col-lg-10 col-xl-10 my-4 shad" style="">
            <div id="carouselExampleIndicators" class="shadow carousel slide shadow" data-ride="carousel" style="border-radius: 20px;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="border-radius: 20px;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./imgs/BannerHome.svg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./imgs/BannerHome2.svg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./imgs/BannerHome3.svg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container" style="">

            <div class="row" style="">

                <div class="col-lg-5 d-flex align-items-center justify-content-center">
                    <img src="./imgs/banner1-home.png" alt="" style="box-shadow: 3px 3px 3px black;">
                </div>


                <div class="col-lg-7 container-fluid" style="">
                    <div class="col-lg-12 d-flex justify-content-center" style="">
                        <div class="desktop mx-2 mb-3">
                            <img src="./imgs/banner-home-min.jpg" alt="" style="border-radius: 10px; box-shadow: 3px 3px 3px black;">
                        </div>
                        <div class="desktop mx-2 mb-3">
                            <img src="./imgs/banner-menor-min2.jpg" alt="" style="border-radius: 10px; box-shadow: 3px 3px 3px black;">
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center" style="">
                        <img class="mt-2" src="./imgs/banner-contagem.png" alt="" style="width: 560px; box-shadow: 3px 3px 3px black;">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- BANNERS BODY PHONE -->

    <div class="phone container" style="">
        <div class="row" style="">

            <div class="col-lg-5 d-flex align-items-center justify-content-center my-4">
                <img class="img-fluid" src="./imgs/banner1-home.png" alt="" style="box-shadow: 3px 3px 3px black;">
            </div>


            <div class="col-lg-7 container-fluid m-4" style="">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center" style="">
                    <div class=" mx-2 mb-3">
                        <img class="img-fluid" src="./imgs/banner-home-min.jpg" alt="" style="border-radius: 10px; box-shadow: 3px 3px 3px black;">
                    </div>
                    <div class="mx-2 mb-3">
                        <img class="img-fluid" src="./imgs/banner-menor-min2.jpg" alt="" style="border-radius: 10px; box-shadow: 3px 3px 3px black;">
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center" style="">
                    <img class="mt-2 img-fluid" src="./imgs/banner-contagem.png" alt="" style="width: 560px; box-shadow: 3px 3px 3px black;">
                </div>
            </div>
        </div>
    </div>

    <!-- /Body -->
    <footer class="container-fluid font-weight-bold" style="height: 10vh; font-size: 110%; background-color: rgb(37, 37, 37); position: absolute;">
        <div class="container text-center d-flex align-items-center justify-content-center" style="height: 100%; font-family: 'Rubik', sans-serif; color: rgb(224, 224, 224);">
            ©2020 - Recode Pró - Full-Stack-Eletro
        </div>
    </footer>
    <!-- FOOTER -->


    <script src="./JS/eventos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>