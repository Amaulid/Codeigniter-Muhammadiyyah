
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        GALERY
      </h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li>Galeri</li>
        <li class="active">Video</li>
      </ol>
    </section>

        <div class="container-fluid">
          <div class="box">
            <div class="box-header">
              
               <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
              Tambah Video
            </button>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>  
                  <th>Video</th> 
                  <th>Aksi</th>    
                </tr>
                </thead>               

                <?php
                $no = 1;
                foreach($video as $vd){ ?>

                
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td>
                    <div class="news-img-holder">
                    <iframe src="<?= base_url().'/upload/'.$vd->link_video ?>" width="300" height="150" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
         		  </td>
         		  <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/galeri_admin/hapus/' .$vd->id_video, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></div>') ?>
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
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="<?php echo base_url('admin/video_admin/tambah_video') ?>">
        <div class="input-group">

          <div class="mt-10">
                <input type="text" name="judul" placeholder="First Name"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                  class="single-input">
              </div>

          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="gambar">
          </div>          
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </form>

    </div>
  </div>
</div>
