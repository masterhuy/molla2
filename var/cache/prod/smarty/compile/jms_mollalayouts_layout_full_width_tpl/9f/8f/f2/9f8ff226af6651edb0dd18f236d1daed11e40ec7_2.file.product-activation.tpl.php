<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:04:13
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaabdc6f034_55791756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f8ff226af6651edb0dd18f236d1daed11e40ec7' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1594026289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaaabdc6f034_55791756 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
          <div class="col-sm-12">            
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
<?php }
}
}
