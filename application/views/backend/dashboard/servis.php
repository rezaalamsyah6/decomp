<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar Barang Servis</h3>

            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="container">

                            <div class="row">
                                <div class="col-md">

                                </div>
                            </div>
                            <?= $this->session->flashdata('flash'); ?>
                            <?= $this->session->flashdata('update'); ?>
                            <?= $this->session->flashdata('tambah') ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Servis</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis Servis</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($servis as $servis) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $servis['kode_servis']; ?></td>
                                            <td><?= $servis['nama_barang']; ?></td>
                                            <td><?= $servis['jenis_servis']; ?></td>
                                            <td><?= $servis['status']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-round btn-primary btn-sm" data-toggle="modal" data-target="#update<?= $servis['id_servis'] ?>">Update</a>

                                                <!-- modal update -->
                                                <div class="modal fade" id="update<?= $servis['id_servis'] ?>" tabindex="-1" role="dialog" aria-label="modalUpdate" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalUpdate">Form Update</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Closer">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="servis" action="<?= base_url('servis/update')  ?>" method="post">
                                                                    <div class="form-group">
                                                                        <input type="hidden" name="id_servis" value="<?= $servis['id_servis'] ?>">
                                                                        <label>Kode Servis</label>
                                                                        <input type="text" class="form-control" id="kode_servis" name="kode_servis" value="<?= $servis['kode_servis']; ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Nama barang</label>
                                                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $servis['nama_barang'] ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Jenis Servis</label>
                                                                        <input type="text" class="form-control" id="jenis_servis" name="jenis_servis" value="<?= $servis['jenis_servis'] ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Status</label>
                                                                        <input type="text" class="form-control" id="status" name="status" value="<?= $servis['status'] ?>">
                                                                    </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">UPDATE</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                                                            </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /modal update -->

                                                <a href="<?= base_url(); ?>servis/hapus/<?= $servis['id_servis']; ?>" class="btn btn-round btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data?');">Delete</a>
                                            </td>
                                        </tr>
                                    <?php $i++;
                                    endforeach ?>
                                </tbody>
                            </table>


                            <a href="<?= base_url('servis/tambah'); ?>" class="btn btn-primary" d>Tambah Servis</a>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->