<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:47:24
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonheading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7aacf18975_71204314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6e9c4037a33bef4afbf0364d819a95d1fca2df6' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonheading.tpl',
      1 => 1593491963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7aacf18975_71204314 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['heading']->value) {?>
<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading_tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="pb-heading<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
	<?php echo $_smarty_tpl->tpl_vars['heading']->value;?>

</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading_tag']->value, ENT_QUOTES, 'UTF-8');?>
>
<?php }
}
}
