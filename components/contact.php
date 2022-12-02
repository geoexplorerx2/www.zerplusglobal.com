<header class="pages-header valign " style="background: url(<?= $pageLink ?>/img/contact.webp)"  data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1><?= $lang['nav-contact']; ?></h1>
                        <div class="path">
                            <a href="/"><?= $lang['nav-home']; ?></a><span>/</span><a href="#0" class="active"><?= $lang['nav-contact']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="contact">
        <div class="info bg-gray pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-phone"></span>
                            <div class="cont">
                                <h6 class="custom-font"><?= $lang['contact-call']; ?></h6>
                                <p> <a href="tel:+905465593473"><?= $lang['contact-1']; ?></a></p>
                                <p> <br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-mail-open"></span>
                            <div class="cont">
                                <h6 class="custom-font"><?= $lang['contact-email']; ?></h6>
                                <p><a href="mailto:info@zerplusglobal.com"><?= $lang['contact-2']; ?></a></p>
                                <p> <br></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <span class="icon pe-7s-map"></span>
                            <div class="cont">
                                <h6 class="custom-font"><?= $lang['contact-address']; ?></h6>
                                <p><a href="https://www.google.com/maps/place/Lotus+Ni%C5%9Fanta%C5%9F%C4%B1/@41.0515938,28.9877151,15z/data=!4m2!3m1!1s0x0:0x2d1492b6c19d57c3?sa=X&ved=2ahUKEwigi_3sqLX7AhU_SPEDHWThB0wQ_BJ6BAg8EAg" target="_blank">Halaskargazi Cad. No: 38/66 D:18 Lotus Nişantaşı - Şişli/ Istanbul</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 map-box">
                    <div style="width:100%; height:100%; position: relative;"><iframe width="100%" height="100%" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Halaskargazi%20Cad.%20No%3A%2038%2F66%20D%3A18%20Lotus%20Ni%C5%9Fanta%C5%9F%C4%B1%20-%20%C5%9Ei%C5%9Fli%2F%20IST+(Zen%20Mimarl%C4%B1k)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/tr/">Googlemapsgenerator.com/tr/</a> & <a href="https://spelstopp.net/">Spelstopp.net</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                </div>
                <div class="col-lg-6 form">
                    <form class="myform" method="post" >

                        <div class="messages"></div>

                        <div class="controls">
                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="<?= $lang['placeholder-1']; ?>" required="required">
                            </div>
                        
                            <div class="form-group">
                                <input id="phone" name="phone" type="tel" placeholder="<?= $lang['placeholder-2']; ?>">
                            </div>                            

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="<?= $lang['placeholder-3']; ?>"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="<?= $lang['placeholder-4']; ?>" rows="4"
                                    required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color" name="submit"><span><?= $lang['button-gonder']; ?> </span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
