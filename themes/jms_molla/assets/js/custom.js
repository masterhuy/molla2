jQuery(function ($) {
    "use strict";

    //add login bg img
    if($('#login-wrapper').hasClass('bg-img')){
        $('body').addClass('has-background-image');
    }

    // Scroll To button
    var $scrollTo = $('.scroll-to');
    // If button scroll elements exists
    if ( $scrollTo.length ) {
        // Scroll to - Animate scroll
        $scrollTo.on('click', function(e) {
            var target = $(this).attr('href'),
                $target = $(target);
            if ($target.length) {
                // Add offset for sticky menu
                var scrolloffset = ( $(window).width() >= 992 ) ? ($target.offset().top - 52) : $target.offset().top
                $('html, body').animate({
                    'scrollTop': scrolloffset
                }, 600);
                e.preventDefault();
            }
        });
    }

    // Count to
    var $countItem = $('.count');
	if ( $.fn.countTo ) {
        if ($.fn.waypoint) {
            $countItem.waypoint( function () {
                $(this.element).countTo();
            }, {
                offset: '90%',
                triggerOnce: true 
            });
        } else {
            $countItem.countTo();
        }    
    } else { 
        // fallback
        // Get the data-to value and add it to element
        $countItem.each(function () {
            var $this = $(this),
                countValue = $this.data('to');
            $this.text(countValue);
        });
    }

    //collapse
    $('.card.card-box').on('show.bs.collapse', function (e) {
        $('.card.card-box .collapse').not(e.target).collapse('hide');
    });

    $('.panel-default').on('show.bs.collapse', function (e) {
        $('.panel-default .collapse').not(e.target).collapse('hide');
    });

    //owl carousel testimonials photo
    var lazyload_testi = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_testi = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".owl-testimonials-photo"), function( key, value ) {
        $(this).owlCarousel({
            loop:false,
            rtl:rtl,
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

    //owl carousel featured product
    var lazyload_fp = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_fp = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".featured-product-carousel"), function( key, value ) {
        $(this).owlCarousel({
            loop: false,
            rtl:rtl,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: false,
            lazyLoad: lazyload_fp,
            responsive:{
                0:{
                    items: 1
                },
                576:{
                    items: 2
                },
                768:{
                    items: 3
                },
                1200:{
                    items: 4
                },
            }
        });
    });

    //owl carousel same category
    var lazyload_sc = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_sc = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".customs-carousel-product"), function( key, value ) {
        $(this).owlCarousel({
            loop: false,
            rtl:rtl,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: false,
            lazyLoad: lazyload_sc,
            responsive:{
                0:{
                    items: 2
                },
                576:{
                    items: 2
                },
                768:{
                    items: 3
                },
                1200:{
                    items: 4
                },
            }
        });
    });

    //owl carousel custom
    var lazyload_ins = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_ins = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".instagram_carousel"), function( key, value ) {
        $(this).owlCarousel({
            loop:false,
            rtl:rtl,
            margin:0,
            nav:false,
            dots:false,
            autoplay:false,
            lazyLoad:lazyload_ins,
            responsive:{
                0:{
                    items: 2
                },
                768:{
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

    var lazyload_ins2 = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_ins2 = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".instagram_carousel_2"), function( key, value ) {
        $(this).owlCarousel({
            loop:false,
            rtl:rtl,
            margin:20,
            nav:false,
            dots:false,
            autoplay:false,
            lazyLoad:lazyload_ins2,
            responsive:{
                0:{
                    items: 2
                },
                768:{
                    items: 3
                },
                992:{
                    items: 4
                },
                1200:{
                    items: 5
                }
            }
        });
    });

    //thumbs gallery carousel
    var lazyload_thub = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_thub = true;
    var rtl = false;
    if ($("body").hasClass("rtl")) rtl = true;
    $(".product-layout-gallery .product-images").addClass('owl-carousel');
    $.each( $(".product-layout-gallery .product-images"), function( key, value ) {
        $(this).owlCarousel({
            loop:false,
            rtl:rtl,
            margin:10,
            nav:true,
            dots:false,
            autoplay:false,
            lazyLoad:lazyload_thub,
            responsive:{
                0:{
                    items: 2
                },
                768:{
                    items: 3
                },
            }
        });
    });

    //slider demo 9
    var lazyload_img = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_img = true;
    var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;
    $.each( $(".h9-slider .image-carousel"), function( key, value ) {
        $(this).owlCarousel({
            center: true,
            rtl:rtl,
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
        //var offset = (header.offset().top);
        win.scroll(function() {
            if (450 < win.scrollTop()) {
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
    $('.product-detail .product-image-zoom').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });

    //remove short desc
    if($('body').hasClass('page-index')){
        $('.product-miniature .product-short-desc').remove();
    }

    $('.product-layout-sticky-info ~ #more_info_block').remove();
});

$(document).mouseup(function(e){
    var container = $('.search-box');
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.closest('.search-overlay').removeClass('open');
    }
});

$(document).on('click', '.addToWishlist', function (e) {
    e.preventDefault();
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
        $('#product_list').removeClass('grid-2');
        $('#product_list').removeClass('grid-3');
        $('#product_list').removeClass('grid-4');
        $('#product_list').removeClass('grid-5');
        $('#product_list').removeClass('grid-6');
        $('#product_list').addClass('products-list');
    }
});
$(document).on('click', '.view-grid-2', function (e) {
    $('#product_list').addClass('grid-2');
    $('#product_list').removeClass('grid-3');
    $('#product_list').removeClass('grid-4');
    $('#product_list').removeClass('grid-5');
    $('#product_list').removeClass('grid-6');
});
$(document).on('click', '.view-grid-3', function (e) {
    $('#product_list').addClass('grid-3');
    $('#product_list').removeClass('grid-2');
    $('#product_list').removeClass('grid-4');
    $('#product_list').removeClass('grid-5');
    $('#product_list').removeClass('grid-6');
});
$(document).on('click', '.view-grid-4', function (e) {
    $('#product_list').addClass('grid-4');
    $('#product_list').removeClass('grid-2');
    $('#product_list').removeClass('grid-3');
    $('#product_list').removeClass('grid-5');
    $('#product_list').removeClass('grid-6');
});

$(document).on('click', '.dropdown-menu', function (e) {
    e.stopPropagation();
});

function footerCollapse() {
    if ((jQuery(window).width() < 480) && (gdzSetting.footer_block_collapse == 1)) {
        $('#footer-main').addClass('collapsed');
        $('#footer-main').find('.block-content').addClass('collapse');
    } else {
        $('#footer-main').removeClass('collapsed');
        $('#footer-main').find('.block-content').removeClass('collapse');
    }
}

function stickyBar(){
    var blockAddtocart = $('#product .pb-right-column .product-actions form').clone();
    $('#sticky-bar .col-right .content').append(blockAddtocart);
    $('#sticky-bar .bootstrap-touchspin-up').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        var currentVal = parseInt($('#sticky-bar #quantity_wanted').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('#sticky-bar #quantity_wanted').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('#sticky-bar #quantity_wanted').val(0);
        }
    });
    // This button will decrement the value till 0
    $("#sticky-bar .bootstrap-touchspin-down").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        var currentVal = parseInt($('#sticky-bar #quantity_wanted').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('#sticky-bar #quantity_wanted').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('#sticky-bar #quantity_wanted').val(0);
        }
    });
}

