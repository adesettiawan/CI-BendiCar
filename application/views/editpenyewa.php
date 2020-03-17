<div class="content-wrapper">
<section class="content">
    <?php foreach($penyewa as $nyewa) { ?>
    <form action="<?php echo base_url(). 'penyewa/update'; ?>" method="post">
        <div class="form-group">
        <label>Id Penyewa</label>
        <input type="number" name="id_penyewa" class="form-control" value="<?php echo $nyewa->id_penyewa ?>">
        </div>
        <div class="form-group">
        <label>Nama Penyewa</label>
        <input type="text" name="nm_penyewa" class="form-control" value="<?php echo $nyewa->nm_penyewa ?>">
        </div>
        <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text" name="jk" class="form-control" value="<?php echo $nyewa->jk ?>">
        </div>
        <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat_penyewa" class="form-control" value="<?php echo $nyewa->alamat_penyewa ?>">
        </div>
        <div class="form-group">
        <label>No. Hp</label>
        <input type="text" name="no_hp" class="form-control" value="<?php echo $nyewa->no_hp ?>">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
        </div>
    </form>
    <?php } ?>
</section>
</div>