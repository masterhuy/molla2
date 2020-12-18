<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:47:26
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\headers\mobile-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7aae364871_49211517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1caeb53c619f2e5d3f47f3d4936aa58c06c41504' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\headers\\mobile-menu.tpl',
      1 => 1606200501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5fdc7aae364871_49211517 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="mobile-menu-toggle" class="open-button hidden-lg">
	<i class="icon-bars"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button">
        <i class="icon-close"></i>
    </button>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

    <h3 class="text-menu"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
    <nav id="off-canvas-menu">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"gdz_megamenu",'hook'=>'MobiMenu'),$_smarty_tpl ) );?>

    </nav>
    <div class="social-block">
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<div class="mobile-menu-overlay"></div><?php }
}
