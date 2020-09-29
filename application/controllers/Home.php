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

    // CONSULTA DE TÍTULO
    function consultaTitulo()
    {
    }

    // GERAR PEDIDO DE CANCELAMENTO
    function pedidoCancelamento()
    {
    }

    // BOLETO DE RETIRADA AUTORIZADA
    function boletoRetirada()
    {
    }

    // BOLETO DE INTIMAÇÃO
    function boletoIntimacao()
    {
    }

    // FORMULÁRIO PARA PROTESTO
    function formularioProtesto()
    {
    }

    // CONSULTA DE EDITAL
    function consultaEdital()
    {
    }

    // DECLARAÇÃO DE ANUÊNCIA
    function declaracaoAnuencia()
    {
    }

    // JORNAL DO PROTESTO
    function jornalProtesto()
    {
    }

    // CONSULTA DE ESCRITURAS E PROCURAÇÕES
    function consultaEscriturasProcuracoes()
    {
    }


    // CONSULTA DE ANDAMENTO DE ESCRITURAS
    function consultaEscritura()
    {
    }



    // ENCAMINHAMENTO ELETRÔNICO DE ESCRITURAS E PROCURAÇÕES
    function encaminhamentoEletronico()
    {
    }


    // CALCULE SUA ESCRITURA
    function calculeEscritura()
    {
    }
}
