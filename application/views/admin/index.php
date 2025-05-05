<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->view('templates/head'); ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php $this->view('templates/sidebar'); ?>
        <!-- End Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <?php $this->view('templates/topbar'); ?>
                <!-- End Topbar -->

                <div class="container-fluid">
                    <!-- Alert -->
                    <?php $this->view('templates/alert'); ?>
                    <!-- End Alert -->

                    <a href="<?= base_url('admin/export') ?>" class="btn btn-success btn-sm" target="_blank">export</a>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="text-transform: capitalize;">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tracer Study AMIK Taruna Probolinggo</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" style="font-size: .8em; white-space: nowrap;" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>NIK</th>
                                            <th>Nama Alumni</th>
                                            <th>Prodi</th>
                                            <th>No. Telepon</th>
                                            <th>Email</th>
                                            <th>Tahun Lulus</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-transform: capitalize;">
                                        <?php $no = 1; ?>
                                        <?php foreach ($alumni as $item) : ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $item["nim"] ?></td>
                                                <td><?= $item["nik"] ?></td>
                                                <td><?= $item["nama"] ?></td>
                                                <td><?= $item["prodi"] ?></td>
                                                <td><?= $item["telepon"] ?></td>
                                                <td><?= $item["email"] ?></td>
                                                <td><?= $item["tahun_lulus"] ?></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="<?= base_url("admin/detail/" . $item["id"]) ?>" class="btn btn-sm btn-outline-primary btn-sn">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                        <a href="<?= base_url("admin/delete/" . $item["id"]) ?>" class="btn btn-sm btn-outline-danger btn-sn" onclick="return confirm('Apakah Anda yakin ingin menghapus data?');">
                                                            <i class="bi bi-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <?php $no++; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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