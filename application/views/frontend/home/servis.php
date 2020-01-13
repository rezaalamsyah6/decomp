<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">


                    <?= form_open('home/servis_cari') ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Kode Servis" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                    <?= form_close() ?>


                    <div class="cart_title">Daftar List Servis</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Servis</th>
                                <th>Nama Barang</th>
                                <th>Jenis Servis</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($servis as $servis) : ?>
                                <tr>
                                    <th><?= $i++; ?></th>
                                    <td><?= $servis['kode_servis']; ?></td>
                                    <td><?= $servis['nama_barang']; ?></td>
                                    <td><?= $servis['jenis_servis']; ?></td>
                                    <td><?= $servis['status']; ?></td>
                                </tr>
                            <?php endforeach;  ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>