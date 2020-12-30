<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:13:20
  from 'F:\xampp\htdocs\jms_molla\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaace0d22155_47062534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1d8474e088a2c79f5612f080e45f0011b4be50' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1609214229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_5feaace0d22155_47062534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
