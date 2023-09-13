<?php

defined('BASEPATH') or exit('No direct script access allowed');

class consultaOrdens extends MY_Controller
{

    public function index()
    {
        //$this->load->model('int_compras/M_int_compras');
        $data['acesso'] = $this->M_home->carrega_acesso_bs4();
        $this->load->view('includes/bs4/header', $data);
        $this->load->view('includes/bs4/submenu');
        $this->load->view('int_compras/v_consultaOrdens');
        $this->load->view('includes/bs4/footer');
    }

    public function buscaOrdem()
    {
        $this->load->model('int_compras/M_retorno');
        $retorno = $this->M_retorno->buscaOrdem();
        echo "<pre>";
        print_r($retorno);
        echo "</pre>";
        exit;
    }
}
