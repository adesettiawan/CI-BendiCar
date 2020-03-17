<div class="content-wrapper">
<section class="content">
    <?php foreach($pengembalian as $kembali) { ?>
    <form action="<?php echo base_url(). 'pengembalian/update'; ?>" method="post">
        <div class="form-group">
        <label>No. Transaksi</label>
        <input type="text" name="no_transaksi" class="form-control" value="<?php echo $kembali->no_transaksi ?>">
        </div>
        <div class="form-group">
        <label>Tanggal Pengembalian</label>
        <input type="date" name="tgl_kembali" class="form-control" value="<?php echo $kembali->tgl_kembali ?>">
        </div>
        <div class="form-group">
        <label>Id Petugas</label>
        <input type="text" name="id_petugas" class="form-control" value="<?php echo $kembali->id_petugas ?>">
        </div>
        <div class="form-group">
        <label>Id Penyewa</label>
        <input type="text" name="id_penyewa" class="form-control" value="<?php echo $kembali->id_penyewa ?>">
        </div>
        <div class="form-group">
        <label>No. Kendaraan</label>
        <input type="text" name="no_pol" class="form-control" value="<?php echo $kembali->no_pol ?>">
        </div>
        <div class="form-group">
        <label>Id Denda</label>
        <input type="text" name="id_denda" class="form-control" value="<?php echo $kembali->id_denda ?>">
        </div>
        <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $kembali->harga ?>">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
        </div>
    </form>
    <?php } ?>
</section>
</div>