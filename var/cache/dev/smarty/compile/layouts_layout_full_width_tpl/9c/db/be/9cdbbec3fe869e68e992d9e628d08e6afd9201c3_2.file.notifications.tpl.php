<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:47:26
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7aae516208_28136120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cdbbec3fe869e68e992d9e628d08e6afd9201c3' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\notifications.tpl',
      1 => 1603707006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7aae516208_28136120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
    <aside id="notifications">
        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7849350985fdc7aae479e07_48569066', 'notifications_error');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4009589125fdc7aae4a0f06_85297737', 'notifications_warning');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9513056585fdc7aae4c8003_91252862', 'notifications_success');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8900908055fdc7aae4ef103_32287013', 'notifications_info');
?>

        <?php }?>
    </aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_7849350985fdc7aae479e07_48569066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_7849350985fdc7aae479e07_48569066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-danger" role="alert" data-alert="danger">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_4009589125fdc7aae4a0f06_85297737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_4009589125fdc7aae4a0f06_85297737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-warning" role="alert" data-alert="warning">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_9513056585fdc7aae4c8003_91252862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_9513056585fdc7aae4c8003_91252862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-success" role="alert" data-alert="success">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_8900908055fdc7aae4ef103_32287013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_8900908055fdc7aae4ef103_32287013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <article class="alert alert-info" role="alert" data-alert="info">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </article>
            <?php
}
}
/* {/block 'notifications_info'} */
}
