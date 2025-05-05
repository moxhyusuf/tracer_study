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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="text-transform: capitalize;">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tracer Study AMIK Taruna Probolinggo</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php $no = 1; ?>
                                <?php foreach ($kuesioner as $item) : ?>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <?= $no; ?>. <?= $item->pertanyaan; ?>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text"><?= $item->jawaban; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $no++ ?>
                                <?php endforeach; ?>
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