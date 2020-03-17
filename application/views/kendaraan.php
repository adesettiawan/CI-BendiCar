<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Kendaraan</h1>
        
        <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Data Kendaraan</li>
            </ol>
    </section>

    <section class="content">
    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data</button>
    <table class="table"> 
        <tr>
            <th>No</th>
            <th>No. Kendaraan</th>
            <th>Jenis Kendaraan</th>
            <th>Merk Kendaraan </th>
            <th>Harga Sewa</th>
            <th colspan="2">Aksi</th>
        </tr>
            <?php 
            $no = 1;
            foreach($kendaraan as $ken) : 
            ?>
            
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ken->no_pol ?></td>
                <td><?php echo $ken->jenis ?></td>
                <td><?php echo $ken->merek ?></td>
                <td><?php echo $ken->harga_sewa ?></td>
               
                <td onclick="Javascript: return confirm('Anda Yakin? ') "><?php echo anchor('kendaraan/hapus/' . $ken->jenis,
                '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
                <td><?php echo anchor('kendaraan/editkendaraan/' . $ken->jenis,
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA KENDARAAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() .'kendaraan/tambah_kendaraan'; ?>">
                <div class="form-group">
                    <label>No. Kendaraan</label>
                    <input type="text" name="no_pol" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kendaraan</label>
                    <input type="text" name="jenis" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Merk Kendaraan</label>
                    <input type="text" name="merek" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input type="text" name="harga_sewa" class="form-control" required>
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