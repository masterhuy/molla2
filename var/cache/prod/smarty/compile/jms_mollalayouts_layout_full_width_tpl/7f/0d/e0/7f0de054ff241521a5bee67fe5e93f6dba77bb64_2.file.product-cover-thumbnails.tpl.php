<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:23:14
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaf32a3efb6_96110528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f0de054ff241521a5bee67fe5e93f6dba77bb64' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1606728768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails-gallery.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-left.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-right.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-vertical.tpl' => 1,
    'file:catalog/_partials/product-cover-thumbnails-bottom.tpl' => 1,
  ),
),false)) {
function content_5feaaf32a3efb6_96110528 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['product_content_layout']) && $_GET['product_content_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('product_content_layout', $_GET['product_content_layout']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('product_content_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['product_content_layout']);
}
if ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-gallery') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-left') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == 'thumbs-right') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['product_content_layout']->value == '3-columns' || $_smarty_tpl->tpl_vars['product_content_layout']->value == 'sticky-info') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-vertical.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
