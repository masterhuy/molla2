<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonproducttab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94e7c305_46174171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10105acd76d713bebecf38707434479fd2f332a7' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonproducttab.tpl',
      1 => 1595493203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94e7c305_46174171 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(view_type == 'grid') { <?php echo '%>';?>
<div class="grid-style">
<style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .row > div {
    padding-left: <?php echo '<%';?>= gutter/2 <?php echo '%>';?>px;
    padding-right: <?php echo '<%';?>= gutter/2 <?php echo '%>';?>px;
}
</style>
</div>
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
    setting = component.data('setting');
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.ajax_link + 'action=getProductTab&secure_key=' + PagebuilderConfig.secure_key,
        data: {
            'setting' : setting,
        },
        success: function(data)
        {
            if(view_type == 'grid') data = component.find('.addon-body').find('.grid-style').html() + data;
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
