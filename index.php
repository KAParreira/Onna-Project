<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="button.css">

    <link rel="stylesheet" type="text/css" href="Footerdido.css">

    <title>Onna Estética</title>
    <link rel="icon" href="IMG/icon.png">
</head>

<body>
    <div class="aa">
        <div class="navBar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="wrapper">
                                <a href="./index.php"><span>Home</span></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="wrapper">
                                <a href="#Servicos"><span>Serviços</span></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="wrapper">
                                <a href="#SobreNos"><span>Sobre nós</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="navbar-brand" href="#"><img src="./IMG/Logo2.png" style="width:150px;"></div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="wrapper">
                                <a href="#Funcionarios"><span>Funcionários </span></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="wrapper">
                                <a href="#footer"><span>Contato </span></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="wrapper">
                                <a href="#Login" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span>Login</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#FF00FF; ">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./Sistema-Login/validarAcesso.php" method="post">
                            <input class="mudal" type="text1" name="txtUsuario" placeholder="Usuário">
                            <input class="mudal" type="password" name="txtSenha" placeholder="Senha">
                    </div>
                    <div class="modal-footer">
                        <a href="otario.html"> <span> Esqueci a senha </span></a>
                        <input class="butao" type="submit" name="Entrar" id="Entrar" value="Entrar">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <!-- CAROUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./IMG/carroca1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./IMG/carroca2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./IMG/carroca3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
        <div class="carroca">
            <br>
        </div>
    </div>
    </div>
    <br>
    <div class="container-fluid">

        <!-- SERVIÇOS -->
        <div class="cards" id="Servicos">
            <h3>SERVIÇOS</h3>
            <div class="row">
                <div class="col-sm">
                    <div class="card" style="width: 95%;">
                        <div class="btnCard">
                            <img src="./IMG/servico1.jpg" class="card-img-top" alt="...">
                            <h5 class="card-title">MÁSCARA DE LED</h5>
                            <p class="card-text">Ação antioxidante, clareadora, rejuvenescimento e tratamento de poros dilatados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 95% ;">
                        <div class="btnCard">
                            <img src="./IMG/servico2.jpg" class="card-img-top" alt="...">
                            <h5 class="card-title">MASSAGEM MODELADORA</h5>
                            <p class="card-text">As massagens atuam na redução de medidas e melhoram o aspecto do FEG na pele.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 95%;">
                        <div class="btnCard">
                            <img src="./IMG/servico3.jpg" class="card-img-top" alt="...">
                            <h5 class="card-title">PEELING</h5>
                            <p class="card-text">Minimização de manchas através de um processo de renovação da camada mais superficial da pele.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 95% ;">
                        <div class="btnCard">
                            <img src="./IMG/servico4.jpg" class="card-img-top" alt="...">
                            <h5 class="card-title">PREENCHIMENTO</h5>
                            <p class="card-text">Corrigir os sulcos da face, além de agir como preenchedor, e também hidratação da pele.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="sobreNos" id="SobreNos">
            <div class="box">
                <h3>SOBRE NÓS</h3>
                <p class="texto"> A clínica Onna foi fundada em 1949 na região da grande São Paulo, com o foco de iniciar uma revolução a favor <br>
                    da republica popular da China, trabalhando durante anos com resiliência à espera da chegada do partido ao topo<br>
                    do mundo (previsto para 2050) 中國萬歲！</p>
                <h3>NOSSO ESPAÇO</h3>

                <?php
                $gallery = array(
                    1 => "place1",
                    2 => "place2",
                    3 => "place3",
                );

                echo ('<div class="row align-items-center">');

                for ($i = 1; $i <= 3; $i++) {
                    $see = '
                     <div class="col-sm-4">
                     <div class="zoom">
                     <div class="card" style="width: 100%;">
                     <img src=./IMG/' . $gallery[$i] . '.jpg class="img-fluid" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exp1">
                     </div>
                     </div>
                    </div>              
                    ';
                    echo ($see);
                }  ?>
            </div>
        </div>
        <br>

        <!-- FUNCIONARIOS -->
        <div class="row" id="Funcionarios">
            <h3>FUNCIONÁRIOS</h3>
            <div class="d-flex justify-content-center">
                <div class="col-sm-3">
                    <div class="zoom">
                        <div class="card" style="width: 90%;">
                            <div class="btnCard">
                                <img src="./IMG/profissional2.png" class="card-img-top" alt="...">
                                <h5 class="card-title">Vanessa Biomédica em Estética</h5>
                                <p class="card-text"> Mestre em Ciência e Tecnologia em saúde</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="zoom">
                        <div class="card" style="width: 90%;">
                            <div class="btnCard">
                                <img src="./IMG/profissional4.jpg" class="card-img-top" alt="...">
                                <h5 class="card-title">Aline PHD em Biomedicina Estética</h5>
                                <p class="card-text">Especializada em estética facial e corporal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="zoom">
                        <div class="card" style="width: 90%;">
                            <div class="btnCard">
                                <img src="./IMG/profissional2.jpg" class="card-img-top" alt="...">
                                <h5 class="card-title">Rosangela Técnica em Estética</h5>
                                <p class="card-text">Especializada em estética corporal e facial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>



        <!-- Footer -->
        <footer id="footer" class="footer">

            <div class="footer-content">

                <div class="container">

                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                                <img src="IMG/Logo2.png" height="32%">
                                    <br><br>

                            <p>
                                Clínica especializada em Tratamentos Estéticos, Cirurgia Plástica, Acupuntura, Massagens entre outras especialidades.
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <div class="footer-info">
                                <h4>Unidades</h4>
                                <p>
                                    R. Felíciano de Mendonça, 290<br>
                                    Guaianases, São Paulo - SP<br>
                                    CEP: 08460-365 <br><br>
                                <p>
                                    Av. Brg. Faria Lima, 2232<br>
                                    Jardim Paulistano, São Paulo - SP<br>
                                    CEP: 01451-000
                                </p>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-5">
                            <div class="footer-info">
                                <h4>Contatos</h4>
                                <p>
                                    (11) 4642-5544 / (11) 5544-4642<br>
                                    contato@Onnaestetica.com.br <br><br>
                                <p>
                                    (11) 2551-9484 / (11) 4002-8922<br>
                                    contato@Onnaestetica.com.br
                                </p>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-5 footer-newsletter ">
                            <h4>Esqueci pra q era pra ser isso</h4>
                            <form action="" method="post">
                                <input type="email" name="email" placeholder="Email"><br><br>
                                <input type="text"  name="nome" placeholder="Nome completo" aria-required="true"><br>
                                <input type="submit" value="Salve">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-legal text-center">
                <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                    <div class="d-flex flex-column align-items-center align-items-lg-start">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Onna</span></strong>. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- Footer -->

        <a  href="index.php">
        <x class="btn" role="button"><img src="./IMG/Logo2.png" style="width:150px;"></x>
        </a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>