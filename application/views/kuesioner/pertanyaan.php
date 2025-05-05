<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->view('templates/head'); ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <!-- End Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <!-- End Topbar -->

                <div class="container-fluid">
                    <!-- Alert -->
                    <?php $this->view('templates/alert'); ?>
                    <!-- End Alert -->
                    <h3 class="text-center font-weight-bold mt-5 mb-3">Isi Pertanyaan</h3>
                    <div class="card shadow mb-4 mx-md-5 mx-0">
                        <form action="<?= base_url('kuesioner/answer_create') ?>" method="post" autocomplete="off">
                            <div class="card-body">
                                <div class="row g-3 p-md-4 p-0">
                                    <input type="text" value="<?= $id_alumni ?>" name="id_alumni" hidden>
                                    <!-- 1 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[0]['id'] ?>" class="form-label"><?= $pertanyaan[0]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[0]['id'] ?>" id="<?= $pertanyaan[0]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Bekerja (full time / part time)">Bekerja (full time / part time)</option>
                                            <option value="Belum memungkinkan bekerja">Belum memungkinkan bekerja</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Melanjutkan Pendidikan">Melanjutkan Pendidikan</option>
                                            <option value="Tidak kerja tetapi sedang mencari kerja">Tidak kerja tetapi sedang mencari kerja</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- 2 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[1]['id'] ?>" class="form-label"><?= $pertanyaan[1]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[1]['id'] ?>" id="<?= $pertanyaan[1]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 3 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[2]['id'] ?>" class="form-label"><?= $pertanyaan[2]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[2]['id'] ?>" id="<?= $pertanyaan[2]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Iya">Iya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>
                                    </div>
                                    <!-- 4 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[3]['id'] ?>" class="form-label"><?= $pertanyaan[3]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[3]['id'] ?>" id="<?= $pertanyaan[3]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 5 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[4]['id'] ?>" class="form-label"><?= $pertanyaan[4]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[4]['id'] ?>" id="<?= $pertanyaan[4]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 6 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[5]['id'] ?>" class="form-label"><?= $pertanyaan[5]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[5]['id'] ?>" id="<?= $pertanyaan[5]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 7 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[6]['id'] ?>" class="form-label"><?= $pertanyaan[6]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[6]['id'] ?>" id="<?= $pertanyaan[6]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Intansi pemerintah">Intansi pemerintah</option>
                                            <option value="BUMN/BUMD">BUMN/BUMD</option>
                                            <option value="Institusi/Organisasi Multilateral">Institusi/Organisasi Multilateral</option>
                                            <option value="Organisasi non-profit/Lembaga Swadaya Masyarakat">Organisasi non-profit/Lembaga Swadaya Masyarakat</option>
                                            <option value="Perusahaan swasta">Perusahaan swasta</option>
                                            <option value="Wiraswasta/perusahaan sendiri">Wiraswasta/perusahaan sendiri</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- 8 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[7]['id'] ?>" class="form-label"><?= $pertanyaan[7]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[7]['id'] ?>" id="<?= $pertanyaan[7]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 9 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[8]['id'] ?>" class="form-label"><?= $pertanyaan[8]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[8]['id'] ?>" id="<?= $pertanyaan[8]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 10 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[9]['id'] ?>" class="form-label"><?= $pertanyaan[9]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[9]['id'] ?>" id="<?= $pertanyaan[9]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 11 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[10]['id'] ?>" class="form-label"><?= $pertanyaan[10]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[10]['id'] ?>" id="<?= $pertanyaan[10]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Founder">Founder</option>
                                            <option value="Co-Founder">Co-Founder</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Freelance / Pekerja Lepas">Freelance / Pekerja Lepas</option>
                                        </select>
                                    </div>
                                    <!-- 12 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[11]['id'] ?>" class="form-label"><?= $pertanyaan[11]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[11]['id'] ?>" id="<?= $pertanyaan[11]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Lokal /wilayah / Wiraswasta Tidak Berbadan Hukum">Lokal /wilayah / Wiraswasta Tidak Berbadan Hukum</option>
                                            <option value="Nasional / Wiraswasta Berbadan Hukum">Nasional / Wiraswasta Berbadan Hukum</option>
                                            <option value="Multinasional / Internasional">Multinasional / Internasional</option>
                                        </select>
                                    </div>
                                    <!-- 13 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[12]['id'] ?>" class="form-label"><?= $pertanyaan[12]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[12]['id'] ?>" id="<?= $pertanyaan[12]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Biaya Sendiri">Biaya Sendiri</option>
                                            <option value="Beasiswa">Beasiswa</option>
                                        </select>
                                    </div>
                                    <!-- 14 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[13]['id'] ?>" class="form-label"><?= $pertanyaan[13]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[13]['id'] ?>" id="<?= $pertanyaan[13]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 15 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[14]['id'] ?>" class="form-label"><?= $pertanyaan[14]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[14]['id'] ?>" id="<?= $pertanyaan[14]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 16 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[15]['id'] ?>" class="form-label"><?= $pertanyaan[15]['pertanyaan'] ?></label>
                                        <input type="date" name="<?= $pertanyaan[15]['id'] ?>" id="<?= $pertanyaan[15]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 17 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[16]['id'] ?>" class="form-label"><?= $pertanyaan[16]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[16]['id'] ?>" id="<?= $pertanyaan[16]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Biaya Sendiri/Keluarga">Biaya Sendiri/Keluarga</option>
                                            <option value="Beasiswa ADIK">Beasiswa ADIK</option>
                                            <option value="Beasiswa BIDIKMISI">Beasiswa BIDIKMISI</option>
                                            <option value="Beasiswa PPA">Beasiswa PPA</option>
                                            <option value="Beasiswa AFIRMASI">Beasiswa AFIRMASI</option>
                                            <option value="Beasiswa Perusahaan/Swasta">Beasiswa Perusahaan/Swasta</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- 18 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[17]['id'] ?>" class="form-label"><?= $pertanyaan[17]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[17]['id'] ?>" id="<?= $pertanyaan[17]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 19 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[18]['id'] ?>" class="form-label"><?= $pertanyaan[18]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[18]['id'] ?>" id="<?= $pertanyaan[18]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Erat">Sangat Erat</option>
                                            <option value="Erat">Erat</option>
                                            <option value="Cukup Erat">Cukup Erat</option>
                                            <option value="Kurang Erat">Kurang Erat</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 20 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[19]['id'] ?>" class="form-label"><?= $pertanyaan[19]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[19]['id'] ?>" id="<?= $pertanyaan[19]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Setingkat Lebih Tinggi">Setingkat Lebih Tinggi</option>
                                            <option value="Tingkat yang Sama">Tingkat yang Sama</option>
                                            <option value="Setingkat Lebih Rendah">Setingkat Lebih Rendah</option>
                                            <option value="Tidak Perlu Pendidikan Tinggi">Tidak Perlu Pendidikan Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 21 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[20]['id'] ?>" class="form-label"><?= $pertanyaan[20]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[20]['id'] ?>" id="<?= $pertanyaan[20]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 22 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[21]['id'] ?>" class="form-label"><?= $pertanyaan[21]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[21]['id'] ?>" id="<?= $pertanyaan[20]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 23 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[22]['id'] ?>" class="form-label"><?= $pertanyaan[22]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[22]['id'] ?>" id="<?= $pertanyaan[20]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 24 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[23]['id'] ?>" class="form-label"><?= $pertanyaan[23]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[23]['id'] ?>" id="<?= $pertanyaan[20]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 25 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[24]['id'] ?>" class="form-label"><?= $pertanyaan[24]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[24]['id'] ?>" id="<?= $pertanyaan[24]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 26 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[25]['id'] ?>" class="form-label"><?= $pertanyaan[25]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[25]['id'] ?>" id="<?= $pertanyaan[25]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 27 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[26]['id'] ?>" class="form-label"><?= $pertanyaan[26]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[26]['id'] ?>" id="<?= $pertanyaan[26]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 28 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[27]['id'] ?>" class="form-label"><?= $pertanyaan[27]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[27]['id'] ?>" id="<?= $pertanyaan[27]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Rendah">Sangat Rendah</option>
                                            <option value="Rendah">Rendah</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tinggi">Tinggi</option>
                                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                                        </select>
                                    </div>
                                    <!-- 29 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[28]['id'] ?>" class="form-label"><?= $pertanyaan[28]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[28]['id'] ?>" id="<?= $pertanyaan[28]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Besar">Sangat Besar</option>
                                            <option value="Besar">Besar</option>
                                            <option value="Cukup Besar">Cukup Besar</option>
                                            <option value="Kurang Besar">Kurang Besar</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 30 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[29]['id'] ?>" class="form-label"><?= $pertanyaan[29]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[29]['id'] ?>" id="<?= $pertanyaan[29]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Besar">Sangat Besar</option>
                                            <option value="Besar">Besar</option>
                                            <option value="Cukup Besar">Cukup Besar</option>
                                            <option value="Kurang Besar">Kurang Besar</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 31 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[30]['id'] ?>" class="form-label"><?= $pertanyaan[30]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[30]['id'] ?>" id="<?= $pertanyaan[30]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Besar">Sangat Besar</option>
                                            <option value="Besar">Besar</option>
                                            <option value="Cukup Besar">Cukup Besar</option>
                                            <option value="Kurang Besar">Kurang Besar</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 32 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[31]['id'] ?>" class="form-label"><?= $pertanyaan[31]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[31]['id'] ?>" id="<?= $pertanyaan[31]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Besar">Sangat Besar</option>
                                            <option value="Besar">Besar</option>
                                            <option value="Cukup Besar">Cukup Besar</option>
                                            <option value="Kurang Besar">Kurang Besar</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 33 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[32]['id'] ?>" class="form-label"><?= $pertanyaan[32]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[32]['id'] ?>" id="<?= $pertanyaan[32]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Besar">Sangat Besar</option>
                                            <option value="Besar">Besar</option>
                                            <option value="Cukup Besar">Cukup Besar</option>
                                            <option value="Kurang Besar">Kurang Besar</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 34 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[33]['id'] ?>" class="form-label"><?= $pertanyaan[33]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[33]['id'] ?>" id="<?= $pertanyaan[33]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Besar">Sangat Besar</option>
                                            <option value="Besar">Besar</option>
                                            <option value="Cukup Besar">Cukup Besar</option>
                                            <option value="Kurang Besar">Kurang Besar</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 35 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[34]['id'] ?>" class="form-label"><?= $pertanyaan[34]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[34]['id'] ?>" id="<?= $pertanyaan[34]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Sangat Besar">Sangat Besar</option>
                                            <option value="Besar">Besar</option>
                                            <option value="Cukup Besar">Cukup Besar</option>
                                            <option value="Kurang Besar">Kurang Besar</option>
                                            <option value="Tidak Sama Sekali">Tidak Sama Sekali</option>
                                        </select>
                                    </div>
                                    <!-- 36 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[35]['id'] ?>" class="form-label"><?= $pertanyaan[35]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[35]['id'] ?>" id="<?= $pertanyaan[35]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 37 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[36]['id'] ?>" class="form-label"><?= $pertanyaan[36]['pertanyaan'] ?></label>
                                        <div class="form-check">
                                            <input class="form-check-input" id="cb1" type="checkbox" value="Melalui iklan di koran/majalah, brosur" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb1">
                                                Melalui iklan di koran/majalah, brosur
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb2" type="checkbox" value="Melamar ke perusahaan tanpa mengetahui lowongan yang ada" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb2">
                                                Melamar ke perusahaan tanpa mengetahui lowongan yang ada
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb3" type="checkbox" value="Pergikebursa/pamerankerja" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb3">
                                                Pergikebursa/pamerankerja
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb4" type="checkbox" value="Mencarilewatinternet/iklanonline/milis" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb4">
                                                Mencarilewatinternet/iklanonline/milis
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb5" type="checkbox" value="Dihubungi oleh perusahaan" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb5">
                                                Dihubungi oleh perusahaan
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb6" type="checkbox" value="Menghubungi Kemenakertrans" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb6">
                                                Menghubungi Kemenakertrans
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb7" type="checkbox" value="Menghubungi agen tenaga kerja komersial/swasta" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb7">
                                                Menghubungi agen tenaga kerja komersial/swasta
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb8" type="checkbox" value="Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb8">
                                                Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb9" type="checkbox" value="Menghubungikantorkemahasiswaan/hubunganalumni" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb9">
                                                Menghubungikantorkemahasiswaan/hubunganalumni
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb10" type="checkbox" value="Membangunjejaring(network)sejakmasihkuliah" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb10">
                                                Membangunjejaring(network)sejakmasihkuliah
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb11" type="checkbox" value="Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb11">
                                                Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb12" type="checkbox" value="Membangun bisnis sendiri" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb12">
                                                Membangun bisnis sendiri
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb13" type="checkbox" value="Melalui penempatan kerja atau magang" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb13">
                                                Melalui penempatan kerja atau magang
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb14" type="checkbox" value="Bekerja di tempat yang sama dengan tempat kerja semasa kuliah" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb14">
                                                Bekerja di tempat yang sama dengan tempat kerja semasa kuliah
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cb15" type="checkbox" value="Lainnya" name="<?= $pertanyaan[36]['id'] ?>[]">
                                            <label class="form-check-label" for="cb15">
                                                Lainnya
                                            </label>
                                        </div>
                                    </div>
                                    <!-- 38 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[37]['id'] ?>" class="form-label"><?= $pertanyaan[37]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[37]['id'] ?>" id="<?= $pertanyaan[37]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 39 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[38]['id'] ?>" class="form-label"><?= $pertanyaan[38]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[38]['id'] ?>" id="<?= $pertanyaan[38]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 40 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[39]['id'] ?>" class="form-label"><?= $pertanyaan[39]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[39]['id'] ?>" id="<?= $pertanyaan[39]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 41 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[40]['id'] ?>" class="form-label"><?= $pertanyaan[40]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[40]['id'] ?>" id="<?= $pertanyaan[40]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 42 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[41]['id'] ?>" class="form-label"><?= $pertanyaan[41]['pertanyaan'] ?></label>
                                        <select class="form-control text-capitalize" name="<?= $pertanyaan[41]['id'] ?>" id="<?= $pertanyaan[41]['id'] ?>">
                                            <option value="" selected="">--</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value="Tidak, tapi saya sedang menunggu hasil lamaran kerja">Tidak, tapi saya sedang menunggu hasil lamaran kerja</option>
                                            <option value="Ya, saya akan mulai bekerja dalam 2 minggu ke depan">Ya, saya akan mulai bekerja dalam 2 minggu ke depan</option>
                                            <option value="Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                    <!-- 43 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[42]['id'] ?>" class="form-label"><?= $pertanyaan[42]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[42]['id'] ?>" id="<?= $pertanyaan[42]['id'] ?>" class="form-control">
                                    </div>
                                    <!-- 44 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[43]['id'] ?>" class="form-label"><?= $pertanyaan[43]['pertanyaan'] ?></label>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba1" type="checkbox" value="Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya" name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba1">
                                                Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba2" type="checkbox" value="Saya belum mendapatkan pekerjaan yang lebih sesuai." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba2">
                                                Saya belum mendapatkan pekerjaan yang lebih sesuai.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba3" type="checkbox" value="Di pekerjaan ini saya memeroleh prospek karir yang baik." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba3">
                                                Di pekerjaan ini saya memeroleh prospek karir yang baik.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba4" type="checkbox" value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba4">
                                                Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba5" type="checkbox" value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba5">
                                                Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba6" type="checkbox" value="Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba6">
                                                Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba7" type="checkbox" value="Pekerjaan saya saat ini lebih aman/terjamin/secure" name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba7">
                                                Pekerjaan saya saat ini lebih aman/terjamin/secure
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba8" type="checkbox" value="Pekerjaan saya saat ini lebih menarik" name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba8">
                                                Pekerjaan saya saat ini lebih menarik
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba9" type="checkbox" value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba9">
                                                Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba10" type="checkbox" value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba10">
                                                Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba11" type="checkbox" value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya." name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba11">
                                                Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba12" type="checkbox" value="Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya" name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba12">
                                                Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" id="cba15" type="checkbox" value="Lainnya" name="<?= $pertanyaan[43]['id'] ?>[]">
                                            <label class="form-check-label" for="cba15">
                                                Lainnya
                                            </label>
                                        </div>
                                    </div>
                                    <!-- 45 -->
                                    <div class="form-group col-12">
                                        <label for="<?= $pertanyaan[44]['id'] ?>" class="form-label"><?= $pertanyaan[44]['pertanyaan'] ?></label>
                                        <input type="text" name="<?= $pertanyaan[44]['id'] ?>" id="<?= $pertanyaan[44]['id'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="ml-auto d-block btn btn-primary">
                                    <i class="bi bi-arrow-return-right"></i>
                                    Selanjutnya
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal -->
    <?php $this->view('templates/logout_modal'); ?>
    <!-- End Logout Modal -->

    <!-- Footer -->
    <?php $this->view('templates/footer'); ?>
    <!-- End Footer -->
</body>

</html>