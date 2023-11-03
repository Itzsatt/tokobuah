<?php
class Dlemas extends CI_Controller
{

    public function index()
    {

        $this->load->view('view-form-dlemas');
        
    }

    public function cetak()
    {

        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-dlemas');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgl' => $this->input->post('tgl'),
                'lhr' => $this->input->post('lhr'),
                'alamat' => $this->input->post('alamat'),
                'gender' => $this->input->post('gender'),
                'agm' => $this->input->post('agm')
            ];

            $this->load->view('view-data-dlemas', $data);
        }
    }
}