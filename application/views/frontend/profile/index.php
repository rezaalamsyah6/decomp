<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <?= $this->session->flashdata('message'); ?>
                    <?= $this->session->flashdata('password'); ?>

                    <div class="container emp-profile">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-img">
                                        <img class="img-responsive" width="200" src="<?= base_url('assets/img/upload/') . $user['image']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h3>
                                            <?= $user['name']; ?>
                                        </h3>

                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update<?= $user['id_user'] ?>">Edit Profile</button> <br>
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#password<?= $user['id_user'] ?>">Change Password</button>
                                </div>




                            </div>
                            <div class="row">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-8" style="margin-top : -80px;">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?= $user['name']; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?= $user['email']; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>No Telephone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?= $user['phone']; ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Member Sejak</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?= date('d F Y', $user['date_created']); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                    <!-- modal edit -->
                    <div class="modal fade" id="update<?= $user['id_user'] ?>" tabindex="-1" role="dialog" aria-label="modalUpdate" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalUpdate">Form Update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Closer">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="user" action="<?= base_url('home/edit_profile')  ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <img class="img-responsive" width="100" src="<?= base_url('assets/img/upload/') . $user['image']; ?>">
                                            <label for="image">Pilih Gambar</label>
                                            <input type="file" class="form-control-file" id="image" name="image">
                                        </div>

                                        <div class="form-group">
                                            <label>No Telephone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone'] ?>">
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
                    <!-- /modal Edit -->


                    <!-- modal edit password -->
                    <div class="modal fade" id="password<?= $user['id_user'] ?>" tabindex="-1" role="dialog" aria-label="modalPassword" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalPassword">Form Edit Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Closer">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="user" action="<?= base_url('home/changepassword')  ?>" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">

                                            <label for="current_passowrd">Password Sekarang</label>
                                            <input type="password" class="form-control" id="current_password" name="current_password">
                                            <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="new_password1">Password Baru</label>
                                            <input type="password" class="form-control" id="new_password1" name="new_password1">
                                            <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="new_password2">Ulangi Password Baru</label>
                                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                                            <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- /modal Edit password -->


                </div>
            </div>
        </div>
    </div>
</div>