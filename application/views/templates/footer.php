<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            // "lengthMenu": [
            //     [5, 25, 100],
            //     [5, 25, 100]
            // ],
            // "language": {
            //     "lengthMenu": "Tampilkan _MENU_ baris data wajib pajak",
            //     "search": "Telusuri Data:",
            //     "paginate": {
            //         "first": "Pertama",
            //         "last": "Terakhir",
            //         "next": "Selanjutnya",
            //         "previous": "Sebelumnya"
            //     },
            //     "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data wajib pajak"
            // }
        });
    });
</script>