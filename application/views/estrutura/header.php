<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="Description" content="Cartorio">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, height=device-height">
    <meta name="theme-color" content="#2E3192">
    <title>Cartorio</title>
    <meta name="robots" content="index,follow">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <link href="<?= base_url('style/css/header.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('style/css/footer.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('style/css/theme-animate.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('style/css/style.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('style/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?= base_url('style/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('style/js/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('style/js/script-menu.js'); ?>"></script>

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyBy6fwubO922dAiPyjWjZbAvgVtOX8Z9u4&libraries=geometry"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy6fwubO922dAiPyjWjZbAvgVtOX8Z9u4&libraries=geometry"></script>


    <link rel="stylesheet" type="text/css" href="https://kit-pro.fontawesome.com/releases/v5.10.1/css/pro.min.css">

    <style>
        body {
            font-family: 'roboto' !important;
        }

        textarea:focus,
        input:focus,
        select:focus {
            /*box-shadow: 0px 0px 2px #041239;*/
            /*border: 0px solid #041239;*/
            outline: 0px;
        }
    </style>


    <!-- Menu mobile -->
    <script type="text/javascript">
        function openMenuXS() {
            $('.mobilemenu-block').css('display', 'block');
        }

        function closeMenuXS() {
            $('.mobilemenu-block').css('display', 'none');
        }
    </script>


    <!-- Ancora -->
    <script>
        $(document).ready(function() {
            $(function() {
                $('.atAnc').on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $($(this).attr('href')).offset().top
                    }, 500, 'linear');
                    closeMenuXS();
                });
            });
        });
    </script>



    <!-- Busca -->
    <script type="text/javascript">
        function busca() {
            let valor = document.getElementById('buscaInp').value;
            if (valor.length >= 1) {

                openOpcoes();
                // alert("buscar");


                var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": "<?php echo base_url('home/buscaCategoria'); ?>",
                    "method": "GET",
                    "headers": {
                        "cache-control": "no-cache",
                    },
                    "data": {
                        "pesquisa": valor
                    }
                }
                $.ajax(settings).done(function(response) {

                    $('.busca-block__options').html('');

                    for (const i in response) {
                        console.log(response[i]);

                        $('.busca-block__options').append('' +
                            '<div class="busca-block__opcoes">' +
                            '<a href="<?= base_url(); ?>home/produtos?id=' + response[i].id_categoria + '">' +
                            '<div class="row">' +
                            '<div class="col-9"> ' +
                            '<p class="busca-block__tituloOpcoes">' +
                            '' + response[i].nome + '' +
                            '</p>' +
                            '<p class="busca-block__itens">' +
                            '' + response[i].quantidade + ' itens' +
                            '</p>' +
                            '</div>  ' +
                            '<div class="col-3 busca-block__arrow"> <i class="fal fa-long-arrow-right"></i> </div>  ' +
                            '</div>' +
                            '</a>' +
                            '</div>' +
                            '');

                    }

                });



            } else {
                closeOpcoes()
            }

        }

        // Abrir menu
        function openOpcoes() {
            $('.busca-block__options').css('display', 'block');
        }

        function closeOpcoes() {
            $('.busca-block__options').css('display', 'none');
        }
    </script>


</head>

