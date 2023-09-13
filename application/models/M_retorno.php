<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_retorno extends CI_Model
{
    public function buscaOrdem()
    {
        $db = $this->load->database(getAmbiente(), TRUE);
        $ordem = $this->input->post('ordem');
        $data =  $this->input->post('datSaida');
        $problema = '';
        $causa = '';

        $cotacao = format_result($db->query("SELECT Ordem, Aprovado, Comprador FROM  Cotacao WHERE  Ordem in ($ordem) AND Aprovado = 1;"))->result();

        echo "<pre>";
        print_r($cotacao);
        echo "</pre>";
        exit;
    }
}
