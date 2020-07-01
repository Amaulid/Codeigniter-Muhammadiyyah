
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SEJARAH
      </h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Sejarh</li>
      </ol>
    </section>


            <div class="container-fluid">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sejarah Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Sejarah</th>
                  <th>Aksi</th>
                </tr>
                </thead>

                <?php
                $no = 1;
                foreach($sejarah as $sjh){ ?>

                <tbody>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $sjh->sejarah ?></td>
                  <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/sejarah/hapus/' .$sjh->id_sejarah, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                    </div>') ?></td>
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
</div>
