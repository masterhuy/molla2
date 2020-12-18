<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94dc4952_98496051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6718f9d1ce5dad730f46fce3020eb15978e3b9a7' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonmenu.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94dc4952_98496051 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
  component = $('#gdz-configuration').data('component');
  if(component) {
		var post_data = 'menu_id=' + menu_id;
    $.ajax({
        type: 'POST',
        url: PagebuilderConfig.editor_link + '&action=GetMenu&ajax=1',
        data:post_data,
        success: function(data)
        {
            component.find('.addon-body').html(data);
        }
  });
}
<?php echo '%>';
}
}
