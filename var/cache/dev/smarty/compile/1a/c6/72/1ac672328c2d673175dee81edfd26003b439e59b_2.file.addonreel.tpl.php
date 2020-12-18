<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonreel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94e8fb82_10406259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ac672328c2d673175dee81edfd26003b439e59b' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonreel.tpl',
      1 => 1603185376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94e8fb82_10406259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="lds-ring"><div></div><div></div><div></div><div></div></div>
<?php echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
    setting = component.data('setting');
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.editor_link + '&action=GetReel&ajax=1',
        data: {
            'setting' : setting,
        },
        success: function(data)
        {
            component.find('.addon-body').html(data);
            $(component).find('.gdz_reel').each(function(i, e) {
                let h = $(this).find('.lookbooks').height();
                if (h < 500) {
                    h = 500;
                }
                $(this).find('video').css({
                    'max-height': h,
                    'display': 'block',
                });
            })
        }
  });
}
<?php echo '%>';
}
}
