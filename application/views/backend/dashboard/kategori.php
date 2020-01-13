<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar kategori Barang</h3>

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

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($kategori_produk as $kategori_produk) : ?>
                                        <tr>
                                            <th><?= $i++; ?></th>
                                            <td><?= $kategori_produk['nama_kategori']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-round btn-primary btn-sm">Update</a>
                                                <a href="" class="btn btn-round btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>

                            <?= $this->pagination->create_links(); ?>

                            <a class="btn btn-primary" href="#">Tambah Daftar</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->