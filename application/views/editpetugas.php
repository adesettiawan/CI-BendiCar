<div class="content-wrapper">
<section class="content">
    <?php foreach($petugas as $tugas) { ?>
    <form action="<?php echo base_url(). 'petugas/update'; ?>" method="post">
        <div class="form-group">
        <label>Id Petugas</label>
        <input type="number" name="id_petugas" class="form-control" value="<?php echo $tugas->id_petugas ?>">
        </div>
        <div class="form-group">
        <label>Nama Petugas</label>
        <input type="text" name="nm_petugas" class="form-control" value="<?php echo $tugas->nm_petugas ?>">
        </div>
        <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="text" name="jk" class="form-control" value="<?php echo $tugas->jk ?>">
        </div>
        <div class="form-group">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" value="<?php echo $tugas->jabatan ?>">
        </div>
        <div class="form-group">
        <label>Gaji</label>
        <input type="text" name="gaji" class="form-control" value="<?php echo $tugas->gaji ?>">
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
        </div>
    </form>
    <?php } ?>
</section>
</div>