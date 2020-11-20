<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:01:54
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb731a2d1a5e3_19220574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa6b66283207c0ef30860546ef2b0e16b3b06275' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\page.tpl',
      1 => 1592884694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb731a2d1a5e3_19220574 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6195362185fb731a2c570e2_21925218', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_17191267935fb731a2ca52e3_94024509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8370117625fb731a2ccc3e4_03857382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Page content -->
                <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17139427755fb731a2c7e1e9_70047388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17191267935fb731a2ca52e3_94024509', 'page_content_top', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8370117625fb731a2ccc3e4_03857382', 'page_content', $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_4060517335fb731a2cf34e9_61881676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_6195362185fb731a2c570e2_21925218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6195362185fb731a2c570e2_21925218',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17139427755fb731a2c7e1e9_70047388',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17191267935fb731a2ca52e3_94024509',
  ),
  'page_content' => 
  array (
    0 => 'Block_8370117625fb731a2ccc3e4_03857382',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4060517335fb731a2cf34e9_61881676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17139427755fb731a2c7e1e9_70047388', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4060517335fb731a2cf34e9_61881676', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
