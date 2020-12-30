<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:04:11
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaabbdedd01_22990291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1606964127,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaaabbdedd01_22990291 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="email_subscription block block_newsletter">
	<h2 class="widget-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for email & get 25% off','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</h2>
	<p class="widget-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcribe to get information about products and coupons','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</p>
	<div class="block-content">
	  	<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
	    	<div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-error<?php } else { ?>alert-success<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>
</div>
	  	<?php }?>
	  	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" method="post">
			<div class="input-group newsletter-input-group">
	    		<input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" required class="form-control" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Email Address','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
" />
	    		<button type="submit" class="btn btn-popup newsletter-button align-items-center" name="submitNewsletter">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>

				</button>
				<button class="btn btn-primary btn-submit" type="submit" id="newsletter-btn" name="submitNewsletter">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</span>
					<i class="icon-long-arrow-right"></i>
				</button>
			</div>
	    	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

	    	<input type="hidden" name="action" value="0" />
	  	</form>
	</div>
</div>

<?php }
}
