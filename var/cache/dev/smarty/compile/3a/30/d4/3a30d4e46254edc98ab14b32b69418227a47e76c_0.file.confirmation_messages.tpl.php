<?php
/* Smarty version 3.1.33, created on 2020-11-20 04:21:05
  from 'F:\xampp\htdocs\jms_molla\admin141dyjvta\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb78a819c9114_50620695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a30d4e46254edc98ab14b32b69418227a47e76c' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\admin141dyjvta\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1591673257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb78a819c9114_50620695 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
