<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your existing head content goes here -->

    <link rel="stylesheet" href="<?php echo base_url('admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Add other stylesheet links as needed -->
</head>

<body>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">File Berkas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <button class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#tambah_berkas_modal">
                    <i class="fas fa-plus fa-sm"></i> Tambah berkas
                </button>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Berkas</th>
                        <th>Aksi</th>
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
                                <a href="<?php echo base_url('index.php/C_home/hapus_berkas/' . $bks->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">Delete</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url('./berkas/' . $bks->berkas_file) ?>" class="btn btn-success btn-sm" download><i class="fas fa-download"></i> Unduh</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Adding Files -->
    <div class="modal fade" id="tambah_berkas_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for Adding Files -->
                    <form action="<?php echo base_url('index.php/proses/C_publikasi/tambah_berkas') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Upload Berkas</label>
                            <input type="file" name="berkas_file" class="form-control" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>

            </div>

        </div>

    </div>