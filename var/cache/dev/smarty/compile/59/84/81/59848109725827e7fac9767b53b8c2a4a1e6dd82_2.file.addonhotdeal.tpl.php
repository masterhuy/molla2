<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonhotdeal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94d246b5_37451866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59848109725827e7fac9767b53b8c2a4a1e6dd82' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonhotdeal.tpl',
      1 => 1595493192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94d246b5_37451866 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
    setting = component.data('setting');
    console.log(component);
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.ajax_link + 'action=getDeals&secure_key=' + PagebuilderConfig.secure_key,
        data: {
            'setting' : setting,
        },
        success: function(data)
        {
            component.find('.addon-body').html(data);
            carousel = component.find('.owl-carousel');
            carousel.owlCarousel({
                loop:true,
                margin:carousel.data("margin"),
                nav:carousel.data("nav"),
                dots:carousel.data("dots"),
                autoplay:carousel.data("auto"),
                rewind:carousel.data("rewind"),
                slideBy:carousel.data("slidebypage"),
                responsive: {
                    0:{
                        items:carousel.data("xs")
                    },
                    576:{
                        items:carousel.data("sm")
                    },
                    992:{
                        items:carousel.data("md")
                    }
                }
            });
        }
  });
}
<?php echo '%>';
}
}
