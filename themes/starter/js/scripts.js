// -----------------------------------------------------------------------------
// Scripts
// -----------------------------------------------------------------------------

var SCRIPTS = SCRIPTS || {};

$(document).ready(function () {

    SCRIPTS = {
        settings: {},
        init: function () {
            this.nav.init();
            this.icheck.init();
            this.slider.init();
            this.focusPoint.init();
            this.chosen.init();
            this.smoothScroll.init();
        },
        nav: {
            button: $('.js-nav-btn'),
            header: $('.js-header'),
            init: function () {
                this.events();
            },
            events: function () {
                var _this = this;
                this.button.on('click', function () {
                    _this.header.toggleClass('active');
                });
            }
        },
        smoothScroll: {
            button: $('.js-scroll'),
            init: function () {
                this.buttonEvent();
            },
            buttonEvent: function () {
                this.button.on('click', function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 600);
                            return false;
                        }
                    }
                });
            }
        },
        icheck: {
            checkbox: $('input[type="checkbox"]'),
            init: function () {
                if (this.checkbox.length) {
                    this.checkbox.iCheck({
                        checkboxClass: 'icheckbox_minimal',
                    });
                }
            },
        },
        slider: {
            settings: {
                slidesToShow: 1,
                lazyLoad: 'progressive',
                dots: false,
                useTransform: true,
                fade: true,
                cssEase: 'linear',
                prevArrow: "<span class='btn--prev'></span>",
                nextArrow: "<span class='btn--next'></span>"
            },
            slider: $('.js-slider'),
            init: function () {
                if(this.slider.length){
                    this.slider.slick(this.settings);
                    SCRIPTS.focusPoint.init();
                }
            }
        },
        focusPoint: {
            init: function () {
                if ($('.js-focuspoint').length) {
                console.log('init');
                    $('.js-focuspoint').focusPoint();

                    // Fixes issue with focuspoint not resizing after window finishes resizing
                    var doit;
                    $(window).resize(function () {
                        clearTimeout(doit);
                        doit = setTimeout(resizedw, 100);
                    });

                    function resizedw() {
                        $('.js-focuspoint').focusPoint('adjustFocus');
                    }
                }
            }
        },
        chosen: {
            init: function () {
                if ($('select').length && !/iPad|iPhone|iPod/.test(navigator.userAgent)) {
                    $('select').chosen({width: '100%'});
                }
            }
        }
    }
    SCRIPTS.init();
});