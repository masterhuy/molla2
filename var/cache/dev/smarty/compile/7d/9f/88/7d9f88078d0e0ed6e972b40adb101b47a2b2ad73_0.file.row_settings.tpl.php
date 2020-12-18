<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:03
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\admin\row_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e935c56c9_20497693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d9f88078d0e0ed6e972b40adb101b47a2b2ad73' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\admin\\row_settings.tpl',
      1 => 1597031240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:gdz_pagebuilder/views/templates/admin/settings.tpl' => 1,
  ),
),false)) {
function content_5fdc7e935c56c9_20497693 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="row-settings" class="hidden">
    <div class="row-settings">
        <ul role="tablist" class="nav nav-tabs">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row_settings']->value, 'row_setting', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['row_setting']->value) {
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>"><a data-toggle="tab" href="#row-<?php echo $_smarty_tpl->tpl_vars['row_setting']->value['id'];?>
"><i class="gdz-icon-<?php echo $_smarty_tpl->tpl_vars['row_setting']->value['id'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['row_setting']->value['title'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="tab-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row_settings']->value, 'setting', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['setting']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender("module:gdz_pagebuilder/views/templates/admin/settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stype'=>"row"), 0, true);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
}
