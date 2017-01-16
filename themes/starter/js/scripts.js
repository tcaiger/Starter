// -----------------------------------------------------------------------------
// Scripts
// -----------------------------------------------------------------------------

var SCRIPTS = SCRIPTS || {};

$(document).ready(function () {

    SCRIPTS = {
        settings: {},
        init: function () {
            this.chosen.init();
        },
        nav: {
            button: $(),
            settings: {},
            init: function () {
                var _this = this;
                _this.button.on('click', function () {

                });
            }
        },
        chosen: {
            init: function(){
                if($('select.dropdown').length && !/iPad|iPhone|iPod/.test(navigator.userAgent)){
                    $('select.dropdown').chosen({width: '100%'});
                }
            }
        },
    }
    SCRIPTS.init();
});