<div class="row">
    <?php foreach ($berita as $brt) : ?>
        <div class="col-md-3 mb-3">
            <div class="card ml-5 mt-2" style="width: 16rem;">
                <img src="<?php echo base_url() . 'berkas/' . $brt->gambar_berita ?>" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $brt->tanggal; ?></h5>
                    <p class="card-text"><?php echo $brt->keterangan; ?></p>
                </div>

                <div class="card-body">
                    <a href="<?php echo base_url('index.php/admin/C_admin/hapus_berita/' . $brt->id_berita) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editberitamodal<?php echo $brt->id_berita; ?>">Ubah</a>

                    <a href="<?php echo base_url('index.php/admin/C_admin/ubah_berita/' . $brt->id_berita) ?>"></a>

                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="card-body">
        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_berita_modal">+</a>
    </div>

</div>


<div class="modal fade" id="tambah_berita_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/admin/C_admin/tambah_berita'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="gambar_berita">Foto Berita</label>
                        <input type="file" name="gambar_berita" class="form-control-file" id="gambar_berita" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Berita</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- 
<div class="modal fade" id="ubah_berita_modal<?php echo $brt->id_berita; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/admin/C_admin/ubah_berita/' . $brt->id_berita); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="gambar_berita">Foto Berita</label>
                        <input type="file" name="gambar_berita" class="form-control-file" id="gambar_berita" required>
                        <input type="hidden" name="gambar_berita_lama" value="<?php echo $brt->gambar_berita; ?>">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $brt->keterangan; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Berita</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $brt->tanggal; ?>" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div> -->
<?php foreach ($berita as $brt) : ?>
    <!-- Modal edit pelanggan -->
    <div class="modal fade" id="editberitamodal<?php echo $brt->id_berita; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('index.php/admin/C_admin/coba_berita/' . $brt->id_berita); ?>" method="post">

                        <div class="form-group">
                            <label for="tanggal">Tanggal Jatuh Tempo</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $brt->tanggal; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $brt->keterangan; ?>" required>
                        </div>

                </div>
                <div class="form-group">
                    <label for="gambar_berita">Foto Pelanggan</label>
                    <input type="file" name="gambar_berita" class="form-control-file" id="gambar_berita">

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>