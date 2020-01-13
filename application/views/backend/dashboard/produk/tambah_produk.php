<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tambah Produk</h3>

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
                        <h2>Form Tambah</h2>
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

                        <?= $this->session->flashdata('message'); ?>

                        <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">Nama Produk
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="nama_produk" class="form-control col-md-7 col-xs-12" name="nama_produk" type="text">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gambar Produk</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="custom-file">
                                        <br>
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stok">Stok
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="stok" class="form-control col-md-7 col-xs-12" name="stok" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deskripsi">Deskripsi
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="deskripsi" class="form-control col-md-7 col-xs-12" name="deskripsi" type="text">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="nama_kategori" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
                                <select class="form-control" id="id_kategori" name="id_kategori">
                                    <option>-Pilih Kategori-</option>
                                    <?php foreach ($kategori_produk as $kategori) : ?>
                                        <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="harga">Harga
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="harga" class="form-control col-md-7 col-xs-12" name="harga" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <a class="btn btn-primary" href="<?= base_url('produk') ?>">Kembali</a>
                                    <button type="submit" name="tambah_produk" class="btn btn-success">Submit</button>
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