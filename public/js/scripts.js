
;var PRINCECODE;PRINCECODE||(PRINCECODE={}),PRINCECODE.main||(PRINCECODE.main={}),function(){var func=PRINCECODE.main;func.checkUserAgent=function(){return navigator.userAgent.match(/Mobi/)?($("head").append('<link rel="stylesheet" type="text/css" href="public_html/css/mobile.css">'),"ontouchstart"in document.documentElement):void 0},func.windowScroll=function(){$(window).scroll(function(){})},func.windowResize=function(){$(window).resize(function(){})}}(),$(document).ready(function(){PRINCECODE.main.windowScroll(),PRINCECODE.main.windowResize()});
var PRINCECODE;PRINCECODE||(PRINCECODE={}),PRINCECODE.useful||(PRINCECODE.useful={}),function(){var func=PRINCECODE.useful;func.jumpToPageTop=function(){return $("html,body").stop().animate({scrollTop:0},1e3),!1},func.SmoothScrollTo=function(id){var element=$(id);if(element.length){var top=element.offset().top;$(".mobile_global_nav").slideUp(),$("html,body").stop().animate({scrollTop:top-60},900,"swing")}return!1},func.toggleMenu=function(target,extra){var extra="undefined"!=typeof extra?extra:!1;extra!==!1&&("noscroll"==extra?($("body").toggleClass("mobile_nav_open"),$(".button_outer .bar").toggleClass("rotate")):($(extra).fadeOut(100),$("body").toggleClass("mobile_nav_open"),$(".button_outer .bar").toggleClass("rotate"))),$(target).slideToggle(500)}}();

