<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:04:14
  from 'module:gdzajaxsearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaabe068e57_62920108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21dc93547e5eb942158d657d78a9a3ff414f63f0' => 
    array (
      0 => 'module:gdzajaxsearchviewstemplat',
      1 => 1608698529,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaaabe068e57_62920108 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="search-form" class="search-form">
	<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="search-box">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<div class="input-group">
			<input type="text" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search product ...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" class="gdz-search-input form-control search-input" />
			<button type="submit" name="submit_search" class="button-search">
				<i class="icon-search"></i>
			</button>
		</div>
	</form>
	<div class="search-result-area"></div>
</div>
<?php }
}
