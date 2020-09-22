jQuery(function ($) {
    "use strict";

    //collapse
    $('.card.card-box').on('show.bs.collapse', function (e) {
        $('.card.card-box .collapse').not(e.target).collapse('hide');
    });

    //owl carousel testimonials photo
    var lazyload_testi = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_testi = true;
    $.each( $(".owl-testimonials-photo"), function( key, value ) {
        $(this).owlCarousel({
              loop:false,
              margin:0,
              nav:true,
              dots:true,
              autoplay:false,
              lazyLoad:lazyload_testi,
              responsive:{
                0:{
                    items: 1
                }
            }
        });
    });

    //owl carousel custom
    var lazyload_ins = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_ins = true;
    $.each( $(".instagram_carousel"), function( key, value ) {
        $(this).owlCarousel({
              loop:false,
              margin:0,
              nav:false,
              dots:false,
              autoplay:false,
              lazyLoad:lazyload_ins,
              responsive:{
                0:{
                    items: 1
                },
                360:{
                    items: 2
                },
                600:{
                    items: 3
                },
                992:{
                    items: 4
                },
                1200:{
                    items: 5
                },
                1500:{
                    items: 6
                }
            }
        });
    });

    //slider demo 9
    var lazyload_img = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_img = true;
    $.each( $(".image-carousel"), function( key, value ) {
        $(this).owlCarousel({
            center: true,
              loop:true,
              margin: 0,
              nav: true,
              dots:false,
              autoplay:false,
              lazyLoad:lazyload_img,
              responsive:{
                0:{
                    items: 1
                }
            }
        });
    });

    // Productbox 8 hover
    $('.productbox-8').hover(function () {
        var $this = $(this),
            animDiff = ( $this.outerHeight() - ( $this.find('.product-info').outerHeight() + $this.find('.product-preview').outerHeight()) ),
            animDistance = ( $this.find('.product-footer').outerHeight() - animDiff );

        $this.find('.product-footer').css({ 'visibility': 'visible', 'transform': 'translateY(0)' });
        $this.find('.product-info').css('transform', 'translateY('+ -animDistance +'px)');

    }, function () {
        var $this = $(this);

        $this.find('.product-footer').css({ 'visibility': 'hidden', 'transform': 'translateY(100%)' });
        $this.find('.product-info').css('transform', 'translateY(0)');
    });
    


    // Scroll Top Button - Show
    var $scrollTop = $('#scroll-top');

    $(window).on('load scroll', function() {
        if ( $(window).scrollTop() >= 400 ) {
            $scrollTop.addClass('show');
        } else {
            $scrollTop.removeClass('show');
        }
    });

    // view all demo
    var $viewAll = $('.view-all-demos');
    $viewAll.on('click', function (e) {
        e.preventDefault();
        $('.demo-item.hidden').removeClass('hidden');
        $(this).addClass('disabled-hidden');
    })

    // On click animate to top
    $scrollTop.on('click', function (e) {
        $('html, body').animate({
            'scrollTop': 0
        }, 800);
        e.preventDefault();
    });

    //header sticky
    var win = $(window),
        header = $('.header-sticky');
    if(header.length > 0) {
        var offset = (header.offset().top);
        win.scroll(function() {
            if (offset < win.scrollTop()) {
                header.addClass("sticky");
            } else {
                header.removeClass("sticky");
            }
        });
    }

    // hidden dropdown menu header 13
    var win = $(window),
        header = $('.header-sticky');
    if(header.length > 0) {
        var offset = (header.offset().top);
        win.scroll(function() {
            if (offset < win.scrollTop()) {
                $('.header-13 .vermenu > .dropdown-menu').css({"opacity": 0, "visibility": "hidden"});
            } else {
                $('.header-13 .vermenu > .dropdown-menu').css({"opacity": 1, "visibility": "visible"});
            }
        });
    }

    //search
    $( ".btn-search-full" ).click(function() {
        $('#search-form-full').toggleClass('open');
    });
    $( ".search-box-close" ).click(function() {
        $('#search-form-full').removeClass('open');
    });

    //sidebar
    $( "#sidebar-btn" ).click(function() {
        if($('#header-sidebar').hasClass('right-sidebar'))
            $('body').toggleClass('sidebar-right-open');
        else
            $('body').toggleClass('sidebar-left-open');
    });
    $(document).on('click', function(){
        if($('body').hasClass('sidebar-right-open'))
            $('body').removeClass('sidebar-right-open');
        if($('body').hasClass('sidebar-left-open'))
            $('body').removeClass('sidebar-left-open');
    });
    $('#header-sidebar, #sidebar-btn').on('click', function(e){
        e.stopPropagation();
    });

    //product image zoom
    $('.product-image-zoom').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });

    //remove short desc
    if($('body').hasClass('page-index')){
        $('.product-miniature .product-short-desc').remove();
    }
});

$(document).mouseup(function(e){
    var container = $('.search-box');
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.closest('.search-overlay').removeClass('open');
    }
});

$(document).on('click', '.switch-view', function (e) {
    e.preventDefault();
    $('.switch-view').removeClass('active');
    $(this).addClass('active');
    if($(this).hasClass('view-grid')) {
        $('#product_list').removeClass('products-list');
        $('#product_list').addClass('products-grid');
    } else {
        $('#product_list').removeClass('products-grid');
        $('#product_list').addClass('products-list');
    }
});

$(document).on('click', '.dropdown-menu', function (e) {
    e.stopPropagation();
});

function changeShopGrid() {
    if (jQuery(window).width() < 480) {
        $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
        $('.products-grid').addClass('grid-1');
    } else if(jQuery(window).width() < 768) {
        $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
        $('.products-grid').addClass('grid-2');
    } else if(jQuery(window).width() < 991) {
        $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
        $('.products-grid').addClass('grid-3');
    } else {
        $('.products-grid').removeClass('grid-1 grid-2 grid-3 grid-4');
        $('.products-grid').addClass('grid-' + gdzSetting.shop_grid_column);
    }
}
function footerCollapse() {
    if ((jQuery(window).width() < 480) && gdzSetting.footer_block_collapse) {
        $('#footer-main').addClass('collapsed');
        $('#footer-main').find('.block-content').addClass('collapse');
    } else {
        $('#footer-main').removeClass('collapsed');
        $('#footer-main').find('.block-content').removeClass('collapse');
    }
}


jQuery(document).ready(function(){
    $('.gdz-megamenu').jmsMegaMenu({
        event: 'hover',
        duration: 100
    });
    changeShopGrid();
    footerCollapse();
});
jQuery(window).resize(function () {
    changeShopGrid();
    footerCollapse();
});

$(document).on('click', '#footer-main.collapsed .block-title', function (e) {
    $(this).parent().toggleClass('collapsed');
    $(this).parent().find('.block-content').toggleClass('collapse');
});
