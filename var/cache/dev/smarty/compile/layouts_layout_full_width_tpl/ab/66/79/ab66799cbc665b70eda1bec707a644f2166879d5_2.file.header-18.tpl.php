<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:45:55
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\headers\header-18.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb73bf3d91632_05236356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab66799cbc665b70eda1bec707a644f2166879d5' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\headers\\header-18.tpl',
      1 => 1602757045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/logo.tpl' => 1,
    'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch.tpl' => 1,
    'file:_partials/headers/wishlist.tpl' => 1,
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
  ),
),false)) {
function content_5fb73bf3d91632_05236356 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="header-middle" class="header-middle<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky'] == 1) {?> header-sticky<?php }
if (($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky'] == 1) && ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'] != '')) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_sticky_effect'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="layout-column col-5">
                <div id="hor-menu" class="<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_align']) {?> align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['hormenu_align'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"gdz_megamenu",'hook'=>'HorMenu'),$_smarty_tpl ) );?>

                </div>
            </div>
            <div class="layout-column col-2 col-logo">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column col-5 col-right">
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['search']) {?>
                        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"gdz_ajaxsearch"));
$_block_repeat=true;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"gdz_ajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['wishlist'] == 1)) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/wishlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['gdzSetting']->value['cart'] == 1)) {?>
                        <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php }
}
