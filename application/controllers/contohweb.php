<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contohweb extends CI_Controller
{
    public function index()
    {
        $this->load->view('review/v_input'); 

    }
    public function cetak()
    {
        $nama=$this->input->POST('nama', TRUE);
        $nhp=$this->input->POST('nhp', TRUE);
        $merk=$this->input->POST('merk', TRUE);
        $ukuran=$this->input->POST('ukuran', TRUE);

        $data=[
            'nama'=>$nama,
            'nhp'=>$nhp,
            'merk'=>$merk,
            'ukuran'=>$ukuran
        ];
        $this->load->view('review/v_output', $data);
    }
}