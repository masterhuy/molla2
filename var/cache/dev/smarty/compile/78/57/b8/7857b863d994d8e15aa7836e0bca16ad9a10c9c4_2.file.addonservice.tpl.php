<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:47:25
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonservice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7aad5a2b95_94959869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7857b863d994d8e15aa7836e0bca16ad9a10c9c4' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonservice.tpl',
      1 => 1599639555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7aad5a2b95_94959869 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-service-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
		<div class="pb-service-icon">
		<?php if ($_smarty_tpl->tpl_vars['icon_type']->value == 'image' && $_smarty_tpl->tpl_vars['image']->value) {?>
			<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alt_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
		<?php } elseif ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
			<i class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></i>
		<?php }?>
		</div>
		<div class="pb-service-content">
				<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
				<<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="pb-service-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_tag']->value, ENT_QUOTES, 'UTF-8');?>
>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
				<div class="pb-service-description">
				<?php echo $_smarty_tpl->tpl_vars['description']->value;?>

				</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
				<a class="pb-service-button btn" href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value == '_blank') {?> target="_blank"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
				<?php }?>
		</div>
</div>
<?php }
}
