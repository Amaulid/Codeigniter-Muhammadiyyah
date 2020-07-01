
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Visi & Misi
      </h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Visi & Misi</li>
      </ol>
    </section>


            <div class="container-fluid">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Visi & Misi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Visi</th>
                  <th>Misi</th>
                </tr>
                </thead>

                <?php
                $no = 1;
                foreach($visi as $vs){ ?>

                <tbody>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $vs->visi ?></td>                 
                  <td><?php echo $vs->misi ?></td>
                  <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/visi_admin/hapus/' .$vs->id_visi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
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