<body>



    <header>
        <div class="cart-topBar">
            <div class="container">
                <div class="cart-topBar__block">
                    <div class="d-none d-md-block col-md-8">
                        <div class="cart-topBar__block--social">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="<?= base_url('style/'); ?>img/facebook.png" alt="facebook">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= base_url('style/'); ?>img/youtube.png" alt="youtube">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= base_url('style/'); ?>img/instagram.png" alt="instagram">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= base_url('style/'); ?>img/linkedin.png" alt="linkedin">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= base_url('style/'); ?>img/whatsapp.png" alt="whatsapp">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="<?= base_url('style/'); ?>img/whatsapp.png" alt="whatsapp">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="cart__login">
                            <span>
                                <a href="#">Login</a>
                                <span>/</span>
                                <a href="#">Cadastrar-se</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="cart-topBar__block--account">
                            <i class="fa fa-bookmark"></i>
                            <span>MINHA CONTA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-header">
            <div class="container">
                <ul>
                    <li>
                        <img src="<?= base_url('style/'); ?>img/logo.png" alt="logo">
                    </li>
                    <li class="d-none d-md-flex">
                        <i class="fa fa-envelope custom"></i>
                        <div class="logo-header__block">
                            <strong>Contato on-line</strong>
                            <a href="#">Clique Aqui!</a>
                        </div>
                    </li>
                    <li class="d-none d-md-flex">
                        <i class="fa fa-phone custom"></i>
                        <div class="logo-header__block">
                            <strong>TELEFONE</strong>
                            <a href="#">WhatsApp: (11) 4732-9988</a>
                        </div>
                    </li>
                    <li class="d-none d-md-flex">
                        <i class="fa fa-home custom"></i>
                        <div class="logo-header__block">
                            <strong>ITAQUAQUECETUBA / SP</strong>
                            <a href="#">Rua: teste, Nº 240 - Teste</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </header>
    <!-- MOBILE -->
    <nav class="cart-menu__mobile d-lg-none">
        <div class="container">
            <div class="cart-menu__mobile--block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span>MENU<i class="fas fa-bars"></i></span>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="accordion" id="accordionExample275">
                    <!-- Home -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <a href="#">HOME</a>
                            </h5>
                        </div>
                    </div>
                    <!-- Home -->
                    <!-- Firmas -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingOne2">
                            <h5 class="mb-0">
                                <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="#collapseOne2">
                                    FIRMAS
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </h5>
                        </div>
                        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordionExample275">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=197" title="Apostilamento de Documento">
                                            <span> Apostilamento de Documento </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=4" title="Autenticação">
                                            <span>Autenticação </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=81" title="Chancela Mecânica">
                                            <span> Chancela Mecânica </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/link/consulta/fi-consulta.aspx?mod=01" title="Consulta de Autenticidade">
                                            <span> Consulta de Autenticidade </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/link/consulta/fi-consulta.aspx?mod=02" title="Consulta de Cartão">
                                            <span> Consulta de Cartão </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=31" title="Desmaterialização">
                                            <span> Desmaterialização </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=65" title="Documentos de Identidade">
                                            <span> Documentos de Identidade </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=14" title="Reconhecimento de Firma">
                                            <span> Reconhecimento de Firma </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Firmas -->
                    <!-- Notas -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingTwo2">
                            <h5 class="mb-0">
                                <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    NOTAS
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </h5>
                        </div>
                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample275">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=72" title="Ata Notarial">
                                            <span> Ata Notarial </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=133" title="Carta de Sentença Notarial">
                                            <span> Carta de Sentença Notarial </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=5" title="Certidão">
                                            <span> Certidão </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/link/consulta/tn-consulta.aspx" title="Consulta de Atos">
                                            <span> Consulta de Atos </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=7" title="Divórcio Extrajudicial">
                                            <span> Divórcio Extrajudicial </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/cartorio/RSAHSERVWH903/modulo/tn-formulario-encaminhamento?acao=escritura" title="Encaminhamento Eletrônico - Escritura">
                                            <span>Encaminhamento Eletrônico - Escritura </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/cartorio/RSAHSERVWH903/modulo/tn-formulario-encaminhamento?acao=procuracao" title="Encaminhamento Eletrônico - Procuração">
                                            <span> Encaminhamento Eletrônico - Procuração </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=6" title="Escrituras Públicas - Demais Casos">
                                            <span> Escrituras Públicas - Demais Casos </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=29" title="Escrituras Públicas - Imóveis">
                                            <span> Escrituras Públicas - Imóveis </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=10" title="Inventário Extrajudicial">
                                            <span> Inventário Extrajudicial </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=23" title="Mediação e Conciliação">
                                            <span> Mediação e Conciliação </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=12" title="Procuração Pública">
                                            <span> Procuração Pública </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=63" title="Testamento Público">
                                            <span> Testamento Público </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Notas -->
                    <!-- Protesto -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingThree3">
                            <h5 class="mb-0">
                                <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="#collapseThree3">
                                    PROTESTO
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </h5>
                        </div>
                        <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordionExample275">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="http://www.webprotesto.com.br/Home/Servico?Identificador=32" title="Boleto de Intimação">
                                            <span> Boleto de Intimação </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.webprotesto.com.br/Home/Servico?Identificador=38" title="Boleto de Retirada Autorizada">
                                            <span> Boleto de Retirada Autorizada </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.webprotesto.com.br/Home/Servico?Identificador=24" title="Cancelamento de Protesto">
                                            <span> Cancelamento de Protesto</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.jornaldoprotesto.com.br/Pesquisa/PesquisaHome" title="Consulta Edital">
                                            <span> Consulta Edital </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.webprotesto.com.br/Home/Servico?Identificador=5" title="Consulta Título">
                                            <span class="menu-text"> Consulta Título </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.protestosp.com.br/Home/Index?l=True&amp;amp;canc=False&amp;amp;cc5=False&amp;amp;et1=False&amp;amp;anue=True" title="Declaração de Anuência">
                                            <span class="menu-text"> Declaração de Anuência</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=1" title="Desconto Legal ME e EPP">
                                            <span class="menu-text"> Desconto Legal ME e EPP </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=93" title="Formulário para Protesto">
                                            <span> Formulário para Protesto </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.jornaldoprotesto.com.br" title="Jornal do Protesto ">
                                            <span> Jornal do Protesto </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pedido/pt/pt-pedido-aviso.aspx" title="Pedido de Certidão Protesto ">
                                            <span> Pedido de Certidão Protesto </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=2" title="Protesto de Títulos">
                                            <span> Protesto de Títulos </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=3" title="Título Protestáveis">
                                            <span>Título Protestáveis </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/link/consulta/pt-consulta.aspx?mod=04" title="Veracidade da Certidão de Cancelamento">
                                            <span> Veracidade da Certidão de Cancelamento </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/link/consulta/pt-consulta.aspx?mod=01" title="Veracidade da Certidão de Protesto">
                                            <span> Veracidade da Certidão de Protesto </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Protesto -->
                    <!-- Serviço -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingThree4">
                            <h5 class="mb-0">
                                <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                    SERVIÇOS
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </h5>
                        </div>
                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordionExample275">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=75" title="Cartório Simplificado">
                                            <span> Cartório Simplificado </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=163" title="Cartório na Escola">
                                            <span> Cartório na Escola </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pedido/pag-pedido.aspx" title="Consulta de Pedido">
                                            <span> Consulta de Pedido </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-links.aspx?categoria=1" title="Links Úteis">
                                            <span> Links Úteis </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pedido/tn/tn-pedido.aspx" title="Pedido de Certidão Notas">
                                            <span> Pedido de Certidão Notas </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pedido/pt/pt-pedido-aviso" title="Pedido de Certidão Protesto">
                                            <span> Pedido de Certidão Protesto </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/cartorio/RSAHSERVWH903/pag/pag-pesquisa-satisfacao.aspx" title="Pesquisa de Satisfação">
                                            <span> Pesquisa de Satisfação</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-custas.aspx" title="Tabela de Custas">
                                            <span>Tabela de Custas </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Serviço -->
                    <!-- Cartorio -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingThree5">
                            <h5 class="mb-0">
                                <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">O
                                    CARTÓRIO
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </h5>
                        </div>
                        <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordionExample275">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=75" title="Cartório Simplificado">
                                            <span> Cartório Simplificado </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-itens.aspx?id=163" title="Cartório na Escola">
                                            <span> Cartório na Escola </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pedido/pag-pedido.aspx" title="Consulta de Pedido">
                                            <span> Consulta de Pedido </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-links.aspx?categoria=1" title="Links Úteis">
                                            <span> Links Úteis </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pedido/tn/tn-pedido.aspx" title="Pedido de Certidão Notas">
                                            <span> Pedido de Certidão Notas </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pedido/pt/pt-pedido-aviso" title="Pedido de Certidão Protesto">
                                            <span> Pedido de Certidão Protesto </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/cartorio/RSAHSERVWH903/pag/pag-pesquisa-satisfacao.aspx" title="Pesquisa de Satisfação">
                                            <span> Pesquisa de Satisfação</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/pag/pag-custas.aspx" title="Tabela de Custas">
                                            <span>Tabela de Custas </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Cartorio -->
                    <!-- CONTATOS -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingThree6">
                            <h5 class="mb-0">
                                <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                    CONTATOS
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </h5>
                        </div>
                        <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6" data-parent="#accordionExample275">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="/cartorio/RSAHSERVWH903/pag/pag-contato.aspx" title="Contato on-line">
                                            <span> Contato on-line </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/cartorio/RSAHSERVWH903/pag/pag-curriculo.aspx" title="Trabalhe conosco">
                                            <span> Trabalhe conosco </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- CONTATOS -->
                    <!-- Blog -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingThree7">
                            <h5 class="mb-0">
                                <a href="#" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                                    BLOG DO DG
                                </a>
                                <i class="fas fa-angle-down"></i>
                            </h5>
                        </div>
                        <div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample275">
                        </div>
                    </div>
                    <!-- Blog -->
                    <!-- CONTATOS -->
                    <div class="card z-depth-0 bordered">
                        <div class="card-header" id="headingThree8">
                            <h5 class="mb-0">
                                <i href="#" class="fa fa-shopping-bag btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8"></i>

                            </h5>
                        </div>
                        <div id="collapseThree8" class="collapse" aria-labelledby="headingThree8" data-parent="#accordionExample275">
                            <div class="card-body">
                                <ul>
                                    <p><span>CARRINHO DE PEDIDOS</span></p>
                                    <div class="last-item__block">
                                        <div id="last-item__block--container">
                                            <hr>
                                            <div class="last-item__block--product">
                                                <figure>
                                                    <div class="last-item__block--drop">
                                                        <a href="/pedido/tn/tn-pedido-carrinho.aspx">
                                                            <span title="" data-toggle="tooltip" data-placement="bottom" data-original-title="PEDIDO(S) DE NOTAS">
                                                                <i class="fa fa-shopping-bag"></i>
                                                                <span class="last-item__block--count">
                                                                    <b> 0</b>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="last-item__block--product-meta">
                                                    <h5 class="last-item__block--product-title">
                                                        <a href="/pedido/tn/tn-pedido-carrinho.aspx">NOTAS</a>
                                                    </h5>
                                                    <span>Pedido de Certidão</span>
                                                    <div class="last-item__block--product-price">
                                                        <span class="product-price" style="color: gray">
                                                            Qtd:0 de Pedido(s)
                                                        </span>
                                                    </div>
                                                    <!-- End .product-price-container -->
                                                </div>
                                                <!-- End .product-meta -->
                                            </div>
                                            <!-- End .product -->
                                        </div>
                                        <!-- Carrinho de Firmas-->
                                        <div id="last-item__block--container">
                                            <hr>
                                            <div class="last-item__block--product">
                                                <figure>
                                                    <div class="last-item__block--drop">
                                                        <a href="/pedido/tn/tn-pedido-carrinho.aspx">
                                                            <span title="" data-toggle="tooltip" data-placement="bottom" data-original-title="PEDIDO(S) DE NOTAS">
                                                                <i class="fa fa-shopping-bag"></i>
                                                                <span class="last-item__block--count">
                                                                    <b> 0</b>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </figure>
                                                <div class="last-item__block--product-meta">
                                                    <h5 class="last-item__block--product-title">
                                                        <a href="/pedido/tn/tn-pedido-carrinho.aspx">FIRMAS</a>
                                                    </h5>
                                                    <span>Pedido de Certidão</span>
                                                    <div class="last-item__block--product-price">
                                                        <span class="product-price" style="color: gray">
                                                            Qtd:0 de Pedido(s)
                                                        </span>
                                                    </div>
                                                    <!-- End .product-price-container -->
                                                </div>
                                                <!-- End .product-meta -->
                                            </div>
                                            <!-- End .product -->
                                        </div>

                                    </div>
                                    <!-- End .dcart-products -->
                                    <div class="last-item__btn">
                                        <div class="last-item__btn--link">
                                            <a href="/pedido/pag-pedido.aspx" class="btn btn-custom btn-sm">Lista de
                                                pedidos</a>
                                        </div>
                                        <!-- End .dcart-action -->
                                    </div>
                                    <!-- End .dcart-action-container -->

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- CONTATOS -->
                </div>
            </div>

        </div>
    </nav>
    <!-- DESKTOP -->
    <nav class="cart-menu__desk d-none d-xl-block" data-spy="affix" data-offset-top="197">
        <div class="container">
            <div class="cart-menu__desk--block">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#">FIRMAS</a> <i class="fas fa-angle-down"></i></a>
                        <ul class="menu-close">
                            <li>
                                <a href="<?= base_url('home/apostilamento'); ?>" title="Apostilamento de Documento">
                                    <span> Apostilamento de Documento </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/autenticacao'); ?>" title="Autenticação">
                                    <span>Autenticação </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/chancelaMecanica'); ?>" title="Chancela Mecânica">
                                    <span> Chancela Mecânica </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/consultaDeAutenticidade'); ?>" title="Consulta de Autenticidade">
                                    <span> Consulta de Autenticidade </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/consultaDeCartao'); ?>" title="Consulta de Cartão">
                                    <span> Consulta de Cartão </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/desmaterializacao'); ?>" title="Desmaterialização">
                                    <span> Desmaterialização </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/documentoDeIndetidades'); ?>" title="Documentos de Identidade">
                                    <span> Documentos de Identidade </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/reconhecimentoDaFirma'); ?>" title="Reconhecimento de Firma">
                                    <span> Reconhecimento de Firma </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">NOTAS</a> <i class="fas fa-angle-down"></i></a>
                        <ul class="menu-close">
                            <li>
                                <a href="<?= base_url('home/atasNotarial'); ?>" title="Ata Notarial">
                                    <span> Ata Notarial </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/cartaDeSentenca'); ?>" title="Carta de Sentença">
                                    <span> Carta de Sentença Notarial </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/certidao'); ?>" title="Certidão">
                                    <span> Certidão </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/consultaDeAtos'); ?>" title="Consulta de atos">
                                    <span> Consulta de Atos </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/divorcioExtrajudicial'); ?>" title="Divórcio Extrajudicial">
                                    <span> Divórcio Extrajudicial </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/form'); ?>" title="Encaminhamento Eletrônico - Escritura">
                                    <span>Encaminhamento Eletrônico - Escritura </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/form'); ?>" title="Encaminhamento Eletrônico - Procuração">
                                    <span> Encaminhamento Eletrônico - Procuração </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/escriturasPublicasDemaisCasos'); ?>" title="Escrituras Públicas - Demais Casos">
                                    <span> Escrituras Públicas - Demais Casos </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/escriturasPublicasImoveis'); ?>" title="Escrituras Públicas - Imóveis">
                                    <span> Escrituras Públicas - Imóveis </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/inventarioExtrajudicial'); ?>" title="Inventário Extrajudicial">
                                    <span> Inventário Extrajudicial </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/mediacaoConciliacao'); ?>" title="Mediação e Conciliação">
                                    <span> Mediação e Conciliação </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/pedidoCertidao'); ?>" title="Pedido de Certidão Notas">
                                    <span>Pedido de Certidão Notas</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/procuracaoPublica'); ?>" title="Procuração Pública">
                                    <span> Procuração Pública </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/testamentoPublico'); ?>" title="Testamento Público">
                                    <span> Testamento Público </span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">PROTESTO</a> <i class="fas fa-angle-down"></i></a>
                        <ul class="menu-close">
                            <li class="intimidacao">
                                <a href="<?= base_url('home/boletoDeIntimidacao'); ?>" title="Boleto de Intimação">
                                    <span> Boleto de Intimação </span>
                                </a>
                            </li>
                            <li class="retirada-autorizada">
                                <a href="<?= base_url('home/retiradaAutorizada'); ?>" title="Boleto de Retirada Autorizada">
                                    <span> Boleto de Retirada Autorizada </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/cancelamentoProtesto'); ?>" title="Cancelamento de Protesto">
                                    <span> Cancelamento de Protesto</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.jornaldoprotesto.com.br/Pesquisa/PesquisaHome" target="_blank" title="Consulta Edital">
                                    <span> Consulta Edital </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/consultarAndamentos'); ?>" title="Consulta Título">
                                    <span class="menu-text"> Consulta Título </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.protestosp.com.br/Home/Index?l=True&amp;amp;canc=False&amp;amp;cc5=False&amp;amp;et1=False&amp;amp;anue=True" title="Declaração de Anuência" target="_blank">
                                    <span class="menu-text"> Declaração de Anuência</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/descontoLegal'); ?>" title="Desconto Legal ME e EPP">
                                    <span class="menu-text"> Desconto Legal ME e EPP </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/formularioDeTitulo'); ?>" title="Formulário para Protesto">
                                    <span> Formulário para Protesto </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.jornaldoprotesto.com.br" target="_blank" title="Jornal do Protesto ">
                                    <span> Jornal do Protesto </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/pedidoDeCertidao'); ?>" title="Pedido de Certidão Protesto ">
                                    <span> Pedido de Certidão Protesto </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/protestoDeTitulo'); ?>" title="Protesto de Títulos">
                                    <span> Protesto de Títulos </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/titulosPrestaveis'); ?>" title="Título Protestáveis">
                                    <span>Título Protestáveis </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/consultaDeProtesto'); ?>" title="Veracidade da Certidão de Cancelamento">
                                    <span> Veracidade da Certidão de Cancelamento </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/consultaDeProtesto'); ?>" title="Veracidade da Certidão de Protesto">
                                    <span> Veracidade da Certidão de Protesto </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">SERVIÇOS</a> <i class="fas fa-angle-down"></i></a>
                        <ul class="menu-close">
                            <li>
                                <a href="<?= base_url('home/cartorioSimplificado'); ?>" title="Cartório Simplificado">
                                    <span> Cartório Simplificado </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/cartorioEscola'); ?>" title="Cartório na Escola">
                                    <span> Cartório na Escola </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pedido/pag-pedido.aspx" title="Consulta de Pedido">
                                    <span> Consulta de Pedido </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pag/pag-links.aspx?categoria=1" title="Links Úteis">
                                    <span> Links Úteis </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pedido/tn/tn-pedido.aspx" title="Pedido de Certidão Notas">
                                    <span> Pedido de Certidão Notas </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pedido/pt/pt-pedido-aviso" title="Pedido de Certidão Protesto">
                                    <span> Pedido de Certidão Protesto </span>
                                </a>
                            </li>
                            <li>
                                <a href="/cartorio/RSAHSERVWH903/pag/pag-pesquisa-satisfacao.aspx" title="Pesquisa de Satisfação">
                                    <span> Pesquisa de Satisfação</span>
                                </a>
                            </li>
                            <li>
                                <a href="/pag/pag-custas.aspx" title="Tabela de Custas">
                                    <span>Tabela de Custas </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">O CARTÓRIO</a> <i class="fas fa-angle-down"></i></a>
                        <ul class="menu-close">
                            <li>
                                <a href="/pag/pag-itens.aspx?id=75" title="Cartório Simplificado">
                                    <span> Cartório Simplificado </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pag/pag-itens.aspx?id=163" title="Cartório na Escola">
                                    <span> Cartório na Escola </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pedido/pag-pedido.aspx" title="Consulta de Pedido">
                                    <span> Consulta de Pedido </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pag/pag-links.aspx?categoria=1" title="Links Úteis">
                                    <span> Links Úteis </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pedido/tn/tn-pedido.aspx" title="Pedido de Certidão Notas">
                                    <span> Pedido de Certidão Notas </span>
                                </a>
                            </li>
                            <li>
                                <a href="/pedido/pt/pt-pedido-aviso" title="Pedido de Certidão Protesto">
                                    <span> Pedido de Certidão Protesto </span>
                                </a>
                            </li>
                            <li>
                                <a href="/cartorio/RSAHSERVWH903/pag/pag-pesquisa-satisfacao.aspx" title="Pesquisa de Satisfação">
                                    <span> Pesquisa de Satisfação</span>
                                </a>
                            </li>
                            <li>
                                <a href="/pag/pag-custas.aspx" title="Tabela de Custas">
                                    <span>Tabela de Custas </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">CONTATOS</a> <i class="fas fa-angle-down"></i></a>
                        <ul class="menu-close">
                            <li>
                                <a href="/cartorio/RSAHSERVWH903/pag/pag-contato.aspx" title="Contato on-line">
                                    <span> Contato on-line </span>
                                </a>
                            </li>
                            <li>
                                <a href="/cartorio/RSAHSERVWH903/pag/pag-curriculo.aspx" title="Trabalhe conosco">
                                    <span> Trabalhe conosco </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#">BLOG DO DG</a> <i class="fas fa-angle-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <span>
                            <i class="fa fa-shopping-bag"></i>
                            <span class="dcart-total-count">
                                <b>0</b>
                            </span>
                        </span>

                        <ul class="menu-close last-item">
                            <p><span>CARRINHO DE PEDIDOS</span></p>
                            <div class="last-item__block">
                                <div id="last-item__block--container">
                                    <hr>
                                    <div class="last-item__block--product">
                                        <figure>
                                            <div class="last-item__block--drop">
                                                <a href="/pedido/tn/tn-pedido-carrinho.aspx">
                                                    <span title="" data-toggle="tooltip" data-placement="bottom" data-original-title="PEDIDO(S) DE NOTAS">
                                                        <i class="fa fa-shopping-bag"></i>
                                                        <span class="last-item__block--count">
                                                            <b> 0</b>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="last-item__block--product-meta">
                                            <h5 class="last-item__block--product-title">
                                                <a href="/pedido/tn/tn-pedido-carrinho.aspx">NOTAS</a>
                                            </h5>
                                            <span>Pedido de Certidão</span>
                                            <div class="last-item__block--product-price">
                                                <span class="product-price" style="color: gray">
                                                    Qtd:0 de Pedido(s)
                                                </span>
                                            </div>
                                            <!-- End .product-price-container -->
                                        </div>
                                        <!-- End .product-meta -->
                                    </div>
                                    <!-- End .product -->
                                </div>
                                <!-- Carrinho de Firmas-->
                                <div id="last-item__block--container">
                                    <hr>
                                    <div class="last-item__block--product">
                                        <figure>
                                            <div class="last-item__block--drop">
                                                <a href="/pedido/tn/tn-pedido-carrinho.aspx">
                                                    <span title="" data-toggle="tooltip" data-placement="bottom" data-original-title="PEDIDO(S) DE NOTAS">
                                                        <i class="fa fa-shopping-bag"></i>
                                                        <span class="last-item__block--count">
                                                            <b> 0</b>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="last-item__block--product-meta">
                                            <h5 class="last-item__block--product-title">
                                                <a href="/pedido/tn/tn-pedido-carrinho.aspx">FIRMAS</a>
                                            </h5>
                                            <span>Pedido de Certidão</span>
                                            <div class="last-item__block--product-price">
                                                <span class="product-price" style="color: gray">
                                                    Qtd:0 de Pedido(s)
                                                </span>
                                            </div>
                                            <!-- End .product-price-container -->
                                        </div>
                                        <!-- End .product-meta -->
                                    </div>
                                    <!-- End .product -->
                                </div>

                            </div>
                            <!-- End .dcart-products -->
                            <div class="last-item__btn">
                                <div class="last-item__btn--link">
                                    <a href="/pedido/pag-pedido.aspx" class="btn btn-custom btn-sm">Lista de
                                        pedidos</a>
                                </div>
                                <!-- End .dcart-action -->
                            </div>
                            <!-- End .dcart-action-container -->

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>