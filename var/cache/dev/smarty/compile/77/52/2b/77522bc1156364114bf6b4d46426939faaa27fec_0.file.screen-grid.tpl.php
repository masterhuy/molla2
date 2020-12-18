<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:03
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\ui\screen-grid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e93154b37_78902551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77522bc1156364114bf6b4d46426939faaa27fec' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\ui\\screen-grid.tpl',
      1 => 1602476151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e93154b37_78902551 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="pb-device-tabs pb-device-md">
    <li class="screen-md"><i class="icon-desktop icon-md"></i></li>
    <li class="screen-sm"><i class="icon-tablet icon-sm"></i></li>
    <li class="screen-xs"><i class="icon-mobile icon-xs"></i></li>
</ul>
<div class="pb-screen-inputs pb-device-md">
    <div class="pb-range-input md">
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['values']->value[0];?>
">
    </div>
    <div class="pb-range-input sm">
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['values']->value[1];?>
">
    </div>
    <div class="pb-range-input xs">
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['values']->value[2];?>
">
    </div>
</div>
<input name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" type="hidden" class="addon-input" data-type="<?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
" data-attrname="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['default'];?>
"><?php }
}
