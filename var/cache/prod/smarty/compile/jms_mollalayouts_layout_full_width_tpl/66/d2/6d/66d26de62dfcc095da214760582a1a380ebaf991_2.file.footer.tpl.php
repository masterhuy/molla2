<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:04:14
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaabedaf563_28743673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d26de62dfcc095da214760582a1a380ebaf991' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\footer.tpl',
      1 => 1600939392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaaabedaf563_28743673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_GET['footer_layout']) && $_GET['footer_layout'] != '') {?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_GET['footer_layout']);?>
    <?php $_smarty_tpl->_assignInScope('footer_layout_link', "_partials/footers/footer-".((string)$_GET['footer_layout']).".tpl");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('footer_layout', $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_layout']);?>
    <?php $_smarty_tpl->_assignInScope('footer_layout_link', "_partials/footers/footer-".((string)$_smarty_tpl->tpl_vars['gdzSetting']->value['footer_layout']).".tpl");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14115634455feaaabed88466_83931470', "footer");
?>

<?php }
/* {block "footer"} */
class Block_14115634455feaaabed88466_83931470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14115634455feaaabed88466_83931470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer id="footer" class="footer-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footer_layout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer_layout_link']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </footer>
<?php
}
}
/* {/block "footer"} */
}
