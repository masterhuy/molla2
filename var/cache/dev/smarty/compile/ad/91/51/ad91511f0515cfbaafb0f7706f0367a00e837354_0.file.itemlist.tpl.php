<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:06:16
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_megamenu\views\templates\admin\gdzmegamenu_manager\itemlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7f18408023_47802784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad91511f0515cfbaafb0f7706f0367a00e837354' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_megamenu\\views\\templates\\admin\\gdzmegamenu_manager\\itemlist.tpl',
      1 => 1597980553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7f18408023_47802784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="note">
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Drap &amp; Drop Menu Item to Change Order.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use Collapse tool to Collapse Menu. It will be easy when change order.</p>
	<p class="col-lg-6 pull-left"><i class="icon-info"></i> Use Checkbox and Tools On right Side when want to Change State/Remove more items.</p>
	<p class="col-lg-6 pull-right"><i class="icon-info"></i>Use <strong>Collapse All</strong> and <strong>Check All</strong> When you want Collapse all item and check to all checkbox.</p>
</div>
<div class="row">
		<div class="col-md-4 col-lg-4">
				<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager'),'html','UTF-8' ));?>
&configure=gdz_megamenu" method="post" class="gdz-config">
					<h3>
			      <i class="icon-edit"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select a menu to edit','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>

			    </h3>
					<div class="form-group row">
						<select id="select-menu-to-edit" name="menu_id" class="form-control">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['menu']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'] == $_smarty_tpl->tpl_vars['menu']->value['menu_id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<button class="btn btn-success" name="selectMenu" id="btn-select-menu" value="1" type="submit">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>

						</button>
						<a href="#" id="add-menu" class="pull-right"><i class="material-icons ps-togglable-row grid-toggler-icon-valid">add</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create New Menu','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>
</a>
					</div>
				</form>
				<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager'),'html','UTF-8' ));?>
&configure=gdz_megamenu" method="post" id="add-menu-form" class="gdz-config" style="display:none;">
					<h3>
						<i class="icon-plus"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add New Menu','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>

					</h3>
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu Name','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>
:</label>
						<input type="textbox" name="name" value="" class="form-control" />
						<button class="btn btn-success" name="addMenu" id="btn-add-menu" value="1" type="submit">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>

						</button>
				</form>
				<?php if ($_smarty_tpl->tpl_vars['selected_menu']->value) {?>
				<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager'),'html','UTF-8' ));?>
&configure=gdz_megamenu" class="gdz-config" method="post">
						<h3>
							<i class="icon-edit"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Menu','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>

						</h3>
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu Name','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>
:</label>
						<input type="textbox" name="name" value="<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['name'];?>
" class="form-control" />
						<input type="hidden" name="menu_id" value="<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'];?>
" />
						<button class="btn btn-success" name="editMenu" id="btn-edit-menu" value="1" type="submit">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>

						</button>
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager'),'html','UTF-8' ));?>
&configure=gdz_megamenu&deleteMenu&menu_id=<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'];?>
" data-confirm="Are you sure to delete this item ?" class="delete-link pull-right"><i class="material-icons grid-toggler-icon-not-valid">delete</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete Menu','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>
</a>  <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuStyle'),'html','UTF-8' ));?>
&configure=gdz_megamenu&menu_id=<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'];?>
" class="pull-right"><i class="material-icons">star_half</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu Style','mod'=>'gdz_megamenu'),$_smarty_tpl ) );?>
</a>
				</form>
				<?php }?>
		</div>
		<div class="col-md-8 col-lg-8 item-list">
			<h3>
			  <i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu Items','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );?>

				<span class="pull-right check-all">
					<input type="checkbox" onclick="checkAll(this)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check All','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );?>
" value="" name="checkall-toggle">&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check / UnCheck All','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );?>

				</span>
				<span class="collapse-expand-all pull-right">
					<i class="material-icons ">remove</i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Collapse / Expand All','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );?>

				</span>
			</h3>
			<form name="adminForm" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager');?>
&configure=gdz_megamenu" method="post">
				<div class="menus_container">
				<ul id="menus">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuitems']->value, 'menuitem', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['menuitem']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('n', intval($_smarty_tpl->tpl_vars['k']->value)+1);?>
						<?php if ($_smarty_tpl->tpl_vars['n']->value >= count($_smarty_tpl->tpl_vars['menuitems']->value)) {?>
							<?php $_smarty_tpl->_assignInScope('nextitem', NULL);?>

						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('nextitem', $_smarty_tpl->tpl_vars['menuitems']->value[$_smarty_tpl->tpl_vars['n']->value]);?>
						<?php }?>
						<li id="menus_<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mitem_id'];?>
