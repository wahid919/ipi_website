<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Berita;
use app\models\Produk;
use yii\db\Expression;
use yii\data\Pagination;
use app\models\ProdukSize;
use app\models\ProductDetail;
use yii\bootstrap\ActiveForm;
use app\models\KategoriProduk;
use richardfan\widget\JSRegister;
?>
<style>
    #grad1 {
        height: 270px;
    }

    @media screen and (min-width: 1200px) {

        #grad1 {
            height: 375px;
        }

        .card {
            height: 429.69px;
        }
    }

    @media screen and (max-width: 540px) {

        .slide__content {
            margin-top: 4%;
        }
    }

    .img-fluid {
        -moz-box-shadow: 10px 10px 5px #ccc;
        -webkit-box-shadow: 10px 10px 5px #ccc;
        box-shadow: 10px 10px 5px #ccc;
        -moz-border-radius: 25px;
        -webkit-border-radius: 25px;
        border-radius: 25px;
    }

    .card_beritas {
        box-shadow: 0 0 3px 0px #dedede;
    }

    .gmbr {
        background-size: cover;
        height: 175px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10%;
        width: 60%;
        border-radius: 10%;
    }

    .harga {
        pointer-events: none;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: black;
        background-color: white;
    }

    .featured__controls ul li:after {
        position: absolute;
        left: 0;
        bottom: 4px;
        width: 100%;
        height: 2px;
        background: #7fad39;
        content: "";
        opacity: 0;
    }

    .no h5:hover {
        color: #1c1c1c;
    }
</style>
<?php /*
<section id="slider3" class="slider slider-3">
  <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
    <?php foreach($slider as $slides){ ?>
<div class="slide-item align-v-h bg-overlay">
    <!-- <div class="bg-img"><img src="assets/images/sliders/3.jpg" alt="slide img"></div> -->
    <div class="bg-img"><img src="<?= Yii::$app->request->baseUrl . '/uploads/slides/' . $slides->gambar ?>"
            alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-6">
                <div class="slide__content">
                    <h2 class="slide__title">Affordable Price, Certified experts &</h2>
                    <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive
                        advantages to some of the largest companies allover the world.</p>
                    <a href="#" class="btn btn__white mr-30">Get Started</a>
                    <a href="#" class="btn btn__primary btn__hover2">Our Services</a>
                </div><!-- /.slide-content -->
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.slide-item -->
<?php } ?>
</div><!-- /.carousel -->
</section><!-- /.slider -->
*/ ?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Semua Kategori</span>
                    </div>
                    <?php
                    foreach ($kategoris as $kategori) { ?>
                        <ul>
                            <li><a href="<?= \Yii::$app->request->baseUrl . "/home/produk?kategori=" . $kategori->nama ?>"> <?= $kategori->nama ?></a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Lets
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text no">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="<?= Yii::$app->request->baseUrl . '/uploads/slides/' . $slides->gambar ?>" style="box-shadow: 10px 10px 5px #ccc;
    border-radius: 20px;    background-repeat: no-repeat;
    background-position: center;">
                    <div class="hero__text">
                        <!-- <span>FRUIT FRESH</span>
                        <h2>Vegetable <br />100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="#" class="primary-btn">About</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <!--  -->
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php
                foreach ($kategoris as $kategori) { ?>
                    <div class="col-lg-3">
                        <div class="categories__item" style=" background-color: #f3f6fb;">
                            <img class="center" style="min-width: 70%;
                padding: 5%;
                display: block;
                margin: auto;
                min-height: 76px;
                max-width: 76px;
                " src="<?= \Yii::$app->formatter->asMyImage("icon2/$kategori->icon2", false, "logo.png;") ?>">
                            <h5><a href="<?= \Yii::$app->request->baseUrl . "/home/produk?kategori=" . $kategori->nama ?>"> <?= $kategori->nama ?></a></h5>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!--  -->
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produk Unggulan</h2>
                </div>
                <div class="text__block-3">
                    <div class="featured__controls" style="margin-right: 0px;" align="center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="background-color: none; margin-right: 0px">
                            <li class="active" data-filter="#all">
                                <h6 style="background-color: none" class="nav-link" id="pills-<?= $data->id ?>-tab" data-toggle="pill" href="#pills-<?= $data->id ?>" role="tab" aria-controls="pills-<?= $data->id ?>" aria-selected="true">
                                    All
                                </h6>
                            </li>
                            <?php foreach ($kategoris as $data) {
                            ?>
                                <li class="nav-item" style="margin-right: none" data-filter="#prous">
                                    <h6 style="background-color: none" class="nav-link" id="pills-<?= $data->id ?>-tab" data-toggle="pill" href="#pills-<?= $data->id ?>" role="tab" aria-controls="pills-<?= $data->id ?>" aria-selected="true">
                                        <?= $data->nama; ?>
                                    </h6>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="row featured__filter">
                    <?php

                    foreach ($produk as $page) {
                        $minimumprice = ProductDetail::find()->where(['id_product' => $page->id])->min('harga');
                        $maximumprice = ProductDetail::find()->where(['id_product' => $page->id])->max('harga');
                        $averageprice = ProductDetail::find()->where(['id_product' => $page->id])->average('harga');
                    ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 mix" id=all>
                            <div class="featured__item">
                                <div class="featured__item__pic" style="background-image: url(<?= \Yii::$app->request->baseUrl . "/uploads/banner_produk/" . $page->foto_banner ?>);    border-radius: 5%;background-position: center;background-repeat: no-repeat;background-size: cover;box-shadow: rgb(204 204 204) 12px 12px 9px;">
                                    <ul class="featured__item__pic__hover">
                                        <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                        <li><a href="<?= Url::to(["detail-produk", "id" => $page->id]) ?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#"><?= $page->nama ?></a></h6>
                                    <h5 class="harga"><?= \app\components\Angka::toReadableHarga($averageprice); ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <?php foreach ($kategoris as $data) {
                            $detail_pages = Produk::find()->where(['kategori_produk_id' => $data->id])->orderBy(new Expression('rand()'))->all(); ?>
                            <div class="tab-pane fade" id="pills-<?= $data->id ?>" role="tabpanel" aria-labelledby="pills-<?= $data->id ?>">
                                <div class="row featured__filter">
                                    <?php foreach ($detail_pages as $page) {
                                    ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mix" id=prous>
                                            <div class="featured__item">
                                                <div class="featured__item__pic" style="background-image: url(<?= \Yii::$app->request->baseUrl . "/uploads/banner_produk/" . $page->foto_banner ?>);    border-radius: 5%;background-position: center;background-repeat: no-repeat;background-size: cover;box-shadow: rgb(204 204 204) 12px 12px 9px;">
                                                    <ul class="featured__item__pic__hover">
                                                        <!-- <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
                                                        <li><a href="<?= Url::to(["detail-produk", "id" => $page->id]) ?>"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="featured__item__text">
                                                    <h6><a href="#"><?= $page->nama ?></a></h6>
                                                    <h5 class="harga"><?= \app\components\Angka::toReadableHarga($page->harga); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-2.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-3.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

<!-- Blog Section Begin -->
<!-- <section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog-2.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="img/blog/blog-3.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Visit the clean farm in the US</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Blog Section End -->
<br>