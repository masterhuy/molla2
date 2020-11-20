<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:10:04
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\footers\footer-17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb7338c34eb28_61553978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c662fe9914945ffeb4875540d837dd3abe350aa' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\footers\\footer-17.tpl',
      1 => 1604482647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5fb7338c34eb28_61553978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3067721565fb7338c327a25_23038179', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_3067721565fb7338c327a25_23038179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_3067721565fb7338c327a25_23038179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <div class="container">
            <div class="row align-items-center">
                <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) {?>
                    <div class="col-12 col-lg-7">
                        <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content'];?>

                    </div>
                <?php }?>
                <div class="col-12 col-lg-5 text-lg-right">
                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
