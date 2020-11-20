<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:01:54
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addoncountdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb731a23a47d8_97354638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fe4c637b0f17e9a4ee548056c8601efc19531f6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addoncountdown.tpl',
      1 => 1594026290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb731a23a47d8_97354638 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-countdown<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
<div class="pb-countdown-time countdown">
	<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['expire_time']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

</div>
</div>
<?php }
}
