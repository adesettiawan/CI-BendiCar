<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Petugas</h1>
        
        <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Data Petugas</li>
            </ol>
    </section>

    <section class="content">
    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data</button>
    <table class="table"> 
        <tr>
            <th>No</th>
            <th>Id Petugas</th>
            <th>Nama Petugas</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th colspan="2">Aksi</th>
        </tr>
            <?php 
            $no = 1;
            foreach($petugas as $tugas) : 
            ?>
            
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $tugas->id_petugas ?></td>
                <td><?php echo $tugas->nm_petugas ?></td>
                <td><?php echo $tugas->jk ?></td>
                <td><?php echo $tugas->jabatan ?></td>
                <td><?php echo $tugas->gaji ?></td>
                <td><?php echo anchor('petugas/detailpetugas/' . $tugas->id_petugas,
                '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?> </td>
                <td onclick="Javascript: return confirm('Anda Yakin? ') "><?php echo anchor('petugas/hapus/' . $tugas->id_petugas,
                '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
                <td><?php echo anchor('petugas/editpetugas/' . $tugas->id_petugas,
                '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?> </td> 
            </tr>
            
            <?php endforeach; ?>
    </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PETUGAS</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() .'petugas/tambah_petugas'; ?>">
                <div class="form-group">
                    <label>Id Petugas</label>
                    <input type="text" name="id_petugas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Petugas</label>
                    <input type="text" name="nm_petugas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="jk" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Gaji</label>
                    <input type="text" name="gaji" class="form-control" required>
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