function imageThumbCarousel(){
    var lazyload_pm = false;
    if(gdzSetting.carousel_lazyload)
    var lazyload_pm = true;
    if($(".productModal-carousel").length) {
		var productModalCarousel = $(".productModal-carousel");
		var rtl = false;
		if ($("body").hasClass("rtl")){
            rtl = true;
            productModalCarousel.addClass('owl-carousel');
        } 
		    productModalCarousel.owlCarousel({
            rtl: rtl,
            margin: 0,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            nav: true,
            dots: false,
            autoplay: false,
            loop: false,
            lazyLoad:lazyload_pm,
            responsive:{
                0: {
                    items:1
                }
            }
		});
    }
}

function calcOwnControlProductModal(){
	var bodyWidth = $("body").innerWidth();
	var thumbWidth = $('#product-modal .thumb').innerWidth();
    var space = -((bodyWidth - thumbWidth)/2 - 30);

	$("#product-modal .owl-nav .owl-prev").css("left", space);
	$("#product-modal .owl-nav .owl-next").css("right", space);
}

function stickyRightColumn(){
    if($('.product-layout-3columns .pb-left-column').length){
        var rightColumn = new StickySidebar('.product-layout-3columns .pb-right-column', {
            containerSelector: '.product-layout-3columns',
            innerWrapperSelector: '.product-layout-3columns .pb-right-column .row',
            resizeSensor: true,
            topSpacing: 100,
            bottomSpacing: 100
        });
    }
}

