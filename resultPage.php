<?php include('inc/config.php'); ?>
<?php include('lang/tr.php'); ?>
<header class="pages-header valign " style="background: url(<?= $pageLink ?>/img/contact.webp)" data-overlay-dark="5">
    <div class="container">
        <div class="row contact-top-margin">
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
<style>
    .body {
        width: 100%;
        min-height: 200px;
        background-color: #fff;
    }

    .title {
        width: 100%;
        padding-right: 100px;
        padding-left: 100px;
        padding-top: 100px;
        padding-bottom: 30px;
        font-weight: 600;
        font-size: 40px;
    }

    .message {
        width: 100%;
        padding-right: 100px;
        padding-left: 100px;
        padding-bottom: 50px;
        font-weight: 300;
        font-size: 20px;
    }
</style>
<section class="contact">
    <div class="body">
        <div class="title">
            Thank You!
        </div>
        <div class="message">
            Thank you for getting in touch!
            We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day!
        </div>
    </div>
</section>

<?php include('components/layouts/header.php'); ?>
<?php include('components/layouts/footer.php'); ?>