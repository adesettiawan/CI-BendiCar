<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Denda</h1>
        
        <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Data Denda</li>
            </ol>
    </section>

    <section class="content">
    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data</button>
    <table class="table"> 
        <tr>
            <th>No</th>
            <th>Id Denda</th>
            <th>Nama Denda</th>
            <th>Denda(Rp.)</th>
            <th>Keterangan</th>
            <th colspan="2">Aksi</th>
        </tr>
            <?php 
            $no = 1;
            foreach($denda as $den) : 
            ?>
            
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $den->id_denda ?></td>
                <td><?php echo $den->nama_denda ?></td>
                <td><?php echo $den->harga_denda ?></td>
                <td><?php echo $den->ket ?></td>
                <td onclick="Javascript: return confirm('Anda Yakin? ') "><?php echo anchor('denda/hapus/' . $den->id_denda,
                '<div class="btn btn-danger btn-small"><i class="fas fa-trash"></i></div>')?> </td>
                <td><?php echo anchor('denda/editdenda/' . $den->id_denda,
                '<div class="btn btn-primary btn-small"><i class="fas fa-edit"></i></div>') ?> </td> 
            </tr>
            
            <?php endforeach; ?>
    </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA DENDA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() .'denda/tambah_denda'; ?>">
                <div class="form-group">
                    <label>Id Denda</label>
                    <input type="text" name="id_denda" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Denda</label>
                    <input type="text" name="nama_denda" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Denda(Rp.)</label>
                    <input type="text" name="harga_denda" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="ket" class="form-control" required>
                </div> 
                <div class="modal-footer">
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-success" value="Simpan">Simpan</button>
                </div>
        </form>
    </div>
  </div>
</div>
</div>