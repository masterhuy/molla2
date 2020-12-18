<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:47:25
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\headers\wishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7aade32240_59890880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98363048f9356292e8cb2acef6d934461d86c05' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\headers\\wishlist.tpl',
      1 => 1603357064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7aade32240_59890880 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="wishlist_block"class="wishlist col-auto">
    <a href="index.php?fc=module&module=gdz_wishlist&controller=mywishlist">
        <i class="icon-heart-o"></i>
        <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </a>
</div>
<?php }
}
