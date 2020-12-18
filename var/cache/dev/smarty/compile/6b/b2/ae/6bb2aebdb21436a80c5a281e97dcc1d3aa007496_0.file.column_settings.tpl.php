<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:03
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\admin\column_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e936afcc3_70129300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb2aebdb21436a80c5a281e97dcc1d3aa007496' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\admin\\column_settings.tpl',
      1 => 1597031240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:gdz_pagebuilder/views/templates/admin/settings.tpl' => 1,
  ),
),false)) {
function content_5fdc7e936afcc3_70129300 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="column-settings" class="hidden">
    <div class="column-settings">
        <ul role="tablist" class="nav nav-tabs">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column_settings']->value, 'column_setting', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['column_setting']->value) {
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>"><a data-toggle="tab" href="#column-<?php echo $_smarty_tpl->tpl_vars['column_setting']->value['id'];?>
"><i class="gdz-icon-<?php echo $_smarty_tpl->tpl_vars['column_setting']->value['id'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['column_setting']->value['title'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="tab-content">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column_settings']->value, 'setting', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['setting']->value) {
?>
              <?php $_smarty_tpl->_subTemplateRender("module:gdz_pagebuilder/views/templates/admin/settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stype'=>"column"), 0, true);
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
