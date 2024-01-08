<div class="row">
    <?php foreach ($album as $alb) : ?>
        <div class="col-md-3 mb-3">
            <div class="card ml-5 mt-2" style="width: 16rem;">
                <img src="<?php echo base_url() . 'berkas/' . $alb->gambar_album ?>" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo ('Foto Pada Album'); ?></h5>
                    <p class="card-text"><?php echo $alb->keterangan; ?></p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
                <div class="card-body">
                    <a href="<?php echo base_url('index.php/admin/C_admin/hapus_album/' . $alb->id_album) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?')">Delete</a>
                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ubah_album_modal_<?= $alb->id_album ?>">Ubah</a>
                </div>
            </div>
            <div class="modal fade" id="ubah_album_modal_<?= $alb->id_album ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah album</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('index.php/admin/C_admin/F_ubah_album'); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_album" value="<?= $alb->id_album ?>">
                                <div class="form-group">
                                    <label for="gambar_album">Foto album</label>
                                    <input type="file" name="gambar_album" class="form-control-file" id="gambar_album">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $alb->keterangan; ?>" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="card-body">
        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_album_modal">+</a>
    </div>
</div>


<div class="modal fade" id="tambah_album_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Album</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('index.php/admin/C_admin/tambah_album'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="gambar_album">Foto Album</label>
                        <input type="file" name="gambar_album" class="form-control-file" id="gambar_album" required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" required>
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