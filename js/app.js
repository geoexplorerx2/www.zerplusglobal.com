// languages dropdown: 
$(".language").click(function(){
    var selectedLanguage = $(this).attr("value");
    window.location.href = '/' + selectedLanguage;
});

// whatsapp btn:
$(document).ready(function(){

    var sendMessage = $("#wp-message").text();
    var sendWpMessage = $("#wp-send-message").text();

    $('#whatsappBtn').venomButton({
        phone: '905465593473',
        popupMessage: sendMessage,
        message: sendWpMessage,
        showPopup: true,
        position: "left",
        linkButton: false,
        showOnIE: false,
        headerTitle: '<span class="wp-message"> <i class="fa fa-circle active-whatsapp" aria-hidden="true"></i> Zerplus</span>',
        headerColor: 'rgb(9, 94, 84)',
        backgroundColor: '#25d366',
        buttonImage: '<i class="fab fa-whatsapp" aria-hidden="true"></i>',
        zIndex: 999,
    });
});


$(function () {
    "use strict";
    var wind = $(window);

    wind.on("scroll", function () {

        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar.change");
          //logo = $(".navbar.change .logo> img");

        if (bodyScroll > 300) {

            navbar.addClass("nav-scroll");
          //  logo.attr('src', 'img/logo-dark.png');

        } else {

            navbar.removeClass("nav-scroll");
        //  logo.attr('src', 'img/logo-light.png');
        }
    });

    $('.navbar .search .icon').on('click', function () {
        $(".navbar .search .search-form").fadeIn();
    });

    $('.navbar .search .search-form .close').on('click', function () {
        $(".navbar .search .search-form").fadeOut();
    });

    var parallaxSlider;
    var parallaxSliderOptions = {
        speed: 1000,
        autoplay: true,
        parallax: true,
        loop: true,
        pagination: {
            el: '.slider .parallax-slider .swiper-pagination',
            clickable: true
        },
        on: {
            init: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find('.bg-img')
                        .attr({
                            'data-swiper-parallax': 0.75 * swiper.width
                        });
                }
            },
            resize: function () {
                this.update();
            }
        },
        pagination: {
            el: '.slider .parallax-slider .swiper-pagination',
            type: 'fraction',
        },

        navigation: {
            nextEl: '.slider .parallax-slider .next-ctrl',
            prevEl: '.slider .parallax-slider .prev-ctrl'
        }
    };
    parallaxSlider = new Swiper('.slider .parallax-slider', parallaxSliderOptions);

    var swiperWorkMetro = new Swiper('.metro .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 0,
        speed: 1000,
        loop: true,
        centeredSlides: true,

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 0
            }
        },

        pagination: {
            el: '.metro .swiper-pagination',
            type: 'progressbar',
        },

        navigation: {
            nextEl: '.metro .next-ctrl',
            prevEl: '.metro .prev-ctrl'
        },
    });

    var swiperWorkSlider = new Swiper('.slider-scroll .swiper-container', {
        slidesPerView: 2,
        spaceBetween: 30,
        mousewheel: true,
        centeredSlides: true,
        speed: 1000,
        loop: true,

        breakpoints: {
            320: {
                slidesPerView: 1
            },
            480: {
                slidesPerView: 1
            },
            640: {
                slidesPerView: 2
            },
            991: {
                slidesPerView: 2
            }
        },

        navigation: {
            nextEl: '.slider-scroll .next-ctrl',
            prevEl: '.slider-scroll .prev-ctrl'
        }
    });

    const slider = document.getElementById("js-cta-slider");
    const sliderNext = document.getElementById("js-cta-slider-next");
    const sliderPrevious = document.getElementById("js-cta-slider-previous");

    const interleaveOffset = 5.75;

    const swiper = new Swiper(slider, {
        loop: true,
        direction: "vertical",
        speed: 2000,
        grabCursor: true,
        watchSlidesProgress: true,
        autoplay: {
        delay: 3000,
        disableOnInteraction: false
        },
        pagination: {
            el: '.slid-half .swiper-pagination',
            type: 'fraction',
        },
        navigation: {
        nextEl: sliderNext,
        prevEl: sliderPrevious
        },
        on: {
            progress: function() {
                let swiper = this;

                for (let i = 0; i < swiper.slides.length; i++) {
                let slideProgress = swiper.slides[i].progress;
                let innerOffset = swiper.height * interleaveOffset;
                let innerTranslate = slideProgress * innerOffset;

                TweenMax.set(swiper.slides[i].querySelector(".slide-inner"), {
                    y: innerTranslate,
                });
                }
            },
            touchStart: function() {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = "";
                }
            },
            setTransition: function(speed) {
                let swiper = this;
                for (let i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = speed + "ms";
                swiper.slides[i].querySelector(".slide-inner").style.transition =
                    speed + "ms";
                }
            }
        },
    });

    new Swiper ('.brands-slider',  {
        slidesPerView: '5',
        spaceBetween: 0,
        loop: true,
        speed: 5000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesPerView: '5',
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesPerView: '4',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 280,
                settings: {
                    slidesPerView: '3',
                    slidesToShow: 3
                }
            }
        ]
    })

    new Swiper('.team', {
        direction: 'vertical',

        pagination: {
            el: '.swiper-pagination',
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    /* ===============================  Work background  =============================== */
    $('.full-bg-img .column').on('mouseenter', function () {
        var tab_id = $(this).attr('data-tab');
        $('.full-bg .column').removeClass('current');
        $(this).addClass('current');
        console.log(tab_id)

        $('.glry-img .tab-img ').removeClass('current');
        $("#" + tab_id).addClass('current');

        if ($(this).hasClass('current')) {
            return false;
        }
    });

    $(document).ready(function() {
        $('source', $('#tab-1')).attr('src', $("#tab-1").attr('src'));
    });
    $('.full-bg .cluom').on('mouseenter', function () {
        var tab_id = $(this).attr('data-tab');
        $('.full-bg .cluom').removeClass('current');
        $(this).addClass('current');
        $('.glry-img .tab-video ').removeClass('current');

        var srcVideo= $("#" + tab_id).attr('src');
        var attrSrc= $("#" + tab_id).attr('data-src');

        if(srcVideo == undefined){
            $('source', $("#" + tab_id) ).attr('src', attrSrc);
            $("#" + tab_id).addClass('current')[0].load();
        }
        if ($(this).hasClass('current')) {

            return false;
        }
    });

    var pageSection = $(".bg-img, section");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    $(".fancyGallery").click(function() {
        var images = $(this).data('images');
        var imgCaption =  $(this).data('caption');
        if(images == undefined ){
            return false
        }
        var arr = [];
        $(images).each(function( index ,value) {
            arr.push({src: value ,type: "image", caption:imgCaption})
        });
        Fancybox.show(arr);
    });

    $('.testimonials .testim').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '.testimonials .prev',
        nextArrow: '.testimonials .next',
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $(document).ready(function(){
        $('.carousel').slick({
            slidesToShow: 3,
            dots:true,
            centerMode: true,
        });
    });

    $('.team .team-container').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '.team .prev',
        nextArrow: '.team .next',
        dots: false,
        infinite: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $("a.vid").YouTubePopUp();

    $(".twentytwenty-container").twentytwenty();

    $('.parallaxie').parallaxie({
        speed: 0.2,
        size: "cover"
    });

    $('.justified-gallery').justifiedGallery({
        rowHeight: 400,
        lastRow: 'nojustify',
        margins: 15
    });

    var c4 = $('.skills-circle .skill');
    var myVal = $(this).attr('data-value');

    $(".skills-circle .skill").each(function () {

        c4.circleProgress({
            startAngle: -Math.PI / 2 * 1,
            value: myVal,
            thickness: 5,
            size: 200,
            fill: { color: "#b19777" }
        });

    });

    wind.on('scroll', function () {
        $(".skill-progress .progres").each(function () {
            var bottom_of_object =
                $(this).offset().top + $(this).outerHeight();
            var bottom_of_window =
                $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr('data-value');
            if (bottom_of_window > bottom_of_object) {
                $(this).css({
                    width: myVal
                });
            }
        });
    });

    var blgImg = $('.blog-grid .post-img .img').outerHeight() + 120;

    $(".blog-grid .bg-pattern").css("height", blgImg);

});

wow = new WOW({
    animateClass: 'animated',
    offset: 100
});
wow.init();

$(window).on("load", function () {

    Splitting();

    var imageUp = document.getElementsByClassName('thumparallax');
    new simpleParallax(imageUp, {
        delay: 1,
        scale: 1.1
    });

    var imageDown = document.getElementsByClassName('thumparallax-down');
    new simpleParallax(imageDown, {
        orientation: 'down',
        delay: 1,
        scale: 1.1
    });

    $('.gallery').isotope({
        itemSelector: '.items',
      });

    var $gallery = $('.gallery').isotope();

    $('.filtering').on('click', 'span', function () {
        var filterValue = $(this).attr('data-filter');
        $gallery.isotope({ filter: filterValue });
    });

    $('.filtering').on('click', 'span', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "mail_handler.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    });
});

$(document).ready(function() {
$('.myform').on('submit',function(){

$('.messages').text('Loading...'); 

var form = $(this);
    $.ajax({
        url: "mail_handler.php",
        method: form.attr('method'),
        data: form.serialize(),
        success: function(result){
            if (result.search('success')){
                $('.messages').text('Mesajınızı Aldık!');  
            } else {
                $('.messages').text('Hata Oluştu! Lütfen Tekrar Deneyiniz');
            }
        }
    });

    return false;   
    });
});

paceOptions = {
    ajax: true,
    document: true,
    eventLag: false
};

Pace.on('done', function () {
    $('#preloader').addClass("isdone");
    $('.loading-text').addClass("isdone");
});

$(document).ready(function () {
    "use strict";

    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
        } else {
            jQuery('.progress-wrap').removeClass('active-progress');
        }
    });
    jQuery('.progress-wrap').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    })
});

function mousecursor() {
    if ($("body")) {
        const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
        let n, i = 0,
            o = !1;
        window.onmousemove = function (s) {
            o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
        }, $("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
        }), $("body").on("mouseleave", "a, .cursor-pointer", function () {
            $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
        }), e.style.visibility = "visible", t.style.visibility = "visible"
    }
};

$(function () {
    mousecursor();
});

// Vanilla Javascript
var input = document.querySelector("#phone");
window.intlTelInput(input,({
  // options here
}));

$(document).ready(function() {
    $('.iti__flag-container').click(function() { 
      var countryCode = $('.iti__selected-flag').attr('title');
      var countryCode = countryCode.replace(/[^0-9]/g,'')
      $('#phone').val("");
      $('#phone').val("+"+countryCode+" "+ $('#phone').val());
   });
});