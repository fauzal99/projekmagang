<div class="container">
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-3">Ubah Berita</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('index.php/admin/C_admin/F_ubah_berita'); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_berita" value="<?php echo $berita->id_berita; ?>">

                <div class="form-group">
                    <label for="gambar_berita">Foto Berita</label>
                    <input type="file" name="gambar_berita" class="form-control-file" id="gambar_berita" required>
                    <!-- Tambahkan input hidden untuk menyimpan nilai gambar lama -->
                    <input type="hidden" name="gambar_berita_lama" value="<?php echo $berita->gambar_berita; ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $berita->keterangan; ?>" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Berita</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $berita->tanggal; ?>" required>
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