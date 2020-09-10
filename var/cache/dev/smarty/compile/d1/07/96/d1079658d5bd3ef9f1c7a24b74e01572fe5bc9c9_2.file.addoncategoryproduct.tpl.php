<?php
/* Smarty version 3.1.33, created on 2020-09-09 17:28:45
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\modules\gdz_pagebuilder\views\templates\hook\addoncategoryproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f58ae5d0cb642_43136359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1079658d5bd3ef9f1c7a24b74e01572fe5bc9c9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\addoncategoryproduct.tpl',
      1 => 1599627429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 2,
  ),
),false)) {
function content_5f58ae5d0cb642_43136359 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-categoryproduct">
	<?php if ($_smarty_tpl->tpl_vars['showcategoryname']->value) {?>
		<div class="pb-categoryproduct-name">
			<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
		</div>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['products']) && count($_smarty_tpl->tpl_vars['category']->value['products']) > 0 && $_smarty_tpl->tpl_vars['view_type']->value == 'carousel') {?>
		<div class="catproduct-carousel owl-carousel customs" data-items="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>" data-margin="<?php if (isset($_smarty_tpl->tpl_vars['gutter']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gutter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>30<?php }?>">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['products'], 'products_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->value) {
?>
				<div class="item">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_slide']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['category']->value['products']) && count($_smarty_tpl->tpl_vars['category']->value['products']) > 0) {?>
		<div class="category-products products row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
				<div class="col-grid col-md-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_md']->value, ENT_QUOTES, 'UTF-8');?>
 col-sm-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_sm']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['cols_xs']->value, ENT_QUOTES, 'UTF-8');?>
">
					<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['showviewall']->value) {?>
		<a class="pb-categoryproduct-viewall" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['category']->value['id_category']),$_smarty_tpl ) );?>
" title="View all product in category">
			<?php echo $_smarty_tpl->tpl_vars['viewall_text']->value;?>

			<i aria-hidden="true" class="fa fa-angle-right"></i>
		</a>
	<?php }?>
</div>
<?php }
}
