<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihat_data();
        $this->load->view('mahasiswa_view', $data);
    }
  
    public function mhs_result()
    {
        $data['result'] = $this->Mahasiswa_model->metode_Result();
        $this->load->view('result_view', $data);
    }

    public function mhs_row()
    {
        $data['row'] = $this->Mahasiswa_model->metode_Row();
        $this->load->view('row_view', $data);
    }

    public function mhs_resultArray()
    {
        $data['resultarray'] = $this->Mahasiswa_model->metode_Result_Array();
        $this->load->view('resultarray_view', $data);
    }

    public function mhs_rowArray()
    {
        $data['rowarray'] = $this->Mahasiswa_model->metode_Row_Array();
        $this->load->view('rowarray_view', $data);
    }

 }   