<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:48:10
  from 'F:\xampp\htdocs\jms_molla\admin141dyjvta\themes\default\template\helpers\modules_list\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7ada8801f7_70297186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d04eb6f1cacb72ec8ea799e4d84af926b8be70' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\admin141dyjvta\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1591673246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7ada8801f7_70297186 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
