<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:01:55
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb731a34bdbf4_13566682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a80228d803a2645335bdc53d3d51e877c5dd35b' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\header.tpl',
      1 => 1600939261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/header-mobile-1.tpl' => 1,
    'file:_partials/headers/header-mobile-2.tpl' => 1,
    'file:_partials/headers/header-mobile-3.tpl' => 1,
    'file:_partials/headers/header-mobile-4.tpl' => 1,
  ),
),false)) {
function content_5fb731a34bdbf4_13566682 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_GET['header_layout']) && $_GET['header_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_GET['header_layout']);?>
    <?php $_smarty_tpl->_assignInScope('header_layout_link', "_partials/headers/header-".((string)$_GET['header_layout']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('header_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['header_layout']);?>
    <?php $_smarty_tpl->_assignInScope('header_layout_link', "_partials/headers/header-".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['header_layout']).".tpl");
}?>


<div id="desktop-header" class="header-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['header_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header_layout_link']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<div id="mobile-header" class="header-mobile-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['gdzSetting']->value['header_mobile_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<?php }
}
