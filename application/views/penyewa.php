<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Penyewa</h1>
        
        <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Data Penyewa</li>
            </ol>
    </section>

    <section class="content">
    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data</button>
    <table class="table"> 
        <tr>
            <th>No</th>
            <th>Id Penyewa</th>
            <th>Nama Penyewa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Penyewa</th>
            <th>No. Hp</th>
            <th colspan="2">Aksi</th>
        </tr>
            <?php 
            $no = 1;
            foreach($penyewa as $nyewa) : 
            ?>
            
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $nyewa->id_penyewa ?></td>
                <td><?php echo $nyewa->nm_penyewa ?></td>
                <td><?php echo $nyewa->jk ?></td>
                <td><?php echo $nyewa->alamat_penyewa ?></td>
                <td><?php echo $nyewa->no_hp ?></td>
                <td><?php echo anchor('penyewa/detailpenyewa/' . $nyewa->id_penyewa,
                '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?> </td> 
                <td onclick="Javascript: return confirm('Anda Yakin? ') "><?php echo anchor('penyewa/hapus/' . $nyewa->id_penyewa,
                '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
                <td><?php echo anchor('penyewa/editpenyewa/' . $nyewa->id_penyewa,
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PENYEWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() .'penyewa/tambah_penyewa'; ?>">
                <div class="form-group">
                    <label>Id Penyewa</label>
                    <input type="text" name="id_penyewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Penyewa</label>
                    <input type="text" name="nm_penyewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="jk" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat_penyewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>No. Hp</label>
                    <input type="text" name="no_hp" class="form-control" required>
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