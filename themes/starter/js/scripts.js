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
            this.chosen.init();
            this.smoothScroll.init();
            this.previewGrid.init();
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
                        checkboxClass: 'icheckbox_minimal-blue',
                    });
                }
            },
        },
        chosen: {
            init: function(){
                if($('select.dropdown').length && !/iPad|iPhone|iPod/.test(navigator.userAgent)){
                    $('select.dropdown').chosen({width: '100%'});
                }
            }
        },
        previewGrid: {
            init: function(){
                Grid.init();
            }
        }
    }
    SCRIPTS.init();
});