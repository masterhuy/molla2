<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addoninstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94d9d846_99345455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db408c90c10a8c7bc409803033238893b25eff09' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addoninstagram.tpl',
      1 => 1601534228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94d9d846_99345455 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
    setting = component.data('setting');
    console.log(setting);
    $.ajax({
      type: 'POST',
      url: PagebuilderConfig.editor_link + '&action=GetInstagram&ajax=1',
      data: {
          'setting' : setting,
      },
      success: function(data)
      {
        component.find('.addon-body').html(data);
        component.find('.pb-instagram').each(function() {
          var pb_instagram = $(this);
          optionData = pb_instagram.attr('data-option');
          if (optionData) {
            var options = JSON.parse(pb_instagram.attr('data-option'));
            if(options.view_type == 'carousel') {
              var $carousel = pb_instagram.find('.pb-instagram-carousel');
              if ( ! $carousel.length ) {
                  return;
              }
              $carousel.owlCarousel({
                  loop:true,
                  margin:parseInt(options.gutter),
                  nav:parseInt($carousel.attr('data-nav')),
                  dots:parseInt($carousel.attr('data-dots')),
                  autoplay:parseInt($carousel.attr('data-auto')),
                  rewind:parseInt($carousel.attr('data-rewind')),
                  slideBy:$carousel.attr('data-slidebypage'),
                  lazyLoad:true,
                  responsive:{
                      0:{
                          items:$carousel.attr('data-xs')
                      },
                      576:{
                          items:$carousel.attr('data-sm')
                      },
                      992:{
                          items:$carousel.attr('data-md')
                      },
                      1199:{
                          items:$carousel.attr('data-items')
                      },
                  }
              });
              $carousel.addClass('owl-carousel');
            }
          }
        });
      }
    });
  }
<?php echo '%>';
}
}
