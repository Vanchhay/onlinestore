var PRINCECODE;
if (!PRINCECODE) PRINCECODE = {}; 
if (!PRINCECODE.main) PRINCECODE.main = {};

(function(){

    var func = PRINCECODE.main;

    /** Check user-agent : mobile or computer **/
    /**************************************/

    func.checkUserAgent = function() {
        if (navigator.userAgent.match(/Mobi/)) {
            $('head').append('<link rel="stylesheet" type="text/css" href="public_html/css/mobile.css">');
            return ('ontouchstart' in document.documentElement);
        }
    }

    func.windowScroll = function(){
        $(window).scroll(function(){
            
        });
    }

    func.windowResize = function(){
        $(window).resize(function(){
           
        });
    }

})();


$(document).ready(function() {
    PRINCECODE.main.windowScroll();
    PRINCECODE.main.windowResize();
});

