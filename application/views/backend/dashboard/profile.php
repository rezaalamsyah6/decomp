 <!-- page content -->
 <div class="right_col" role="main">
     <div class="">
         <div class="page-title">
             <div class="title_left">
                 <h3>Profile Admin</h3>

             </div>
         </div>



         <div class="clearfix"></div>

         <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="x_panel">
                     <div class="x_title">
                     </div>
                     <div class="x_content">
                         <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                             <?= $this->session->flashdata('message'); ?>
                             <!-- Current avatar -->
                             <img src="<?= base_url('assets/img/upload/') . $user['image'];  ?>" alt="" class="img-thumbnail">

                             <h3><?= $user['name']; ?></h3>

                             <ul class="list-unstyled user_data">
                                 <li>
                                     <?= $user['email']; ?>
                                 </li>

                                 <li class="m-top-xs">
                                     <P>Member Sejak <?= date('d F Y', $user['date_created']); ?></P>
                                 </li>

                                 <li class="m-top-xs">
                                     <P>No Telephone <?= $user['phone']; ?></P>
                                 </li>

                                 <li class="m-top-xs">
                                     <P>Role : <?= $user['role_id']; ?></P>
                                 </li>
                             </ul>



                             <a class="btn btn-success" href="<?= base_url('dashboard/edit_profile') ?>"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                             <br />



                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>
 </div>
 </div>
 <!-- /page content -->