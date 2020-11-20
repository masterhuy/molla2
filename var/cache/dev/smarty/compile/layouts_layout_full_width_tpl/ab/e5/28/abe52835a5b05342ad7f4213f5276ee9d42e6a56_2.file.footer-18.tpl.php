<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:45:56
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\footers\footer-18.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb73bf430a134_13096441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abe52835a5b05342ad7f4213f5276ee9d42e6a56' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\footers\\footer-18.tpl',
      1 => 1605597867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/footers/logo.tpl' => 1,
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5fb73bf430a134_13096441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column col-sm-6 col-lg-3">
                <div class="logo-footer">
                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_html'];?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9161390455fb73bf4294e34_80472985', 'hook_footer');
?>

        </div>
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9946773785fb73bf42bbf38_85779437', 'hook_footer_after');
?>

        </div>
    </div>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4436794605fb73bf42e3032_82320594', 'footer-copyright');
?>



<?php }
/* {block 'hook_footer'} */
class Block_9161390455fb73bf4294e34_80472985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_9161390455fb73bf4294e34_80472985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_9946773785fb73bf42bbf38_85779437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_9946773785fb73bf42bbf38_85779437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'footer-copyright'} */
class Block_4436794605fb73bf42e3032_82320594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_4436794605fb73bf42e3032_82320594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <div class="container">
            <div class="row align-items-center">
                <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content']) {?>
                    <div class="col-12 col-lg-6 col-copyright">
                        <?php echo $_smarty_tpl->tpl_vars['gdzSetting']->value['footer_copyright_content'];?>

                    </div>
                <?php }?>
                <div class="col-12 col-lg-6 col-payments">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['footer_payment_image'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payments','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>
"/>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
