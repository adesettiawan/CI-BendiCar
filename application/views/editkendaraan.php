<div class="content-wrapper">
<section class="content">
    <?php foreach($kendaraan as $ken) { ?>
    <form action="<?php echo base_url(). 'kendaraan/update'; ?>" method="post">
        <div class="form-group">
        <label>No. Kendaraan</label>
        <input type="text" name="no_pol" class="form-control" value="<?php echo $ken->no_pol ?>">
        </div>
        <div class="form-group">
        <label>Jenis Kendaraan</label>
        <input type="text" name="jenis" class="form-control" value="<?php echo $ken->jenis ?>">
        </div>
        <div class="form-group">
        <label>Merk Kendaraan</label>
        <input type="text" name="merek" class="form-control" value="<?php echo $ken->merek ?>">
        </div>
        <div class="form-group">
        <label>Harga Sewa</label>
        <input type="text" name="harga_sewa" class="form-control" value="<?php echo $ken->harga_sewa ?>">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
        </div>
    </form>
    <?php } ?>
</section>
</div>