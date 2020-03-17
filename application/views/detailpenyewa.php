<div class="content-wrapper">
    <section class="content-header">
        <h4><strong>DETAIL DATA PENYEWA</strong></h4>
        <table class="table">
            <tr>
                <th>Id Penyewa</th>
                <td><?php echo $detailpenyewa->id_penyewa ?></td>
            </tr>
            <tr>
                <th>Nama Penyewa</th>
                <td><?php echo $detailpenyewa->nm_penyewa ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $detailpenyewa->jk ?></td>
            </tr>
            <tr>
                <th>Alamat Penyewa</th>
                <td><?php echo $detailpenyewa->alamat_penyewa ?></td>
            </tr>
            <tr>
                <th>No. HP</th>
                <td><?php echo $detailpenyewa->no_hp ?></td>
            </tr>
        </table>
        <div class="modal-footer">
        <a href="<?php echo base_url('penyewa'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </section>
</div>