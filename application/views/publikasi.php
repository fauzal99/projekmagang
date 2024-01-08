<div class="card">
    <div class="card-header">
        <h3 class="card-title">File Berkas</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Berkas</th>

                    <th>Unduh</th> <!-- Kolom baru untuk tombol unduh -->
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($berkas as $bks) : ?>
                    <tr>
                        <td><?php echo $bks->id ?></td>
                        <td><?php echo $bks->berkas_file ?></td>

                        <td>
                            <a href="<?php echo base_url('./berkas/' . $bks->berkas_file) ?>" class="btn btn-success btn-sm" download><i class="fas fa-download"></i> Unduh</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


    <!-- Sistem input modal -->
    <div class="modal fade" id="tambah_berkas_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('index.php/proses/C_publikasi/tambah_berkas') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload Berkas</label>
                            <input type="file" name="berkas_file" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<script src="<?php echo base_url('admin/plugins') ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('admin/plugins') ?>/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('admin/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('admin/dist/js/demo.js') ?>"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            //    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>