<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('img/fotosedev/icone.png')}}" type="image/png">
        <title>Você Que Manda !</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    </head>

    <body>

        <!--================ Start Header Menu Area =================-->
        <div class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <header class="fixed-menu">
            <span class="menu-close"><i class="fa fa-times"></i></span>
            <div class="menu-header">
                <div class="logo d-flex justify-content-center">
                    <img src="{{ asset('img/fotosedev/logo.png')}}" alt="">
                </div>
            </div>
            <div class="nav-wraper">
                <div class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="#home"><img src="{{ asset('img/header/nav-icon1.png')}}" alt="">
                                Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sobre"><img src="{{ asset('img/header/nav-icon2.png')}}"
                                                                                    alt="">Sobre nos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cadastro"><img src="{{ asset('img/header/nav-icon3.png')}}"
                                                                                       alt="">Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cardapio"><img src="{{ asset('img/header/nav-icon4.png')}}"
                                                                                       alt="">Cardápio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contato"><img src="{{ asset('img/header/nav-icon8.png')}}"
                                                                                      alt="">Contato</a></li>
                        <li class="nav-item" data-toggle="modal" data-target="#exampleModal"><a class="nav-link"
                                                                                                style="cursor: pointer;"><img src="{{ asset('img/header/nav-icon3.png')}}" alt="">Login</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!--================ End Header Menu Area =================-->

        <div class="site-main">
            <!--================ Start Home Banner Area =================-->
            <section class="home_banner_area" id="home">
                <div class="banner_inner">
                    <div class="container-fluid no-padding">
                        <div class="row fullscreen">

                        </div>
                    </div>
                </div>
            </section>
            <!-- Start banner bottom -->
            <div class="row banner-bottom align-items-center justify-content-center">
                <!-- <div class="col-lg-4">
                        <div class="video-popup d-flex align-items-center">
                                <a class="play-video video-play-button animate" href="https://www.youtube.com" data-animate="zoomIn"
                                 data-duration="1.5s" data-delay="0.1s">
                                        <span><img src="img/banner/play-icon.png" alt=""></span>
                                </a>
                                <div class="watch">
                                        <h6>Watch video</h6>
                                        <p>You will love our execution</p>
                                </div>
                        </div>
                </div> -->
                <div class="col-lg-8">

                    <div id="inicio">
                        <div class="banner_content">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-8 col-md-12">
                                    <p class="top-text">Seja bem vindo ao nosso site.</p>
                                    <h1>Você Que Manda, um novo conceito em pastelaria.</h1>
                                    <p>Monte agora mesmo o seu pastel, de acordo com o seu gosto e o seu bolso, aqui você é
                                        o
                                        chefe!</p>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="banner-btn">
                                        <a class="primary-btn text-uppercase" href="#cardapio">Cardápio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- End banner bottom -->
            <!--================ End Home Banner Area =================-->



            <!--================ Start Lunch Area =================-->
            <div class="breakfast-area lunch-area section_gap">
                <div class="container">
                    <div id="sobre">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 ">
                                <div class="right-img">
                                    <img class="img1 img-fluid" src="{{ asset('img/fotosedev/img2.jpg')}}" alt="">
                                    <img class="img2 img-fluid" src="{{ asset('img/fotosedev/img4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <div class="left-content">
                                    <h1>Sobre a pastelaria </h1>
                                    <p>A ideia da <strong>Pastelaria Você Que Manda </strong>é tornar o seu pastel
                                        totalmente ao
                                        seu gosto, intencionamos sempre a satisfação do cliente, com esse conceito você se
                                        torna
                                        o chefe do seu proprio pastel, onde poderá monta-lo da sua maneira.</p>
                                    <p>Nossa preocupação é facilitar a sua comodidade, pensando nisso, lançamos este site,
                                        onde
                                        você poderá realizar os seus pedidos, de uma maneira rapida e pratica. </p>
                                    <a href="#cardapio" class="primary-btn">Veja o nosso cardápio</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--================ End Lunch Area =================-->


            <!--================ Start Reservstion Area =================-->
            <div id="cadastro">
                <section class="reservation-area section_gap_top">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 offset-lg-6">
                                <div class="contact-form-section">
                                    <h1>Cadastre-se agora</h1>
                                    <form class="contact-form-area contact-page-form contact-form text-right" id="myForm"
                                          action="mail.html" method="post">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="Nome completo" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Nome'">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="email" class="form-control" id="email" name="email"
                                                   placeholder="Email" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Email'">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="telefone" name="telefone"
                                                   placeholder="Telefone" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Telefone'">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="cep" name="cep" placeholder="Cep"
                                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cep'">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="rua" name="rua"
                                                   placeholder="Endereço" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Endereço'">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="bairro" name="bairro"
                                                   placeholder="Bairro" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Bairro'">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="numero" name="numero"
                                                   placeholder="Numero" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Numero'">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" id="complemento" name="complemento"
                                                   placeholder="Ponto de referência" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Ponto de referência'">
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button class="primary-btn text-uppercase">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--================ End Reservstion Area =================-->

            <!--================ Start Chef Area =================-->

            <div id="cardapio">
                <div class="chef-area section_gap_top">
                    <div class="container">
                        <br />
                        <center>
                            <h1>Nosso cardápio</h1>
                        </center><br />
                        <div class="row menu_inner" style="border: 2px solid black;padding: 10%; border-radius: 0px;">
                            <div class="col-lg-5">
                                <div class="menu_list">
                                    <h1>Tamanho das massas</h1>
                                    <ul class="list">
                                        <li>
                                            <h4>Pastel de 20 cm
                                                <span>$1,30</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Pastel de 20 cm
                                                <span>$2,00</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Pastel de 20 cm
                                                <span>$2,70</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                    </ul>
                                </div>

                                <div class="menu_list">
                                    <h1>Bebidas</h1>
                                    <ul class="list">
                                        <li>
                                            <h4>Coca cola 350 ml
                                                <span>$3,50</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Refri, Sabores 350 ml
                                                <span>$3,50</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Coca cola 2l
                                                <span>$8,00</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Refri, Sabores 2l
                                                <span>$7,00</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-5 offset-lg-1">
                                <div class="menu_list res-mr">
                                    <h1>Recheios</h1>
                                    <ul class="list">
                                        <li>
                                            <h4>Queijo coalho 20g
                                                <span>$1,50</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Queijo mussarela 20g
                                                <span>$1,50</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Carne Moída 20g
                                                <span>$0,90</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Frango 20g
                                                <span>$0,90</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4> Carne do sol 20g
                                                <span>$1,50</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Calabresa 20g
                                                <span>$0,80</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Ovo - unidade
                                                <span>$0,80</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Bacon 20g
                                                <span>$0,80</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Presunto 20g
                                                <span>$0,80</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Requeijão 20g
                                                <span>$0,55</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Catupiry 20g
                                                <span>$0,80</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Cheddar 20g
                                                <span>$1,05</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Azeitona 10g
                                                <span>$0,50</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Milho verde 10g
                                                <span>$0,20</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Palmito (15g)
                                                <span>$1,60</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Verdura 10g
                                                <span>$0,10</span>
                                            </h4>
                                            <p>(Cebola, tomate e pimentão)</p>
                                        </li>
                                        <li>
                                            <h4>Goiabada 20g
                                                <span>$0,85</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                        <li>
                                            <h4>Brigadeiro 20g
                                                <span>$0,70</span>
                                            </h4>
                                            <p></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================ End Chef Area ================= -->

                <!--================ Start Food Gallery Area =================-->
                <!-- <section class="section_gap_top food-gallery-area">
                        <center>
                                <h1>Portifolio</h1>
                        </center><br />
                        <div class="container-fluid no-padding">
                                <div class="row owl-carousel active-food-gallery">
                                         single gallery item
                                        <div class="single-gallery-item">
                                                <img class="img-fluid" src="img/food/food5.jpg" alt="">
                                        </div>
                                         single gallery item
                                        <div class="single-gallery-item">
                                                <img class="img-fluid" src="img/food/food6.jpg" alt="">
                                        </div>
                                         single gallery item
                                        <div class="single-gallery-item">
                                                <img class="img-fluid" src="img/food/food7.jpg" alt="">
                                        </div>
                                         single gallery item
                                        <div class="single-gallery-item">
                                                <img class="img-fluid" src="img/food/food8.jpg" alt="">
                                        </div>
                                         single gallery item
                                        <div class="single-gallery-item">
                                                <img class="img-fluid" src="img/food/food6.jpg" alt="">
                                        </div>
                                         single gallery item
                                        <div class="single-gallery-item">
                                                <img class="img-fluid" src="img/food/food8.jpg" alt="">
                                        </div>
                                </div>
                        </div>
                </section> -->
                <!--================ End Food Gallery Area =================-->

                <!--================ Start Brands Area =================-->
                <div id="contato">
                    <section class="brands-area section_gap">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="main_title">
                                        <h1>Contato</h1>
                                        <p>Contate - nos em nossas redes sociais, tire duvidas ou faça sugestões!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="contact1">
                                        <div class="container-contact1">
                                            <div class="contact1-pic js-tilt" data-tilt>
                                                <img src="img/fotosedev/logow.png" alt="IMG">
                                            </div>

                                            <div class="contact1-form validate-form">

                                                <div class="wrap-input1 validate-input" data-validate="O campo nome é obrigatorio!">
                                                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Seu nome">
                                                    <span class="shadow-input1"></span>
                                                </div>

                                                <div class="wrap-input1 validate-input" data-validate="O campo assunto é obrigatorio!">
                                                    <input class="form-control" type="text" name="assunto" id="assunto" placeholder="assunto">
                                                    <span class="shadow-input1"></span>
                                                </div>

                                                <div class="wrap-input1 validate-input" data-validate=" o campo mensagem é obrigatorio!">
                                                    <textarea class="form-control" name="mensagem" id="mensagem"
                                                              placeholder="Mensagem"></textarea>
                                                    <span class="shadow-input1"></span>
                                                </div>

                                                <div class="col-lg-12 text-center">
                                                    <button class="primary-btn text-uppercase btnWpp">Enviar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
                <!--================ End Brands Area =================-->

                <!--================ Start Footer Area =================-->
                <footer class="footer-area overlay">
                    <div class="container">

                        <div class="row">




                            <!-- <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="single-footer-widget">
                                            <div class="row">
                                                    <div class="col">
                                                            <ul class="list">
                                                                    <li><a href="#">Inicio</a></li>
                                                                    <li><a href="#sobre">Sobre nos</a></li>
                                                                    <li><a href="#cadastro">Cadastro</a></li>

                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                            </div> -->
                            <!-- <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="single-footer-widget">
                                            <div class="row">
                                                    <div class="col">
                                                            <ul class="list">

                                                                    <li><a href="#cardapio">Cardapio</a></li>
                                                                    <li><a href="#contato">Contato</a></li>
                                                                    <li data-toggle="modal" data-target="#exampleModal"
                                                                            style="cursor: pointer;"><a>Login</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                            </div> -->



                            <!-- <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-widget">
                                    <h6>Newsletter</h6>
                                    <p>Stay update with our latest</p>
                                    <div class="" id="mc_embed_signup">
                                            <form target="_blank" novalidate="true"
                                                    action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                                    method="get" class="form-inline">
                                                    <div class="d-flex flex-row">
                                                            <input class="form-control" name="EMAIL" placeholder="Your email address"
                                                                    onfocus="this.placeholder = 'Your email address'"
                                                                    onblur="this.placeholder = 'Your email address'" required=""
                                                                    type="email">
                                                            <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                                                            aria-hidden="true"></i></button>
                                                            <div style="position: absolute; left: -5000px;">
                                                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                                                            value="" type="text">
                                                            </div>
                                                    </div>
                                                    <div class="info"></div>
                                            </form>
                                    </div>
                            </div>
                    </div>
                    </div> -->
                            <div class="row footer-bottom justify-content-between">
                                <div class="col-lg-6">

                                </div>
                                <div class="col-lg-2">
                                    <div class="social-icons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--================ Start Footer Area =================-->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <form class="contact-form-area contact-page-form contact-form text-right" id="myFormLogin"
                                  action="javascript:void(0)" method="post">
                                <br>
                                <center>
                                    <h1 class="modal-title" id="exampleModalLabel">Login</h1>
                                </center>

                                <div class="modal-body">


                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Email" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Email'">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="Senha" onfocus="this.placeholder = ''"
                                               onblur="this.placeholder = 'Senha'">
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <div class="col-lg-12 text-center">
                                        <button class="primary-btn text-uppercase" type="submit" id="btnLogar">Entrar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>



            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
            <script src="{{asset('js/popper.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/stellar.js')}}"></script>
            <script src="{{asset('js/cep.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>
            <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{ asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
            <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
            <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
            <script src="{{ asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
            <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
            <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js')}}"></script>
            <script src="{{ asset('vendors/counter-up/jquery.counterup.js')}}"></script>
            <script src="{{asset('js/mail-script.js')}}"></script>
            <!--gmaps Js-->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
            <script src="{{asset('js/gmaps.min.js')}}"></script>
            <script src="{{asset('js/theme.js')}}"></script>
            <script src="{{asset('js/index.js')}}"></script>
    </body>

</html>