function stickyRightColumn2(){
    if($('.product-layout-sticky-info .pb-left-column').length){
        var rightColumn2 = new StickySidebar('.product-layout-sticky-info .pb-right-column .js-content-sticky', {
            containerSelector: '.product-layout-sticky-info',
            innerWrapperSelector: '.product-layout-sticky-info .pb-right-column .js-content-sticky',
            resizeSensor: true,
            topSpacing: 100,
        });
    }
}

function slickImage(){
    // slick carousel
    $('.quickview-modal .product-images').slick({
        dots: false,
        vertical: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        verticalSwiping: true,
        infinite: false,
    });
}

jQuery(document).ready(function(){
    $('#hor-menu .gdz-megamenu').jmsMegaMenu({
        event: 'hover',
        duration: 100
    });
    $('.vermenu .gdz-megamenu').jmsMegaMenu({
        event: 'hover',
        duration: 100
    });
    $('.pb-menu .gdz-megamenu').jmsMegaMenu({
        event: 'hover',
        duration: 100
    });
    $('#off-canvas-menu .gdz-megamenu').jmsMegaMenu({
        event: 'click',
        duration: 100
    });
    prestashop.on('clickQuickView', function (e) {
		setTimeout(function(){ slickImage(); }, 2000);
	});
    prestashop.on('updatedProduct', function (e) {
        slickImage();
        imageThumbCarousel();
        calcOwnControlProductModal();
    });
    setTimeout(() => {
        $('#product-modal .owl-stage .owl-item:first-child').addClass('active');
    }, 1000);

    stickyRightColumn();
    stickyRightColumn2();
    imageThumbCarousel();
    calcOwnControlProductModal();
    footerCollapse();
    stickyBar();
});

jQuery(window).resize(function () {
    stickyRightColumn();
    stickyRightColumn2();
    footerCollapse();
    calcOwnControlProductModal();
});


$(document).on('click', '.js-qv-mask .js-thumb', function (e) {
    var imageSrc = $(this).attr('src');
    $('#product-modal .owl-stage .owl-item.active .thumb').attr("src", imageSrc);
});

$(document).on('click', '#footer-main.collapsed .block-title', function (e) {
    $(this).parent().toggleClass('collapsed');
    $(this).parent().find('.block-content').toggleClass('collapse');
});

//filter sidebar
$(document).on('click', '.sidebar-toggler > .js-open-filter', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('active');
    $('body').addClass('sidebar-filter-active');
});
$(document).on('click', '.sidebar-toggler > a.active', function (e) {
    e.preventDefault();
    $(this).removeClass('active');
    $('body').removeClass('sidebar-filter-active');
});
$(document).on('click', '.main-site #search_filters_wrapper', function (e) {
    e.stopPropagation();
});
$(document).on('click', '.main-site', function (e) {
    $('.sidebar-toggler > a').removeClass('active');
    $('body').removeClass('sidebar-filter-active');
});


jQuery(function ($) {
    "use strict";
    $("#off-canvas-menu .mega .caret").click(function (e) {
        e.preventDefault();
        var _parent = $(this).parent();
        var _dropdown = _parent.next('.dropdown-menu');
        var _grandparent = _parent.parent();
        if(_grandparent.hasClass('open')) {
            _grandparent.removeClass('open');
            _dropdown.slideDown("normal");
           
        } else {
            _grandparent.addClass('open');
            _dropdown.slideUp("normal");
        }
    })
    $(".mega .caret").mouseover(function (e) {
        e.preventDefault();
        return false;
    })
    $("#off-canvas-menu li a").mouseover(function (e) {
        e.preventDefault();
        return false;
    })
});

