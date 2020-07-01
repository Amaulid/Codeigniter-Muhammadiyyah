
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img style="height: 400px;" src="<?php echo base_url() ?>assets/img/galeri/slide1.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img style="height: 400px;" src="<?php echo base_url() ?>assets/img/galeri/slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style="height: 400px;" src="<?php echo base_url() ?>assets/img/galeri/slide3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


            <!-- popular_program_area_start  -->
    <div class="popular_program_area section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="section_title text-center">
                        <h3>Popular</h3>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">

                         <?php foreach ($berita as $brt) : ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img style="width: 340px ; height: 200px;" src="<?= base_url().'/upload/'.$brt->gambar ?>">
                                </div>
                                <div class="program__content">
                                    <span><?= $brt->judul ?></span>
                                    <p><?= $brt->konten_berita ?></p>
                                    <p><?= $brt->tanggal ?></p>
                                </div>

                            </div>
                        </div>
                        <?php endforeach ; ?>
                    </div>
                </div>
                
        </div>
    </div>
    <!-- popular_program_area_end -->


<!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30">Visi</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?php echo base_url() ?>assets/img/elements/d.jpg" alt="" class="img-fluid">
                    </div>

                    <?php foreach ($visi as $vs) : ?>

                    <div class="col-md-9 mt-sm-20">
                        <p><?= $vs->visi ?></p>
                    </div>
                    <?php endforeach ; ?>
                </div>
            </div>
            <div class="section-top-border text-right">
                <h3 class="mb-30">Misi</h3>
                <div class="row">
                    <?php foreach ($visi as $vs) : ?>
                    <div class="col-md-9">
                        <p class="text-right"><?= $vs->misi ?></p>
                        <p class="text-right"></p>
                    </div>
                    <?php endforeach ; ?>
                    <div class="col-md-3">
                        <img src="<?php echo base_url() ?>assets/img/elements/d.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="section-top-border">
        <h2 align="center">Image Gallery</h2>
        <hr>
        <div class="row gallery-item">

          <?php foreach ($gambar as $glr) : ?>

          <div class="col-md-4">
            <a href="<?= base_url().'/upload/'.$glr->gambar ?>" class="img-pop-up">
              <div class="single-gallery-image" style="background: url(<?= base_url().'/upload/'.$glr->gambar ?>);"></div>
            </a>
          </div>

           <?php endforeach ; ?>

        </div>
    </div>
  </div>
</div>
    </div>

         <div class="container">
    <div class="section-top-border">
        <h2 align="center">Video Galeri</h2>
        <hr>
        <div class="row gallery-item">

 <!-- News and Event Area Start Here -->
        <div class="news-event-area mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 event-inner-area">
                        <h2 class="title-default-left">Profile </h2>
                        <div class="video-area2 overlay-video bg-common-style" >
                            <div class="video-content">
                                 <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" width="650" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 news-inner-area">
                        <h2 class="title-default-left">Videos Kegiatan</h2>
                        <ul class="news-wrapper news-wrapper-responsive">
                                                    <li>
                                <div class="news-img-holder">
                                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" width="300" height="150" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </li>
                                                    <li>
                                <div class="news-img-holder">
                                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" width="300" height="150" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </li>
                                                    <li>
                                <div class="news-img-holder">
                                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" width="300" height="150" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- News and Event Area End Here -->

    </div>
</div>
</div>
