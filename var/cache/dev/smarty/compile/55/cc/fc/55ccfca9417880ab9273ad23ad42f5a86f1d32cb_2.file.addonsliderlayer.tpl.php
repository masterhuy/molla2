<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonsliderlayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94ebab08_55720064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ccfca9417880ab9273ad23ad42f5a86f1d32cb' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonsliderlayer.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94ebab08_55720064 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
    setting = component.data('setting');
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.editor_link + '&action=GetSlider&ajax=1',
        data: {
            'setting' : setting,
        },
        success: function(data)
        {
                component.find('.addon-body').html(data);
                slider = component.find('.slider');
                slider.fractionSlider({
                    'slideTransition' : slider.attr('data-slideTransition'),
                    'slideEndAnimation' : (slider.attr('data-slideEndAnimation') == "1")?true:false,
                    'transitionIn' : slider.attr('data-transitionIn'),
                    'transitionOut' : slider.attr('data-transitionOut'),
                    'fullWidth' : (slider.attr('data-fullWidth') == "1")?true:false,
                    'delay' : slider.attr('data-delay'),
                    'timeout' : slider.attr('data-timeout'),
                    'speedIn' : slider.attr('data-speedIn'),
                    'speedOut' : slider.attr('data-speedOut'),
                    'easeIn' : slider.attr('data-easeIn'),
                    'easeOut' : slider.attr('data-easeOut'),
                    'controls' : (slider.attr('data-controls') == "1")?true:false,
                    'pager' : (slider.attr('data-pager') == "1")?true:false,
                    'autoChange' : (slider.attr('data-autoChange') == "1")?true:false,
                    'pauseOnHover' : (slider.attr('data-pauseOnHover') == "1")?true:false,
                    'backgroundAnimation' : (slider.attr('data-backgroundAnimation') == "1")?true:false,
                    'backgroundEase' : slider.attr('data-backgroundEase'),
                    'responsive' : (slider.attr('data-responsive') == "1")?true:false,
                    'dimensions' : slider.attr('data-dimensions'),
                    'mobile_height' : slider.attr('data-mobile_height'),
                    'mobile2_height' : slider.attr('data-mobile2_height'),
                    'tablet_height' : slider.attr('data-tablet_height'),
                })
        }
  });
}
<?php echo '%>';
}
}
