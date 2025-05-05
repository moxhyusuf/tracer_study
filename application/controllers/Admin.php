<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        // $api_url = $this->db->get_where('informasi', ['id' => '1'])->row('url_script');
        // $res = file_get_contents($api_url);
        // $query = ''
        $data['alumni'] = $this->db->get('alumni')->result_array();
        $data['title'] = 'Respon Alumni';
        $this->load->view('admin/index', $data);
    }

    public function detail($id_alumni)
    {
        // $api_url = $this->db->get_where('informasi', ['id' => '1'])->row('url_script');
        // $res = file_get_contents($api_url);
        // $respon_alumni = json_decode($res, true)['data'];

        // $respon_alumni = array_filter($respon_alumni, function ($respon_alumni) use ($nim) {
        //     return $respon_alumni['NIM'] == $nim;
        // });
        $query = "SELECT pertanyaan.pertanyaan, jawaban.jawaban
            FROM jawaban
            JOIN pertanyaan ON jawaban.id_pertanyaan = pertanyaan.id
            JOIN alumni ON jawaban.id_alumni = alumni.id
            WHERE alumni.id = '$id_alumni'";
        $data['kuesioner'] = $this->db->query($query)->result();
        // dd($data);
        $data['title'] = 'Respon Detail';
        $this->load->view('admin/detail', $data);
    }

    public function delete($id)
    {
        $this->db->delete('alumni', array('id' => $id));

        redirect('admin', 'refresh');
    }


    public function export()
    {
        function getAlphabetSequence($n)
        {
            $alphabet = range('A', 'Z');
            $result = '';

            $current = $n - 1;
            while ($current >= 0) {
                $result = $alphabet[$current % 26] . $result;
                $current = intval($current / 26) - 1;
            }

            return $result;
        }

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $query = "SELECT alumni.nim, alumni.nik, alumni.nama, alumni.prodi, alumni.telepon, 
            alumni.email, alumni.tahun_lulus, pertanyaan.pertanyaan, jawaban.jawaban
            FROM jawaban 
            JOIN pertanyaan ON jawaban.id_pertanyaan = pertanyaan.id 
            JOIN alumni ON jawaban.id_alumni = alumni.id";
        $tracer_study = $this->db->query($query)->result_array();

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'NIM');
        $object->getActiveSheet()->setCellValue('B1', 'NIK');
        $object->getActiveSheet()->setCellValue('C1', 'Nama');
        $object->getActiveSheet()->setCellValue('D1', 'Prodi');
        $object->getActiveSheet()->setCellValue('E1', 'Telepon');
        $object->getActiveSheet()->setCellValue('F1', 'Email');
        $object->getActiveSheet()->setCellValue('G1', 'Tahun Lulus');

        $row = 2;
        $col = 8;
        $index = 1;
        $nim = '';
        foreach ($tracer_study as $item) {
            foreach ($item as $key => $value) {
                if ($key == 'nim') {
                    if ($value != $nim && $nim != '') {
                        $row++;
                        $col = 8;
                        $index = 1;
                    }
                    $nim = $value;
                }

                if ($key != 'pertanyaan' && $key != 'jawaban' && $index <= 7) {
                    if ($key == 'nik') {
                        $object->getActiveSheet()->setCellValue(getAlphabetSequence($index) . $row, "$value-");
                    } else {
                        $object->getActiveSheet()->setCellValue(getAlphabetSequence($index) . $row, (string) $value);
                    }
                    $index++;
                }
                if ($key == 'pertanyaan') {
                    $object->getActiveSheet()->setCellValue(getAlphabetSequence($col) . 1, $value);
                }
                if ($key == 'jawaban') {
                    $object->getActiveSheet()->setCellValue(getAlphabetSequence($col) . $row, $value);
                }
            }
            $col++;
        }

        $i = 1;
        foreach ($object->getActiveSheet()->getCellCollection() as $cell) {
            $object->getActiveSheet()->getColumnDimension(getAlphabetSequence($i))->setAutoSize(true);
            $i++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="data tracer study.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');
        exit;
    }
}
