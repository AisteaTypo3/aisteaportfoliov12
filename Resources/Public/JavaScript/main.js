$(document).ready(function(){
    $('#nav-hamburger').click(function(){
        $(this).parents('#navigation-menu').find('nav .main-navigation').toggleClass('open');
        $(this).toggleClass('open');
    });

    $('body').addClass('ready');


    $( ".collection-content li" ).each(function( index ) {

        var $string = $(this).data("language");
        var $array = $string.split(',').join(' ');
        $(this).attr('data-language', $array);
    });

    /**
     * $('.main-navigation .dropdown').not( ":nth-child(1)" ).before().click(function(){
     *             $(this).toggleClass('open');
     *         });
     *
     *
     * SLICK
     */

    $('.hero-slider-section').slick({
        dots: true,
        infinite: true,
        speed: 1500,
        fade: true,
        cssEase: 'linear',
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
        slide: '.frame'
    });
    $('.box-slider-section .col-12').slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 1500,
        cssEase: 'linear',
        arrows: false,
        slide: '.frame-service-box-33',
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: false,
            }
            }, {
            breakpoint: 450,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }]
    });

    $('.zitat-section').each(function(){

        //Zitat
        if ($(this).find('.col--1').children().hasClass("frame-type-text")) {
            console.log(this);
            $(this).find('.col--1').addClass("order-text");
        }


    });

    if($(".section-container").hasClass("hero-slider-section")){
        $('.scroll-downs').addClass('d-none');
    }

});

/* ==========================================
scrollTop() >= 300
Should be equal the the height of the header
========================================== */

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('#navigation').addClass('fixed-header');
    }
    else {
        $('#navigation').removeClass('fixed-header');
    }
});

/**
 * ------------------------------------------------------------------------
 * Smooth Anchor Scroll (Offset)
 * ------------------------------------------------------------------------
 **/

// caching
//var $root = $('html, body');

// offset
var $globalOffset = -100;

var $anchor_scrolling = false;

if (window.location.hash) {
    // to top right away
    scroll(0,0);
    // void some browsers issue
    setTimeout( function() { scroll(0,0); }, 1);

    console.log("anchor scroll: to top right away");
}


$(document).ready(function() {
    //On Load
    if (window.location.hash && !$("body").hasClass("anchorscrolling-off")) {
        console.log("anchor scroll on path: " + window.location.pathname);

        $offset = $globalOffset;

        setTimeout(function() {
            smooth_scroll_to(window.location.hash, $offset);
        }, 100);
    }
});

$(document).ready(function() {
    //On Click
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[href*="#carousel"]').not('[href*="#accordion"]').not('[href*="#tab-"]').not('.tablinks').on('click', function(event){
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
            &&
            !$("body").hasClass("anchorscrolling-off")
        ) {

            $offset = $globalOffset;
            // Figure out element to scroll to
            smooth_scroll_to(this.hash, $offset, event);
        }
    });


}); //end document.ready


function smooth_scroll_to(hash, offset, event) {

    $anchor_scrolling = true;

    if(typeof hash == 'undefined') {
        console.log("smooth anchor scroll hash=undefined");
        return false;
    } else {

        var target = $(hash);
        target = target.length ? target : $('[name=' + hash.slice(1) + ']');

        console.log("anchor scroll with offset: " + offset);

        if($(target).length > 0) {

            if(typeof event !== 'undefined') {
                event.preventDefault();
                history.pushState(null, null, $(event.target).attr('href'));
            }
            $('html, body').animate({
                scrollTop: target.offset().top + offset + 'px'
            }, 700, 'swing', function() {
                /*
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                };
                */

                location.hash = hash;
                $anchor_scrolling = false;
            });
        }
    }

}//END smooth_scroll_to

//

$(document).on("scroll", function(){
    var pixels = $(document).scrollTop();
    var pageHeight = $(document).height() - $(window).height();
    var progress = 100 * pixels / pageHeight;

    $("#navigation .progress-scroll").css("width", progress + "%");
})

$(document).ready(function() {
    //MASK Tabs Logic
// Show the first tab and hide the rest
    $('.tab-nav a:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    // Click function
    $('.tab-nav a').click(function(){
        $('.tab-nav a').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();
        var activeTab = $(this).attr('data-id');
        $(".tab-content[data-id='" + activeTab + "']").fadeIn();
        return false;
    });

    $('.product-tab-nav a:first-child').addClass('active');
    $('.product-tab-content').hide();
    $('.product-tab-content:first').show();

    // Click function
    $('.product-tab-nav a').click(function(){
        $('.product-tab-nav a').removeClass('active');
        $(this).addClass('active');
        $('.product-tab-content').hide();
        var activeTab = $(this).attr('data-id');
        $(".product-tab-content[data-id='" + activeTab + "']").fadeIn();
        return false;
    });

    $('.show-overview').on('click', function(e) {
        $(this).toggleClass("active"); //you can list several class names
        $('.tx-mask-products-overview').toggleClass("active"); //you can list several class names
        e.preventDefault();
    });

    $('.icon360').on('click', function(e) {
        $(this).siblings('.webgl-div').toggleClass("active"); //you can list several class names
        $(this).siblings('.image-div').toggleClass("active"); //you can list several class names
        e.preventDefault();
    });

    $('li:has(.producthidden-image) .highlight').on('click', function(e) {
        $(this).siblings('.producthidden-image').toggleClass("active"); //you can list several class names
        $(this).toggleClass("active"); //you can list several class names
        $(this).parent().siblings().find('.producthidden-image').removeClass("active"); //you can list several class names
        $(this).parent().siblings().find('.highlight').removeClass("active");
        e.preventDefault();
    });

});

$(document).ready(function() {

    $('.video-item iframe').each(function() {
        var src = $(this).attr('src');
        console.log(src);
    });

    const h1 = document.getElementsByTagName('h1')[0].innerText;

    $('#powermail_field_system').val(h1);
});

$(document).ready(function() {
    //MASK Portfolio Tabs Logic
    // Show the first tab and hide the rest
    $('.portfolio-tabs .tab-item:first-child').addClass('active');
    $('.portfolio-subnavi .tab-content').hide();
    $('.portfolio-subnavi .tab-content:first').show();

    // Click function
    $('.portfolio-tabs .tab-item').click(function(){
        $('.portfolio-tabs .tab-item').removeClass('active');
        $(this).addClass('active');
        $('.portfolio-subnavi .tab-content').hide();
        var activeTab = $(this).attr('data-id');
        $(".tab-content[data-id='" + activeTab + "']").fadeIn();
        return false;
    });

    $('.search-overlay').addClass('active');

    // Click function
    $('.search-overlay').click(function(){
        $(this).siblings('#form_kesearch_searchfield').find('#ke_search_searchfield_sword').focus();
        console.log('click overlay');
    });

    $('#form_kesearch_searchfield .search-icon').click(function(){
        $(this).find('#ke_search_searchfield_sword').click();
        console.log('click');
    });


    $( "#ke_search_searchfield_sword" ).focus(function() {
        $( this ).parent().siblings('.search-overlay').removeClass('active');
        $( this ).siblings('.search-icon').addClass('active');
    });
    $( "#ke_search_searchfield_sword" ).blur(function() {
        if($(event.relatedTarget).prop('type') === 'submit'){
            event.preventDefault();
        }
        else {
            //Do whatever you want when focusing out. For instance:
            $( this ).parent().siblings('.search-overlay').addClass('active');
            $( this ).siblings('.search-icon').removeClass('active');
        }

    });
});
