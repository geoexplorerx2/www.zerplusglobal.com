<?php include('layouts/header-porfolio.php'); ?>

    <header class="pages-header work-header bg-img valign" data-background="img/009.jpeg" data-overlay-light="9">
        <div class="container">
            <div class="section-head text-center mb-0">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-11">
                        <h6 class="custom-font"><?= $lang['portfolio-portfolio']; ?></h6>
                        <h4 class="playfont"><?= $lang['portfolio-hayal']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="filtering text-center col-12">
                    <div class="filter box">
                        <span data-filter='*' class="active"><?= $lang['portfolio-hepsi']; ?></span>
                        <span data-filter='.hotel'><?= $lang['portfolio-otel'];  ?></span>
                        <span data-filter='.office'><?= $lang['portfolio-ofis']; ?></span>
                        <span data-filter='.restaurant'><?= $lang['portfolio-ticari']; ?></span>
                        <span data-filter='.house'><?= $lang['portfolio-konut']; ?></span>
                        <span data-filter='.permit'><?= $lang['portfolio-ruhsat']; ?></span>
                    </div>
                </div>

                <div class="gallery twsty inf-lit full-width">

                    <div class="items hotel three-column mt-50 fancyGallery" data-caption="Nova Crystal Hotel" data-images='["img/portfolio/projects/crystal/10.jpg","img/portfolio/projects/crystal/12.jpg","img/portfolio/projects/crystal/8.jpg","img/portfolio/projects/crystal/9.jpg","img/portfolio/projects/crystal/11.jpg","img/portfolio/projects/crystal/13.jpg","img/portfolio/projects/crystal/14.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/crystal/cover.jpg" >
                            <a href="javascript:;" >
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-1'] ; ?></h5>
                            <span><?= $lang['portfolio-otel']; ?></span>
                        </div>
                    </div>

                    <div class="items office three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/arpanuofis/1.jpg","img/portfolio/projects/arpanuofis/2.jpg","img/portfolio/projects/arpanuofis/3.jpg","img/portfolio/projects/arpanuofis/4.jpg","img/portfolio/projects/arpanuofis/5.jpg","img/portfolio/projects/arpanuofis/6.jpg","img/portfolio/projects/arpanuofis/7.jpg","img/portfolio/projects/arpanuofis/8.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/arpanuofis/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-2'] ; ?></h5>
                            <span><?= $lang['portfolio-ofis']; ?></span>
                        </div>
                    </div>

                    <div class="items restaurant three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/crystalyemek/3.jpg","img/portfolio/projects/crystalyemek/5.jpg","img/portfolio/projects/crystalyemek/6.jpg","img/portfolio/projects/crystalyemek/1.jpg","img/portfolio/projects/crystalyemek/2.jpg"]' >
                        <div class="item-img bg-img" data-background="img/portfolio/projects/crystalyemek/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-3'] ; ?></h5>
                            <span><?= $lang['portfolio-restoran']; ?></span>
                        </div>
                    </div>

                    <div class="items office three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/dentfix/2.jpg","img/portfolio/projects/dentfix/1.jpg","img/portfolio/projects/dentfix/8.jpg","img/portfolio/projects/dentfix/7.jpg","img/portfolio/projects/dentfix/9.jpg","img/portfolio/projects/dentfix/4.jpg","img/portfolio/projects/dentfix/10.jpg","img/portfolio/projects/dentfix/6.jpg","img/portfolio/projects/dentfix/3.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/dentfix/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-4'] ; ?></h5>
                            <span><?= $lang['portfolio-klinik']; ?></span>
                        </div>
                    </div>

                    <div class="items office three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/lab/4.jpg","img/portfolio/projects/lab/3.jpg","img/portfolio/projects/lab/1.jpg","img/portfolio/projects/lab/5.jpg","img/portfolio/projects/lab/2.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/lab/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-5'] ; ?></h5>
                            <span><?= $lang['portfolio-ofis']; ?></span>
                        </div>
                    </div>

                    <div class="items office theaters three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/mam/1.jpg","img/portfolio/projects/mam/2.jpg","img/portfolio/projects/mam/3.jpg","img/portfolio/projects/mam/4.jpg","img/portfolio/projects/mam/5.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/mam/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-6'] ; ?></h5>
                            <span><?= $lang['portfolio-ofis']; ?></span>
                        </div>
                    </div>

                    <div class="items hotel three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/pera/1.jpg","img/portfolio/projects/pera/3.jpg","img/portfolio/projects/pera/6.jpg","img/portfolio/projects/pera/5.jpg","img/portfolio/projects/pera/4.jpg",
                        "img/portfolio/projects/pera/2.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/pera/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-7'] ; ?></h5>
                            <span><?= $lang['portfolio-mimar']; ?></span>
                        </div>
                    </div>

                    <div class="items restaurant theaters three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/guzideCumhuriyet/2.jpg","img/portfolio/projects/guzideCumhuriyet/4.jpg","img/portfolio/projects/guzideKent/1.jpg","img/portfolio/projects/guzideCumhuriyet/5.jpg","img/portfolio/projects/guzideKent/2.jpg",
                        "img/portfolio/projects/guzideCumhuriyet/1.jpg","img/portfolio/projects/guzideCumhuriyet/3.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/guzideCumhuriyet/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-8'] ; ?></h5>
                            <span><?= $lang['portfolio-restoran']; ?></span>
                        </div>
                    </div>

                    <!-- hamam images -->
                    <div class="items restaurant three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/catmaMescitHamam/0.jpg","img/portfolio/projects/catmaMescitHamam/1.jpg","img/portfolio/projects/catmaMescitHamam/2.jpg","img/portfolio/projects/catmaMescitHamam/5.jpg","img/portfolio/projects/catmaMescitHamam/6.jpg","img/portfolio/projects/catmaMescitHamam/7.jpg","img/portfolio/projects/catmaMescitHamam/8.jpg","img/portfolio/projects/catmaMescitHamam/9.jpg","img/portfolio/projects/catmaMescitHamam/3.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/catmaMescitHamam/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-9'] ; ?></h5>
                            <span><?= $lang['portfolio-hamam']; ?></span>
                        </div>
                    </div>
                    
                    <div class="items restaurant theaters three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/pisi/1.jpg","img/portfolio/projects/pisi/2.jpg","img/portfolio/projects/pisi/3.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/pisi/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-10'] ; ?></h5>
                            <span><?= $lang['portfolio-restoran']; ?></span>
                        </div>
                    </div>

                    <div class="items house three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/temenye/temenye1-5.webp","img/portfolio/projects/temenye/temenye1-3.webp","img/portfolio/projects/temenye/temenye1-4.webp",
                        "img/portfolio/projects/temenye/temenye1-1.webp","img/portfolio/projects/temenye/temenye1-2.webp","img/portfolio/projects/temenye/1.jpg","img/portfolio/projects/temenye/2.jpg","img/portfolio/projects/temenye/3.jpg","img/portfolio/projects/temenye/4.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/temenye/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-11'] ; ?></h5>
                            <span><?= $lang['portfolio-mimar']; ?></span>
                        </div>
                    </div>

                    <!-- con4cus images -->
                     <div class="items office three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/con4cus/1.jpg","img/portfolio/projects/con4cus/2.jpg","img/portfolio/projects/con4cus/3.jpg","img/portfolio/projects/con4cus/4.jpg","img/portfolio/projects/con4cus/8.jpg","img/portfolio/projects/con4cus/9.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/con4cus/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-12'] ; ?></h5>
                            <span><?= $lang['portfolio-ofis']; ?></span>
                        </div>
                    </div>

                    <!-- mayAtkRender images -->
                    <div class="items restaurant three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/mayAtkRender/1.jpg","img/portfolio/projects/mayAtkRender/2.jpg","img/portfolio/projects/mayAtkRender/3.jpg","img/portfolio/projects/mayAtkRender/4.jpg","img/portfolio/projects/mayAtkRender/5.jpg","img/portfolio/projects/mayAtkRender/6.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/mayAtkRender/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-13'] ; ?></h5>
                            <span><?= $lang['portfolio-fabrika']; ?></span>
                        </div>
                    </div>

                    <div class="items hotel three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/crystalrender/1.jpg","img/portfolio/projects/crystalrender/2.jpg","img/portfolio/projects/crystalrender/3.jpg","img/portfolio/projects/crystalrender/4.jpg","img/portfolio/projects/crystalrender/6.jpg","img/portfolio/projects/crystalrender/10.jpg","img/portfolio/projects/crystalrender/11.jpg","img/portfolio/projects/crystalrender/5.jpg","img/portfolio/projects/crystalrender/8.jpg","img/portfolio/projects/crystalrender/9.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/crystalrender/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-14'] ; ?></h5>
                            <span><?= $lang['portfolio-render']; ?></span>
                        </div>
                    </div>
                    
                    <div class="items hotel three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/cityhotel/project-1.jpg","img/portfolio/projects/cityhotel/project-2.jpg","img/portfolio/projects/cityhotel/project-3.jpg","img/portfolio/projects/cityhotel/project-4.jpg","img/portfolio/projects/cityhotel/5.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/cityhotel/cover.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-15'] ; ?></h5>
                            <span><?= $lang['portfolio-icdizayn']; ?></span>
                        </div>
                    </div>

                    <!-- ruhsat images -->
                    <div class="items permit three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/ruhsatlar/crystal-ruhsat-1.jpg","img/portfolio/projects/ruhsatlar/crystal-ruhsat-2.jpg","img/portfolio/projects/ruhsatlar/crystal-ruhsat-3.jpg","img/portfolio/projects/ruhsatlar/crystal-ruhsat-4.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/ruhsatlar/crystal-ruhsat-1.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-16'] ; ?></h5>
                            <span><?= $lang['portfolio-otel']; ?></span>
                        </div>
                    </div>

                    <div class="items permit three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/ruhsatlar/1.jpg","img/portfolio/projects/ruhsatlar/2.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/ruhsatlar/1.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-17'] ; ?></h5>
                            <span><?= $lang['portfolio-otel']; ?></span>
                        </div>
                    </div>

                    <div class="items permit three-column mt-50 fancyGallery" data-images='["img/portfolio/projects/ruhsatlar/m1.jpg","img/portfolio/projects/ruhsatlar/m2.jpg","img/portfolio/projects/ruhsatlar/m3.jpg","img/portfolio/projects/ruhsatlar/m4.jpg","img/portfolio/projects/ruhsatlar/m5.jpg","img/portfolio/projects/ruhsatlar/m6.jpg","img/portfolio/projects/ruhsatlar/m7.jpg","img/portfolio/projects/ruhsatlar/m8.jpg"]'>
                        <div class="item-img bg-img" data-background="img/portfolio/projects/ruhsatlar/m8.jpg">
                            <a href="javascript:;">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5 style=''><?= $lang['portfolio-name-18'] ; ?></h5>
                            <span><?= $lang['portfolio-otel']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('layouts/footer.php'); ?>