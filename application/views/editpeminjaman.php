<div class="content-wrapper">
<section class="content">
    <?php foreach($peminjaman as $pinjam) { ?>
    <form action="<?php echo base_url(). 'peminjaman/update'; ?>" method="post">
        <div class="form-group">
        <label>No. Transaksi</label>
        <input type="text" name="no_transaksi" class="form-control" value="<?php echo $pinjam->no_transaksi ?>">
        </div>
        <div class="form-group">
        <label>Tanggal Peminjaman</label>
        <input type="date" name="tgl_peminjaman" class="form-control" value="<?php echo $pinjam->tgl_peminjaman ?>">
        </div>
        <div class="form-group">
        <label>Id Petugas</label>
        <input type="text" name="id_petugas" class="form-control" value="<?php echo $pinjam->id_petugas ?>">
        </div>
        <div class="form-group">
        <label>Id Penyewa</label>
        <input type="text" name="id_penyewa" class="form-control" value="<?php echo $pinjam->id_penyewa ?>">
        </div>
        <div class="form-group">
        <label>No. Kendaraan</label>
        <input type="text" name="no_pol" class="form-control" value="<?php echo $pinjam->no_pol ?>">
        </div>
        <div class="form-group">
        <label>Lama Peminjaman</label>
        <input type="text" name="lama_peminjaman" class="form-control" value="<?php echo $pinjam->lama_peminjaman ?>">
        </div>
        <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $pinjam->harga ?>">
        </div>
        <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text" name="jk" class="form-control" value="<?php echo $pinjam->jk ?>">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
        </div>
    </form>
    <?php } ?>
</section>
</div>