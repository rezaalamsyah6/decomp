<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Servis</h3>

            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Edit</h2>
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

                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kode_servis">Kode Servis
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="kode_servis" class="form-control col-md-7 col-xs-12" name="kode_servis" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_barang">Nama Barang
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nama_barang" class="form-control col-md-7 col-xs-12" name="nama_barang" type="text">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_servis">Jenis Servis
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="jenis_servis" class="form-control col-md-7 col-xs-12" name="jenis_servis" type="text">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Belum bisa Di Ambil">Belum bisa Di Ambil</option>
                                    <option value="Bisa di Ambil">Bisa di Ambil</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a class="btn btn-primary" href="<?= base_url('servis') ?>">Kembali</a>
                                    <button type="submit" name="tambah" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->