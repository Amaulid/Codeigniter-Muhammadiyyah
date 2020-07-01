
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        USERS
      </h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">User</li>
      </ol>
    </section>

        <div class="container-fluid">
          <div class="box">
            <div class="box-header">
              
               <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
              Tambah Admin
            </button>

            </div>

             <?php echo $this->session->flashdata('pesan') ?> 

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>  
                  <th>Nama</th>
                  <th>Username</th> 
                  <th>Email</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th colspan="3">Aksi</th>    
                </tr>
                </thead>               

                <?php
                $no = 1;
                foreach($users as $us){ ?>

                
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $us->nama ?></td>
                  <td><?php echo $us->username ?></td>
                  <td><?php echo $us->email ?></td>
                  <td><?php echo $us->password ?></td>
                  <td><?php echo $us->role_id ?></td>
         		      <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/user/hapus/' .$us->id_user, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></div>') ?>
         		       </td>                
                </tr>

                <?php } ?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="login100-form validate-form" method="post" action="<?php echo base_url('admin/user/tambah_user') ?>">
          <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukan Nama Anda" name="nama">
                  <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>') ?>
                </div>   

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username Anda" name="username">
                  <?php echo form_error('username','<div class="text-danger small ml-2">','</div>') ?>
                </div>

                 <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Anda" name="email">
                  <?php echo form_error('email','<div class="text-danger small ml-2">','</div>') ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1">
                    <?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
                    
                  </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-user btn-block">Buat Akun</button>
                
              </form>
    </div>
  </div>
</div>
</div>
