<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:01:55
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb731a3d3d8c0_38448255',
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
function content_5fb731a3d3d8c0_38448255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
    <aside id="notifications">
        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10746830445fb731a3ca14c6_83094094', 'notifications_error');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13309408635fb731a3cc85c8_59646684', 'notifications_warning');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12865518445fb731a3cef6c7_79374545', 'notifications_success');
?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9884407455fb731a3d167c6_70999484', 'notifications_info');
?>

        <?php }?>
    </aside>
<?php }
}
/* {block 'notifications_error'} */
class Block_10746830445fb731a3ca14c6_83094094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_10746830445fb731a3ca14c6_83094094',
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
class Block_13309408635fb731a3cc85c8_59646684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_13309408635fb731a3cc85c8_59646684',
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
class Block_12865518445fb731a3cef6c7_79374545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_12865518445fb731a3cef6c7_79374545',
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
class Block_9884407455fb731a3d167c6_70999484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_9884407455fb731a3d167c6_70999484',
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
