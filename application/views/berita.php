
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>BERITA</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area section__padding program__page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Popular Program</h3>
                    </div>
                </div>
            </div>

            

   <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5 mb-lg-0">

                        <?php foreach ($berita as $brt) : ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?= base_url().'/upload/'.$brt->gambar ?>" alt="">
                            </div>

                            <div class="blog_details">
                                <h2><?= $brt->judul ?></h2>
                                <p><?= $brt->konten_berita ?></p>
                                <ul class="blog-info-link">
                                    <li>Tanggal posting : <?= $brt->tanggal ?></li>
                                </ul>
                            </div>
                        </article>

                         <?php endforeach ; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
