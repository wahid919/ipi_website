<style>
  .ad {
    margin: 20px auto;
    max-width: 768px;
    background-image: url('https://tribratanewspolrestasidoarjo.com/img/berita/Berita-20210706085545.jpg');
    background-size: cover;
    background-position: left center;
    border: 1px solid #333;

  }

  /* h2 {
  background-color: rgba(245,160,25,.8);
  padding: 10px 20px;
  font-size: 2.15em;
  line-height: 70px;
  font-family: 'Oswald', sans-serif;
  text-transform: uppercase;
  transition: all .15s ease;
  text-align: center;
}
h2:hover {
  background-color: rgba(245,160,25,.8);
  transition: all .15s ease;
} */
  /* .conten {
    clear: both;
    padding: 1px 0 0 0;
  }

  .logo {
    width: 283px;
    height: 50px;
    margin: 20px auto;
    background-image: url('https://tribratanewspolrestasidoarjo.com/img/berita/Berita-20210706085545.jpg');
    background-size: cover;
    background-position: center center;
  }

  a {
    display: block;
    color: #ffffff;
    text-decoration: none;
  }

  @media screen and (max-width: 525px) {
    .ad {
      height: 90px;
    }

    .conten {
      padding: 0 25px;
    }

    .logo {
      float: left;
    }

    .nilai {
      margin-top: 5%;
    }

    .kata {
      margin-top: 5%;
    }

    .atas {
      padding: 0 30px 0 30px;
    }

    .ds-nilai {
      margin-top: -9%;
    }

  } */
  /* h2 {
  float: right;
  background-color: rgba(255,255,255,.25);
} */

  /* @media (min-width:1200px) {
    .container {
      max-width: 1540px
    }

    .nilai {
      margin-top: -11%;
    }

    .kata {
      margin-top: -10%;
    }

    .sliderkata {
      height: 600px;
    }
  }

  .owl-carousel .owl-item img {
    width: 20%;
  }

  .nilai {
    color: white;
  } */
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans&family=Elsie+Swash+Caps&family=Manjari:wght@100&display=swap');
</style>
<!-- <hr> -->
<hr class="mt-0">
<section id="blogSingle" class="blog blog-single">
  <div class="container atas" style>
    <div class="program1-wrap">
      <div class="col-lg-12 col-md-12 col-sm-12 pt-0">
        <br>
        <br>
        <!-- <br> -->
        <div class="row text-center" style="margin-top: -3%;">
          <!-- <p>IKM bersinergitas lebih baik untuk mendukung UKM Kota Batu supaya bisa lebih dikenal secara luas</p> -->
          <img style="min-width: 100%; border-radius: 20px; box-shadow: rgb(204 204 204) 7px 9px 7px;" src="<?= Yii::$app->request->baseUrl . '/uploads/setting/' . $setting->foto_tentang_kami ?>">
        </div>
        <br>
        <br>
        <div class="row pt-20">
          <div class="col-lg-5">
            <h4 style="position: relative;margin: 0px 0px 15px;background: none;line-height: 1.3em;font-size: 161%;font-weight: 700;color: #757575;">
              </strong>Visi IPI
            </h4>
            <p class="desc-program" ; ">
              <?= $setting->visi ?>
            </p>
          </div>
          <div class=" col-lg-2">
          </div>

          <div class=" col-lg-5">

          </div>
        </div>
        <div class="row pt-20">
          <div class="col-lg-5"></div>
          <div class="col-lg-2">
            <div class="center" align="center">
              <img src="../../web/template/assets2/img/andicon.png" alt="" style="margin-top: -31%;margin-left: -14%;max-width: 60%;position: inherit;">
            </div>
          </div>
          <div class=" col-lg-5"></div>
        </div>
        <div class="row pt-20">

          <div class="col-lg-5">

          </div>
          <div class="col-lg-2"></div>
          <div class=" col-lg-5">
            <h4 style=" position: relative;margin: 0px 0px 15px;background: none;line-height: 1.3em;font-size: 161%;font-weight: 700;color: #757575;">
              Misi IPI</h4>
            <style>
              .manjari {
                position: relative;
                font-weight: normal;
                margin: 0px 0px 15px;
                background: none;
                line-height: 1.3em;
                color: #757575;
                font-family: 'Manjari', sans-serif;
              }
            </style>
            <p class="desc-program ">
            <div class="manjari">
              <?= $setting->misi ?>
            </div>
            </p>
          </div>
        </div>

      </div><!-- /.col-lg-12 -->
      <!-- <div class="col-lg-3 col-md-6 col-sm-12 pt-70"> -->

    </div>
  </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Single -->
