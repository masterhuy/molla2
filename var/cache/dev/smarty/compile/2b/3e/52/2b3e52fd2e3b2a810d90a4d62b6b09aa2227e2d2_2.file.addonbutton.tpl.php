<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:47:25
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addonbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7aad0e3df4_33720649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b3e52fd2e3b2a810d90a4d62b6b09aa2227e2d2' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addonbutton.tpl',
      1 => 1595305146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7aad0e3df4_33720649 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-button<?php if ($_smarty_tpl->tpl_vars['button_align']->value) {?> pb-button-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_align']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
		<a class="<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> btn<?php if ($_smarty_tpl->tpl_vars['button_size']->value) {?> btn-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_size']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['button_style']->value) {?> btn-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_style']->value, ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['button_align']->value) {?> btn-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_align']->value, ENT_QUOTES, 'UTF-8');
}?>" href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {
echo $_smarty_tpl->tpl_vars['button_link']->value;
} else { ?>#<?php }?>" target="<?php echo $_smarty_tpl->tpl_vars['target']->value;?>
">
			<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['button_text']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<i class="icon-long-arrow-right"></i>
		</a>
	<?php }?>
</div>
<?php }
}
