<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonmodule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94dd81d2_78360521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0eb2d53dae1c91b806ff6a71d2a1f5df4a2ed45' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonmodule.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94dd81d2_78360521 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?>
component = $('#gdz-configuration').data('component');
if(component) {
		var post_data = 'module=' + modulename + '&hook=' + modulehook;
		$.ajax({
				type: 'POST',
				url: PagebuilderConfig.editor_link + '&action=GetModule&ajax=1',
				data:post_data,
				success: function(data)
				{
						component.find('.addon-body').html('<div class="pb-module">' + data + '</div>');
				}
		});
}
<?php echo '%>';
}
}
