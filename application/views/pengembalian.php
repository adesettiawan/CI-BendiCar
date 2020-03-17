<div class="content-wrapper">
    <section class="content-header">
        <h1>Data Pengembalian</h1>
        
        <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-tachometer-alt"></i></a> Home</li>
              <li class="breadcrumb-item active">Data Pengembalian</li>
            </ol>
    </section>

    <section class="content">
    <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data</button>
    <table class="table"> 
        <tr>
            <th>No</th>
            <th>No. Transaksi</th>
            <th>Tanggal Pengembalian</th>
            <th>Id Petugas</th>
            <th>Id Penyewa</th>
            <th>No. Kendaraan</th>
            <th>Id Denda</th>
            <th>Harga</th>
            <th colspan="2">Aksi</th>
        </tr>
            <?php 
            $no = 1;
            foreach($pengembalian as $kembali) : 
            ?>
            
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $kembali->no_transaksi ?></td>
                <td><?php echo $kembali->tgl_kembali ?></td>
                <td><?php echo $kembali->id_petugas ?></td>
                <td><?php echo $kembali->id_penyewa ?></td>
                <td><?php echo $kembali->no_pol ?></td>
                <td><?php echo $kembali->id_denda ?></td>
                <td><?php echo $kembali->harga ?></td>
                <td onclick="Javascript: return confirm('Anda Yakin? ') "><?php echo anchor('pengembalian/hapus/' . $kembali->no_transaksi,
                '<div class="btn btn-danger btn-small"><i class="fas fa-trash"></i></div>')?> </td>
                <td><?php echo anchor('pengembalian/editpengembalian/' . $kembali->no_transaksi,
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
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PENGEMBALIAN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() .'pengembalian/tambah_pengembalian'; ?>">
                <div class="form-group">
                    <label>No. Transaksi</label>
                    <input type="text" name="no_transaksi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Pengembalian</label>
                    <input type="date" name="tgl_kembali" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Id Petugas</label>
                    <input type="text" name="id_petugas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Id Penyewa</label>
                    <input type="text" name="id_penyewa" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>No. Kendaraan</label>
                    <input type="text" name="no_pol" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Id Denda</label>
                    <input type="text" name="id_denda" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" required>
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