" class="menu-item lvl<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['level'];?>
">
							<div class="menu-item-bar">
									<div class="menu-item-handle">
										<input type="checkbox" class="gdz-checkbox" title="Checkbox" onclick="isChecked(this);" value="<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mitem_id'];?>
" name="cid[]" id="cb<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
										<span class="menu-item-title"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['name'];?>
</span>
										<div class="btn-group-action pull-right">
											<a class="btn label-tooltip" data-toggle="tooltip" data-placement="top" onclick="cStatus('cb<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager');?>
&configure=gdz_megamenu&menu_id=<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'];?>
',<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['active']) {?>0<?php } else { ?>1<?php }?>)" title="<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['active']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unactive','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );
}?>">
												<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['active']) {?>
														<i class="material-icons ps-togglable-row grid-toggler-icon-valid">check</i>
												<?php } else { ?>
														<i class="material-icons ps-togglable-row grid-toggler-icon-not-valid">clear</i>
												<?php }?>
											</a>
											<a class="btn label-tooltip" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );?>
"
												href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager');?>
&configure=gdz_megamenu&editItem&menu_id=<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'];?>
&mitem_id=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['mitem_id'];?>
" title="Edit">
												<i class="material-icons">edit</i>
											</a>
											<a class="btn label-tooltip" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );?>
"
												onclick="cRemove('cb<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGdzmegamenuManager');?>
&configure=gdz_megamenu&menu_id=<?php echo $_smarty_tpl->tpl_vars['selected_menu']->value['menu_id'];?>
')">
													<i class="material-icons">delete</i>
											</a>
										</div>
										<span class="item-type pull-right"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['type'];?>
</span>
									</div>
									<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['level'] < $_smarty_tpl->tpl_vars['nextitem']->value['level']) {?>
									<div class="button-expand">
											<a class="collapse-expand" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Collapse / Expand','d'=>'.Modules.GdzMegamenu'),$_smarty_tpl ) );?>
">
												<i class="material-icons">remove</i>
											</a>
									</div>
									<?php }?>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['level'] < $_smarty_tpl->tpl_vars['nextitem']->value['level']) {?>
								<ul class="gdz-submenu gdz-submenu<?php echo $_smarty_tpl->tpl_vars['nextitem']->value['level'];?>
">
							<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['level'] > $_smarty_tpl->tpl_vars['nextitem']->value['level']) {?>
								<?php if ($_smarty_tpl->tpl_vars['menuitem']->value['level']-$_smarty_tpl->tpl_vars['nextitem']->value['level'] == 1) {?>
							</li></ul>
								<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['level']-$_smarty_tpl->tpl_vars['nextitem']->value['level'] == 2) {?>
							</ul></li></ul>
								<?php } elseif ($_smarty_tpl->tpl_vars['menuitem']->value['level']-$_smarty_tpl->tpl_vars['nextitem']->value['level'] == 3) {?>
							</li></ul></li></ul>
								<?php }?>
							<?php } else { ?>
								</li>
							<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				</div>
				<input type="hidden" name="task" value="" />
				<input type="hidden" value="" name="boxchecked">
			</form>
		</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
$('ul#menus').sortable( {
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/gdz_megamenu/ajax_gdz_megamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.gdz-submenu1').sortable( {
	forceHelperSize: true,
	forcePlaceholderSize: true,
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/gdz_megamenu/ajax_gdz_megamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.gdz-submenu2').sortable( {
	forceHelperSize: true,
	forcePlaceholderSize: true,
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/gdz_megamenu/ajax_gdz_megamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
$('.gdz-submenu3').sortable( {
	connectWith: '.gdz-submenu',
	containment: 'parent',
	forceHelperSize: true,
	forcePlaceholderSize: true,
	placeholder: 'placeholder',
	handle:".lvl3",
	update: function() {
		var order = $(this).sortable("serialize") + '&action=updateMenuOrdering';
		$.post("<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/gdz_megamenu/ajax_gdz_megamenu.php", order);
	},
	stop: function( event, ui ) {
		showSuccessMessage("Order Saved!");
	}
});
<?php echo '</script'; ?>
>
<?php }
}
