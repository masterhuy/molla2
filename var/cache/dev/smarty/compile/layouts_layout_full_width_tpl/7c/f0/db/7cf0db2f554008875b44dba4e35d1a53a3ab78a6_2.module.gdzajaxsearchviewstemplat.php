<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:02:54
  from 'module:gdzajaxsearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e4eb3f3d7_43313114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf0db2f554008875b44dba4e35d1a53a3ab78a6' => 
    array (
      0 => 'module:gdzajaxsearchviewstemplat',
      1 => 1596076519,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e4eb3f3d7_43313114 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-dropdown.tpl --><div class="btn-group gdz_ajax_search col-auto<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['search_box_type']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['search_box_type'], ENT_QUOTES, 'UTF-8');
}?>" id="gdz_ajax_search">
	<a href="#" class="btn-search" data-toggle="dropdown" data-display="static">
		<i class="icon-search"></i>
	</a>
	<div id="search-form-dropdown" class="search-form dropdown-menu">
		<div class="search-box">
			<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
        		<div class="input-group">
    				<input type="text" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search in...','mod'=>'gdz_ajaxsearch'),$_smarty_tpl ) );?>
" class="gdz-search-input form-control search-input" />
    				<button type="submit" name="submit_search" class="button-search">
    					<i class="icon-search"></i>
    				</button>
        		</div>
			</form>
			<div class="search-result-area"></div>
		</div>
	</div>
</div>
<!-- end F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-dropdown.tpl --><?php }
}
