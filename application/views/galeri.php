 <!-- bradcam_area_start  -->
  <div class="bradcam_area breadcam_bg">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>GALERI</h3>
                  </div>
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
	