<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:18:57
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\customer\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaae31e38b67_82441120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db611d87c26e8a582604fa51917f24746f6ff96' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1600656345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5feaae31e38b67_82441120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
    <section>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10279030535feaae31dc3869_40516912', "form_fields");
?>

    </section>
    <footer class="form-footer clearfix">
        <input type="hidden" name="submitCreate" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10720943925feaae31e11a65_22925440', "form_buttons");
?>

    </footer>
</form>
<?php }
/* {block "form_field"} */
class Block_3610204355feaae31dea969_99746579 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_10279030535feaae31dc3869_40516912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_10279030535feaae31dc3869_40516912',
  ),
  'form_field' => 
  array (
    0 => 'Block_3610204355feaae31dea969_99746579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3610204355feaae31dea969_99746579', "form_field", $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_10720943925feaae31e11a65_22925440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_10720943925feaae31e11a65_22925440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-outline-primary-2" data-link-action="save-customer" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
        <?php
}
}
/* {/block "form_buttons"} */
}
