jQuery(function ($) {
    "use strict";

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
    

    if (!$(body).hasClass("page-category")) {
        $(".owl-carousel .product-description").remove();
    }



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
