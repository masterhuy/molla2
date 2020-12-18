<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:02
  from 'F:\xampp\htdocs\jms_molla\admin141dyjvta\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e92d3b939_01236022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299813edfcc4ad9484c347c5a2d363247e69da1f' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\admin141dyjvta\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1591673246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e92d3b939_01236022 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
