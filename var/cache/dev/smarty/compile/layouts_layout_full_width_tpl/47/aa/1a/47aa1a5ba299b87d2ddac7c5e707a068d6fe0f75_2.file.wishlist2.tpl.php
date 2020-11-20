<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:10:03
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\headers\wishlist2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb7338bee7720_13503869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47aa1a5ba299b87d2ddac7c5e707a068d6fe0f75' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\headers\\wishlist2.tpl',
      1 => 1598003792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb7338bee7720_13503869 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="wishlist_block"class="wishlist col-auto">
    <a href="index.php?fc=module&module=gdz_wishlist&controller=mywishlist">
        <i class="icon-heart-o"></i>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlist','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
</div>
<?php }
}
