<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addoncategoryproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94c88284_77629541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0661af53e4beac4397a0e40251f7c75bb2a26c1c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addoncategoryproduct.tpl',
      1 => 1595493171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94c88284_77629541 (Smarty_Internal_Template $_smarty_tpl) {
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
    console.log(component);
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.ajax_link + 'action=getCatProducts&secure_key=' + PagebuilderConfig.secure_key,
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
