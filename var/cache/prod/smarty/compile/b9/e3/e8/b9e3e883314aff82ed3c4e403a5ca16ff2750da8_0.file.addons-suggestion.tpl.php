<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:13:21
  from 'F:\xampp\htdocs\jms_molla\modules\blockreassurance\views\templates\admin\addons-suggestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaace1532d59_59392925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9e3e883314aff82ed3c4e403a5ca16ff2750da8' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\blockreassurance\\views\\templates\\admin\\addons-suggestion.tpl',
      1 => 1609214229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaace1532d59_59392925 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="module-addons-suggestion">
    <div class="suggestion-icon">
    </div>
    <div class="suggestion-category-details">
        <div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Want to go further?','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

        </div>
        <div class="category-label">
            <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['name'];?>

        </div>
        <div class="marketplace-label">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addons Marketplace','d'=>'Admin.Global'),$_smarty_tpl ) );?>

        </div>
    </div>
    <div class="suggestion-category-description">
        <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['description'];?>

    </div>
    <div class="suggestion-link">
        <a target="_blank" class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['addons_category']->value['link'];?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover all modules','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

        </a>
    </div>
</div>
<?php }
}
