<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view('kuesioner/index', $data);
    }

    public function pertanyaan($id_alumni)
    {
        $data['title'] = 'Beranda';
        $data['pertanyaan'] = $this->db->get('pertanyaan')->result_array();
        $data['id_alumni'] = $id_alumni;
        // dd($data);
        $this->load->view('kuesioner/pertanyaan', $data);
    }

    public function alumni_create()
    {
        $data = [
            'nim' => $_POST['nim'],
            'nik' => $_POST['nik'],
            'nama' => $_POST['nama'],
            'prodi' => $_POST['prodi'],
            'telepon' => $_POST['telepon'],
            'email' => $_POST['email'],
            'tahun_lulus' => $_POST['tahun_lulus'],
        ];

        $this->db->insert('alumni', $data);
        $inserted_id = $this->db->insert_id();
        redirect("kuesioner/pertanyaan/$inserted_id", 'refresh');
    }

    public function answer_create()
    {
        $data = [];

        foreach ($_POST as $id => $value) {
            if ($id != 'id_alumni') {
                if (is_array($value)) {
                    $value = implode("|", $value);
                    $item = array(
                        'id_alumni' => $_POST['id_alumni'],
                        'id_pertanyaan' => $id,
                        'jawaban' => $value,
                    );
                    array_push($data, $item);
                } else {
                    $item = array(
                        'id_alumni' => $_POST['id_alumni'],
                        'id_pertanyaan' => $id,
                        'jawaban' => $value,
                    );
                    array_push($data, $item);
                }
            }
        }
        // dd($data);
        $this->db->insert_batch('jawaban', $data);
        set_alert('jawaban berhasil direkam', 'primary');
        redirect('kuesioner', 'refresh');
    }
}
