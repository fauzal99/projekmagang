<div class="container">
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-3">Ubah Album</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('index.php/admin/C_admin/F_ubah_album'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_album" value="<?php echo $album->id_album; ?>">

                <div class="form-group">
                    <label for="gambar_album">Foto Album</label>
                    <input type="file" name="gambar_album" class="form-control-file" id="gambar_album" required>
                    <!-- Tambahkan input hidden untuk menyimpan nilai gambar lama -->
                    <input type="hidden" name="gambar_album_lama" value="<?php echo $album->gambar_album; ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $album->keterangan; ?>" required>
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