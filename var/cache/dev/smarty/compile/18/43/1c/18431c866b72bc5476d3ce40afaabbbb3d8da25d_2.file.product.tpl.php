<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:01:53
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb731a1e79ed4_83545049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18431c866b72bc5476d3ce40afaabbbb3d8da25d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1596438915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb731a1e79ed4_83545049 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['productbox_type']) && $_GET['productbox_type'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_GET['productbox_type']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('productbox', "catalog/_partials/miniatures/".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['productbox_type']).".tpl");
}
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['productbox']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
}
}
