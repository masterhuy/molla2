<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:10:03
  from 'module:pslanguageselectorpslangu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb7338be72426_76336733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535e6b738051095402a9a7220d85cff70855dd5f' => 
    array (
      0 => 'module:pslanguageselectorpslangu',
      1 => 1596015124,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb7338be72426_76336733 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/ps_languageselector/ps_languageselector-dropdown2.tpl --><!-- Block languages module -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<div class="header-dropdown languages-info">
		<a href="#">
			<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_language']->value['name_simple'],3,'' )), ENT_QUOTES, 'UTF-8');?>

		</a>
		<div class="header-menu">
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k', 'languages', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="collapse-item">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>

						</a>
					</li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
<?php }?>
<!-- /Block languages module -->
<!-- end F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/ps_languageselector/ps_languageselector-dropdown2.tpl --><?php }
}
