<div class="content-wrapper">
<section class="content">
    <?php foreach($denda as $den) { ?>
    <form action="<?php echo base_url(). 'denda/update'; ?>" method="post">
        <div class="form-group">
        <label>Id Denda</label>
        <input type="text" name="id_denda" class="form-control" value="<?php echo $den->id_denda ?>">
        </div>
        <div class="form-group">
        <label>Nama Denda</label>
        <input type="text" name="nama_denda" class="form-control" value="<?php echo $den->nama_denda ?>">
        </div>
        <div class="form-group">
        <label>Denda(Rp.)</label>
        <input type="text" name="harga_denda" class="form-control" value="<?php echo $den->harga_denda ?>">
        </div>
        <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="ket" class="form-control" value="<?php echo $den->ket ?>">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
        </div>
    </form>
    <?php } ?>
</section>
</div>