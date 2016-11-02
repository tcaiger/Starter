// -----------------------------------------------------------------------------
// Scripts
// -----------------------------------------------------------------------------

var SCRIPTS = SCRIPTS || {};

$(document).ready(function () {

    SCRIPTS = {
        settings: {},
        init: function () {
            //this.nav.init();
        },
        nav: {
            button: $(),
            settings: {},
            init: function () {
                var _this = this;
                _this.button.on('click', function () {

                });
            }
        }
    }
    SCRIPTS.init();
});