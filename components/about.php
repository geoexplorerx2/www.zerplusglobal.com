<header class="about pages-header valign" style="background: url('<?= $pageLink ?>/img/about.jpg');background-size: cover; background-position: bottom; position: relative; background-repeat: space"  data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center pt-5">
                    <h1><?= $lang['nav-about']; ?></h1>
                    <div class="path">
                        <a href="/"><?= $lang['nav-home']; ?></a><span>/</span><a href="#0" class="active"><?= $lang['nav-about']; ?> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="about section-padding">
    <div class="container">
        <div class="row mt-50 ms-0">
            <div class="col-lg-6">
                <div class="numbers">
                    <div class="row">
                        <div class="col-6">
                            <div class="item mb-50">
                                <h3><span class="nbr custom-font">32</span></h3>
                                <h6><?= $lang['facts-1']; ?></h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item">
                                <h3><span class="nbr custom-font">10</span></h3>
                                <h6><?= $lang['facts-2']; ?></h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item mb-50">
                                <h3><span class="nbr custom-font">8</span></h3>
                                <h6><?= $lang['facts-3']; ?></h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item">
                                <h3><span class="nbr custom-font">18</span></h3>
                                <h6><?= $lang['facts-4']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="txt-cont">
                    <p class="mb-20 text-left"><?= $lang['content-1-a']; ?></p>
                    <p class="text-left">
                        <?= $lang['content-1-b']; ?>
                    </p>
                </div>
            </div>
            <div class="col-12 mt-20">
                <p class="mb-20 text-left">
                    <?= $lang['content-1-c']; ?>
                </p>
                <p class="text-left">
                    <?= $lang['content-1-d']; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="services halfbg">
    <div class="bg valign" style="background: url('<?= $pageLink ?>/img/deneme.webp')" data-overlay-dark="7">
    </div>
    <div class="container ontop">
        <div class="row">
            <div class="col-lg-3 col-md-6 item-bx">
                <h2 class="custom-font numb">01</h2>
                <h6 class="mb-20"><?= $lang['service-1']; ?></h6>
                <p><?= $lang['service-desc-1']; ?></p>
            </div>

            <div class="col-lg-3 col-md-6 item-bx">
                <h2 class="custom-font numb">02</h2>
                <h6 class="mb-20"><?= $lang['service-2']; ?></h6>
                <p><?= $lang['services-desc-5']; ?></p>
            </div>

            <div class="col-lg-3 col-md-6 item-bx">
                <h2 class="custom-font numb">03</h2>
                <h6 class="mb-20"><?= $lang['service-3']; ?></h6>
                <p><?= $lang['service-desc-3']; ?></p>
            </div>

            <div class="col-lg-3 col-md-6 item-bx">
                <h2 class="custom-font numb">04</h2>
                <h6 class="mb-20"><?= $lang['service-4']; ?></h6>
                <p><?= $lang['service-desc-4']; ?></p>
            </div>

        </div>
    </div>
</section>

<div class="skills-sec section-padding pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 valign">
                <div class="skills-box full-width">
                    <div class="skill-item">
                        <h6><?= $lang['stats-1']; ?></h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6><?= $lang['stats-2']; ?></h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6><?= $lang['stats-3']; ?></h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="75%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <h6><?= $lang['stats-4']; ?></h6>
                        <div class="skill-progress">
                            <div class="progres custom-font" data-value="90%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content">
                    <h4 class="playfont line-height-50 mb-20"><?= $lang['content-2-title']; ?></h4>
                    <p>
                        <?= $lang['content-2-desc']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="teamContainer" >
<div class="container text-center mb-5">
        <h1 class="my-5"><?= $lang['our-team']; ?></h1>
</div>
    <div class="container mt-3 ourTeam">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="teamWhite nihan teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/nihan.jpg" width="90">
                    <h5 class="mt-3 name">Nihan Z.</h5><span class="work d-block"><?= $lang['job-title-2']; ?></span>
                    <!-- <div class="mt-4 about"><span>is a long established fact that eader&nbsp; will be distracted by the readable content.</span></div>
                    <div class="mt-4">
                        <h6 class="v-profile">View Profile</h6>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/ahmet.murat.jpg" width="90">
                    <h5 class="mt-3 name">Ahmet Murat U.</h5><span class="work d-block"><?= $lang['job-title-1']; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/ilkim.jpg" width="90">
                    <h5 class="mt-3 name">Ilkim F.</h5><span class="work d-block"><?= $lang['job-title-1']; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/ahmet.emin.jpg" width="90">
                    <h5 class="mt-3 name">Ahmet Emin T.</h5><span class="work d-block"><?= $lang['job-title-3']; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/enes.jpg" width="90">
                    <h5 class="mt-3 name">Enes D.</h5><span class="work d-block"><?= $lang['job-title-4']; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/melih.jpg" width="90">
                    <h5 class="mt-3 name">Melih O.</h5><span class="work d-block"><?= $lang['job-title-5']; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/melike.jpg" width="90">
                    <h5 class="mt-3 name">Melike S.</h5><span class="work d-block"><?= $lang['job-title-6']; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/ahmet.m.jpg" width="90">
                    <h5 class="mt-3 name">Ahmet M.</h5><span class="work d-block"><?= $lang['job-title-7']; ?></span>
                </div>
            </div>
            <div class="col-md-4 col-6">
                <div class="teamWhite teamHover p-3 text-center rounded teamBox"><img class="img-responsive team-img rounded-circle" src="<?= $pageLink ?>/img/team/ahmet.t.jpg" width="90">
                    <h5 class="mt-3 name">Ahmet T.</h5><span class="work d-block"><?= $lang['job-title-7']; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>    