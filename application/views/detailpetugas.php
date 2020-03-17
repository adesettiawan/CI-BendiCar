<div class="content-wrapper">
    <section class="content-header">
        <h4><strong>DETAIL DATA PETUGAS</strong></h4>
        <table class="table">
            <tr>
                <th>Id Petugas</th>
                <td><?php echo $detailpetugas->id_petugas ?></td>
            </tr>
            <tr>
                <th>Nama Petugas</th>
                <td><?php echo $detailpetugas->nm_petugas ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $detailpetugas->jk ?></td>
            </tr>
            <tr>
                <th>Jabatan </th>
                <td><?php echo $detailpetugas->jabatan ?></td>
            </tr>
            <tr>
                <th>Gaji</th>
                <td><?php echo $detailpetugas->gaji ?></td>
            </tr>
        </table>
        <div class="modal-footer">
        <a href="<?php echo base_url('petugas'); ?>" class="btn btn-primary">Kembali</a>
        </div>
    </section>
</div>