<section id="slider1" class="slider slider-1 sliderkata">

  <div class="mt-4 mb-4">
    <div class="container mt-4 mb-4">
      <div class="slide-item align-v-h" style="background-color: #DDDDDD">
        <!-- background-image: linear-gradient(#82C26E,#A8D26D); -->
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 kata">
              <div class="slide__content">
                <div class="card" style="margin-left: -7%;">
                  <div class="card-body">
                    <img src="<?= $icon ?>" class="logo-header logo-dark" alt="logo" />
                    <p style="padding-top: 10px;"><?= $setting->tentang_kami ?></p>
                    <h5 style="padding-top: 30px;">Linkedln</h5>
                    <p>Website: <a href="http://www.dppipi.org">http://www.dppipi.org</a> </p>

                    <p>Pengurus Pusat </p>

                  </div>
                </div>
              </div><!-- /.slide-content -->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 nilai">
              <h3 align="center" style="margin-left: 30%;color:#757575"></h3>
              <?php foreach ($nilais as $keys => $nilai) {
                $number = $keys + 1; ?>
                <div class="col-lg-12 col-md-12 mt-3">
                  <!-- <div class="card shadow-br2" style="border-radius: 15px;"> -->
                  <!-- <a href="<?= \yii\helpers\Url::to(['home/detail-berita', 'id' => $berita["slug"]]) ?>">
                      <div class="team-img" style="background-image: url(<?= \Yii::$app->request->baseUrl . "/uploads/berita/" . $berita["gambar"] ?>);border-radius: 15px;height:100px;width:auto">
                      </div>
                      </a> -->
                  <!-- <div class="card-body" style="margin-top: -10px;"> -->
                  <div class="row">
                    <!-- <div class="col-md-3"> -->
                    <h6 style="color:#999999;"><?= $number ?></h6>
                    <!-- </div> -->
                    <div class="col-md-9">
                      <h6 class="card-title ds-nilai" style="color:white"><?= $nilai->nama ?></h6>
                      <p> <?= $nilai->isi ?></p>
                    </div>
                  </div>

                  <!-- </div> -->
                  <!-- </div> -->
                  <!-- </a> -->
                </div>
              <?php } ?>

              <!-- <div class="col-sm-12 col-md-12 col-lg-4">
              </div> -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div>
    </div>
  </div><!-- /.carousel -->
  <br>

</section><!-- /.slider -->
<section id="services" class="services pb-90 pt-50">
  <div class="container">
    <!-- <h2 style="position: relative;margin: 0px 0px 15px;background: none;line-height: 1.3em;font-size: 161%;font-weight: 700;color: #1c1c1c;">Keuntungan Menjadi Bagian Dari Kami</h2> -->

    <div class="row mt-2">
      <?php foreach ($keuntungans as $keuntungan) { ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-3">
          <div class="card h-100 card_berita" style="background-color: #fafafa;">
            <div class="card-body">
              <i class="<?= $keuntungan->icon ?> fa-2x" style="color:red" aria-hidden="true"></i>
              <h6 class="card-title"><?= $keuntungan->nama ?></h6>
              <div class="content-berita__info">

              </div>
              <p style="color: #666; margin-bottom: .5rem; font-size: .9rem" :hover="color: #666">
                <?= $keuntungan->isi ?>
              </p>
            </div>
          </div>
          <!-- </a> -->
        </div>
      <?php } ?>
    </div>

  </div><!-- /.container -->
</section><!-- /.Services -->

<section id="services" class="services pb-90">
  <div class="container">
    <h2 class="text-center" style="position: relative;margin: 0px 0px 15px;background: none;line-height: 1.3em;font-size: 161%;font-weight: 700;color: #757575;">Anggota</h2>
    <div class="row">

      <?php foreach ($struktur_organisasi as $organisasi) { ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 mt-3">
          <!-- <div class="card h-100 card_berita"> -->
          <div class="card h-100 card_berita" align="center" style="background-color: #fafafa;">
            <div style="border-radius: .7rem;background-image: url(<?= \Yii::$app->request->baseUrl . "/uploads/struktur_organisasi/" . $organisasi->foto ?>);background-size: cover;height: 200px;">

            </div>
            <!-- <div class="card h-100 card_berita" align="center" style="background-color: #fafafa;"> -->
            <div class="card-body">
              <h6 class="card-title"><?= $organisasi->nama ?></h6>
              <div class="content-berita__info">

              </div>
              <p style="color: #666; font-size: .9rem" :hover="color: #666">
                <?= $organisasi->jabatan ?>
              </p>
            </div>
            <!-- </div> -->
          </div>
          <!-- </a> -->
        </div>
      <?php } ?>
    </div>
  </div>
  <br>
  <br>
</section>