<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Daftar Produk</h3>

      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <?= $this->session->flashdata('message'); ?>
    <?= $this->session->flashdata('update'); ?>
    <?= $this->session->flashdata('flash'); ?>

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
                    <th>Nama Barang</th>
                    <th>Gambar</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Harga</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($produk as $produk) : ?>
                    <tr>
                      <th><?= $i++; ?></th>
                      <td><?= $produk['nama_produk']; ?></td>
                      <td><img src="<?= base_url('assets/img/upload/') . $produk['image'];  ?>" alt="" class="img-thumbnail" width="150"></td>
                      <td><?= $produk['stok']; ?></td>
                      <td><?= $produk['deskripsi']; ?></td>
                      <td><?= $produk['nama_kategori']; ?></td>
                      <td><?= $produk['harga']; ?></td>
                      <td>
                        <a href="#" class="btn btn-round btn-primary btn-sm" data-toggle="modal" data-target="#update<?= $produk['id_produk'] ?>">Update</a>

                        <!-- modal update -->
                        <div class="modal fade" id="update<?= $produk['id_produk'] ?>" tabindex="-1" role="dialog" aria-label="modalUpdate" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalUpdate">Edit Data Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Closer">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="produk" action="<?= base_url('produk/update')  ?>" method="post">
                                  <div class="form-group">
                                    <input type="hidden" name="id_produk" value="<?= $produk['id_produk'] ?>">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $produk['nama_produk']; ?>">
                                  </div>

                                  <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" id="stok" name="stok" value="<?= $produk['stok'] ?>">
                                  </div>

                                  <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $produk['deskripsi'] ?>">
                                  </div>

                                  <div class="form-group">
                                    <label for="id_kategori" class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
                                    <select class="form-control" id="id_kategori" name="id_kategori">
                                      <option>-Pilih Kategori-</option>
                                      <?php foreach ($kategori_produk as $kategori) : ?>
                                        <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk['harga'] ?>">
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

                        <a href="<?= base_url(); ?>produk/hapus/<?= $produk['id_produk']; ?>" class="btn btn-round btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data?');">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach;  ?>
                </tbody>
              </table>



              <a class="btn btn-primary" href="<?= base_url('produk/tambah_produk') ?>">Tambah Produk</a>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /page content -->