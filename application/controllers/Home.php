<?php

// include_once APPPATH.'/third_party/pag/PagSeguroAssinaturas.php';
// use CWG\PagSeguro\PagSeguroAssinaturas;

class Home extends CI_Controller
{

    function __construct()
    {

        parent::__construct();

        $this->load->model('inicio');
        // $this->load->model('pagseguro_control');
        $this->load->library('session');
    }


    function index()
    {
        $this->load->view('estrutura/header');
        $this->load->view('home');
        $this->load->view('estrutura/footer');
    }

    // FIRMAS
    function apostilamento()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/apostilamento');
        $this->load->view('estrutura/footer');
    }

    function autenticacao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/autenticacao');
        $this->load->view('estrutura/footer');
    }
    function chancelaMecanica()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/chancelaMecanica');
        $this->load->view('estrutura/footer');
    }
    function consultaDeAutenticidade()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/consultaDeAutenticidade');
        $this->load->view('estrutura/footer');
    }
    function consultaDeCartao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/consultaDeCartao');
        $this->load->view('estrutura/footer');
    }
    function desmaterializacao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/desmaterializacao');
        $this->load->view('estrutura/footer');
    }
    function documentoDeIndetidades()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/documentoDeIndetidades');
        $this->load->view('estrutura/footer');
    }
    function reconhecimentoDaFirma()
    {
        $this->load->view('estrutura/header');
        $this->load->view('firmas/reconhecimentoDaFirma');
        $this->load->view('estrutura/footer');
    }
    // FIRMAS

    // NOTAS
    function atasNotarial()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/atasNotarial');
        $this->load->view('estrutura/footer');
    }

    // CARTA DE SENTENÇA
    function cartaDeSentenca()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/cartaDeSentenca');
        $this->load->view('estrutura/footer');
    }

    // CERTIDÃO
    function certidao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/certidao');
        $this->load->view('estrutura/footer');
    }

    // CONSULTA DE ATOS
    function consultaDeAtos()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/consultaDeAtos');
        $this->load->view('estrutura/footer');
    }

    // DIVORCIO EXTRA JUDICIAL
    function divorcioExtrajudicial()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/divorcioExtrajudicial');
        $this->load->view('estrutura/footer');
    }

    // Escrituras Públicas - Demais Casos
    function escriturasPublicasDemaisCasos()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/escriturasPublicasDemaisCasos');
        $this->load->view('estrutura/footer');
    }

    // Escrituras Públicas - Imóveis
    function escriturasPublicasImoveis()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/escriturasPublicasImoveis');
        $this->load->view('estrutura/footer');
    }

    // FORM
    function form()
    {
        $this->load->view('estrutura/header');
        $this->load->view('formulario/form');
        $this->load->view('estrutura/footer');
    }

    // INVENTÁRIO EXTRA JUDICIAL
    function inventarioExtrajudicial()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/inventarioExtrajudicial');
        $this->load->view('estrutura/footer');
    }

    // MEDIAÇÃO E CONCILIAÇÃO
    function mediacaoConciliacao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/mediacaoConciliacao');
        $this->load->view('estrutura/footer');
    }

    // PEDIDO DE CERTIDÃO NOTAS
    function pedidoCertidao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/pedidoCertidao');
        $this->load->view('estrutura/footer');
    }

    // PROCURAÇÃO PÚBLICA
    function procuracaoPublica()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/procuracaoPublica');
        $this->load->view('estrutura/footer');
    }

    // TESTAMENTO PUBLICO
    function testamentoPublico()
    {
        $this->load->view('estrutura/header');
        $this->load->view('notas/testamentoPublico');
        $this->load->view('estrutura/footer');
    }

    // BOLETO DE INTIMIDAÇÃO
    function boletoDeIntimidacao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/boletoDeIntimidacao');
        $this->load->view('estrutura/footer');
    }
    // CONSULTAR ANDAMENTOS
    function consultarAndamentos()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/consultarAndamentos');
        $this->load->view('estrutura/footer');
    }
    // DESCONTO LEGAL
    function descontoLegal()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/descontoLegal');
        $this->load->view('estrutura/footer');
    }
    // RETIRADA AUTORIZADA
    function retiradaAutorizada()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/retiradaAutorizada');
        $this->load->view('estrutura/footer');
    }
    // CANCELAMENTO DE PROTESTO
    function cancelamentoProtesto()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/cancelamentoProtesto');
        $this->load->view('estrutura/footer');
    }
    // FORMULÁRIO DE TÍTULOS
    function formularioDeTitulo()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/formularioDeTitulo');
        $this->load->view('estrutura/footer');
    }
    // PEDIDO DE CERTIDÃO
    function pedidoDeCertidao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/pedidoDeCertidao');
        $this->load->view('estrutura/footer');
    }
    // PROTESTO DE TITULO
    function protestoDeTitulo()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/protestoDeTitulo');
        $this->load->view('estrutura/footer');
    }
    // PROTESTO DE TITULO
    function titulosPrestaveis()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/titulosPrestaveis');
        $this->load->view('estrutura/footer');
    }
    // CONSULTA DE PROTESTO
    function consultaDeProtesto()
    {
        $this->load->view('estrutura/header');
        $this->load->view('protesto/consultaDeProtesto');
        $this->load->view('estrutura/footer');
    }
    // CARTÓRIO SIMPLIFICADO
    function cartorioSimplificado()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/cartorioSimplificado');
        $this->load->view('estrutura/footer');
    }
    function cartorioEscola()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/cartorioEscola');
        $this->load->view('estrutura/footer');
    }
    function consultaDePedido()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/consultaDePedido');
        $this->load->view('estrutura/footer');
    }
    function duvidas()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/duvidas');
        $this->load->view('estrutura/footer');
    }
    function linkUteis()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/linkUteis');
        $this->load->view('estrutura/footer');
    }
    function pedidoCertidaoLogin()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/pedidoCertidaoLogin');
        $this->load->view('estrutura/footer');
    }
    function pesquisaSatisfacao()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/pesquisaSatisfacao');
        $this->load->view('estrutura/footer');
    }
    function tabelaDeCustas()
    {
        $this->load->view('estrutura/header');
        $this->load->view('servicos/tabelaDeCustas');
        $this->load->view('estrutura/footer');
    }
}
