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
                <?php $this->view('kuesioner/topbar'); ?>
                <!-- End Topbar -->

                <div class="container-fluid">
                    <!-- Alert -->
                    <?php $this->view('templates/alert'); ?>
                    <!-- End Alert -->
                    <h3 class="text-center font-weight-bold mt-5 mb-3">Isi Biodata</h3>
                    <div class="card shadow mb-4 mx-md-5 mx-0">
                        <!-- <div class="card-header py-3" style="text-transform: capitalize;">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tracer Study AMIK Taruna Probolinggo</h6>
                        </div> -->
                        <form action="<?= base_url('kuesioner/alumni_create') ?>" method="post" autocomplete="off">
                            <div class="card-body">
                                <div class="row g-3 p-md-4 p-0">
                                    <div class="form-group col-md-4 col-12">
                                        <label for="nim" class="form-label">NIM</label>
                                        <input type="number" name="nim" id="nim" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="number" name="nik" id="nik" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="prodi" class="form-label">Program Studi</label>
                                        <select class="form-control text-capitalize" name="prodi" id="prodi" required>
                                            <option value="" selected="">--</option>
                                            <option value="sistem informasi">sistem informasi</option>
                                            <option value="sistem informasi akuntansi">sistem informasi akuntansi</option>
                                            <option value="teknologi informasi">teknologi informasi</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="telepon" class="form-label">No Telepon</label>
                                        <input type="number" name="telepon" id="telepon" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                        <input type="number" name="tahun_lulus" id="tahun_lulus" class="form-control" required>
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