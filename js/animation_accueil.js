(function () {
    var expand;
    expand = function () {
        var $input, $search;
        $search = $('.search');
        $input = $('.input');
        if ($search.hasClass('close')) {
            $search.removeClass('close');
            $input.removeClass('square');
        } else {
            $search.addClass('close');
            $input.addClass('square');
        }
        if ($search.hasClass('close')) {
            $input.focus();
        } else {
            $input.blur();
        }
    };
    $(function () {
        var $accordion, $wideScreen;
        $accordion = $('#accordion').children('li');
        $wideScreen = $(window).width() > 767;
        if ($wideScreen) {
            $accordion.on('mouseenter click', function (e) {
                var $this;
                e.stopPropagation();
                $this = $(this);
                if ($this.hasClass('out')) {
                    $this.addClass('out');
                } else {
                    $this.addClass('out');
                    $this.siblings().removeClass('out');
                }
            });
        } else {
            $accordion.on('touchstart touchend', function (e) {
                var $this;
                e.stopPropagation();
                $this = $(this);
                if ($this.hasClass('out')) {
                    $this.addClass('out');
                } else {
                    $this.addClass('out');
                    $this.siblings().removeClass('out');
                }
            });
        }
    });
    $(function () {
        var $container, $menu, $menubtn, $navbar;
        $menubtn = $('#hb');
        $navbar = $('.navbar');
        $menu = $('.navigation');
        $container = $('.site-inner');
        $menubtn.on('click', function (e) {
            if ($menubtn.hasClass('active')) {
                $menubtn.removeClass('active');
                $menu.removeClass('slide-right');
                $container.removeClass('slide-right');
                $navbar.removeClass('slide-right');
            } else {
                $menubtn.addClass('active');
                $menu.addClass('slide-right');
                $container.addClass('slide-right');
                $navbar.addClass('slide-right');
            }
        });
    });
    $(function () {
        var $button, clickOrTouch;
        clickOrTouch = 'click touchstart';
        $button = $('#search-button');
        $button.on(clickOrTouch, expand);
    });
    $(function () {
        var $box;
        $box = $('.sm-box');
        $box.on('click', function (e) {
            e.preventDefault();
            var $this;
            $this = $(this);
            if ($this.hasClass('active')) {
                $this.removeClass('active');
            } else {
                $this.addClass('active');
            }
        });
    });
}.call(this));

$(document).ready(function(){

    $(".main").onepage_scroll({
        sectionContainer: "section", // sectionContainer accepts any kind of selector in case you don't want to use section
        easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in", "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
        animationTime: 900, // AnimationTime let you define how long each section takes to animate
        pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
        updateURL: false // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
    });

});

function init() {

    // start up after 2sec no matter what
    window.setTimeout(function(){
        start();
    }, 500);
}

// fade in experience
function start() {

    $('body').removeClass("loading").addClass('loaded');

}

$(window).load(function() {

    // fade in page
    init();

});
