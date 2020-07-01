<script type="text/javascript" src="<?= base_url() ?>assets_admin/ckeditor/ckeditor.js"></script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BERITA
      </h1>
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Berita</li>
      </ol>
    </section>

    		<div class="container">
    			<div class="col-md-11">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tulis Brita</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

            	<?php echo $this->session->flashdata('msg');?>

              	<form action="<?php echo base_url('admin/berita_admin/tambah_berita') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul" name="judul">
                  <?php echo form_error('judul','<div class="text-danger small ml-2">','</div>') ?>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Konten</label>
                <textarea name="konten_berita" placeholder="Place some text here" id="ckeditor" class="ckeditor" 
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          <?php echo form_error('konten_berita','<div class="text-danger small ml-2">','</div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label>
                  <input type="file" id="exampleInputFile" name="gambar">
                  <?php echo form_error('gambar','<div class="text-danger small ml-2">','</div>') ?>
                </div>

               <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Tanggal" name="tanggal" min="<?= date('d-m-Y') ?>" value="<?= date('d-m-Y') ?>">
                </div>               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>         
		</div>
	  </div>
	</div>

			<div class="container">
    			<div class="col-md-11">
            	  <div class="box">
            		<div class="box-header">
             		 <h3 class="box-title">Daftar Berita</h3>
              <!-- tools box -->
             		 <div class="pull-right box-tools">
              			  <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                	  <i class="fa fa-minus"></i></button>
               			 <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                 	  <i class="fa fa-times"></i></button>
              		 </div>
              <!-- /. tools -->
            		</div>
            <!-- /.box-header -->
		            <div class="box-body pad">
		              	<table id="example2" class="table table-bordered table-hover">
		                <thead>
		                <tr>
		                  <th>No</th>
		                  <th>Judul</th>
		                  <th>Konten</th>
		                  <th>Tanggal</th>
		                  <th>Gambar</th>
		                  <th>Aksi</th>
		                </tr>
		                </thead>

		                <?php
		                $no = 1;
		                foreach($berita as $brt){ ?>
		                <tbody>
		                <tr>
		                  <td><?php echo $no++ ?></td>
		                  <td><?php echo $brt->judul ?></td>
		                  <td><?php echo $brt->konten_berita ?></td>
		                  <td><?php echo $brt->tanggal ?></td>
		                  <td style="width: 50%; height: 50px; padding: 10px;">
				              <?= $brt->gambar ?>
				          </td>
		                  <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('admin/berita_admin/hapus/' .$brt->id_berita, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>
                    </div>') ?></td>
		                </tr>
		                <?php } ?>
		              </table>
		            </div>

         
				</div>
			</div>
		 </div>
		</div>
    


    