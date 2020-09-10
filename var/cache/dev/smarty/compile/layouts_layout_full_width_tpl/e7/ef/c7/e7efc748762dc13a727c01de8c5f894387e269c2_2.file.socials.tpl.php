<?php
/* Smarty version 3.1.33, created on 2020-09-09 17:28:46
  from 'D:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\socials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f58ae5e474e61_19965254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7efc748762dc13a727c01de8c5f894387e269c2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\socials.tpl',
      1 => 1595402149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f58ae5e474e61_19965254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13569764475f58ae5e44dd68_56739388', 'footer-social');
?>

<?php }
/* {block 'footer-social'} */
class Block_13569764475f58ae5e44dd68_56739388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-social' => 
  array (
    0 => 'Block_13569764475f58ae5e44dd68_56739388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<span class="social-label">Social Media</span>
<ul id="social-links" class="social-links">
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook'] != '') {?>
        <li class="facebook">
            <a class="social-icon social-facebook" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-facebook-f" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter'] != '') {?>
        <li class="twitter">
            <a class="social-icon social-twitter" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-twitter" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus'] != '') {?>
        <li class="google-plus">
            <a class="social-icon social-google" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_gplus'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-google" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram'] != '') {?>
        <li class="instagram">
            <a class="social-icon social-instagram" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-instagram" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube'] != '') {?>
        <li class="youtube">
            <a class="social-icon social-youtube" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-youtube" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest'] != '') {?>
        <li class="pinterest">
            <a class="social-icon social-pinterest" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-pinterest" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo'] != '') {?>
        <li class="vimeo">
            <a class="social-icon social-vimeo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-vimeo" ></i></a>
        </li>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin']) && $_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin'] != '') {?>
        <li class="linkedin">
            <a class="social-icon social-linkedin" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['social_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="icon-linkedin" ></i></a>
        </li>
    <?php }?>
</ul>
<?php
}
}
/* {/block 'footer-social'} */
}
