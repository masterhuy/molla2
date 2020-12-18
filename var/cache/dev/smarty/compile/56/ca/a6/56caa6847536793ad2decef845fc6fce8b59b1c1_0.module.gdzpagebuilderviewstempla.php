<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:03
  from 'module:gdzpagebuilderviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e9379a2c8_68460494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56caa6847536793ad2decef845fc6fce8b59b1c1' => 
    array (
      0 => 'module:gdzpagebuilderviewstempla',
      1 => 1605889393,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e9379a2c8_68460494 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/replace_url.tpl --><div class="pagebuilder-dialog" id="pagebuilder-replace-url" style="display: none;">
    <div class="pagebuilder-dialog-content" style="top: 70px;">
        <div class="pagebuilder-dialog-content-wrapper">
            <div class="pagebuilder-dialog-header">
                <div class="pagebuilder-dialog-header-left pull-left">
                    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Replace Url','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</h3>
                </div>
                <div class="pagebuilder-dialog-header-right pull-right">

                    <div class="pagebuilder-dialog-close pagebuilder-dialog-element">
                        <i class="feather feather-x"></i>
                    </div>
                </div>
            </div>
            <div class="pagebuilder-dialog-body">
                <form id="pagebuilder-replace-template-form" class="pagebuilder-template-form">
                    <div class="form-desc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter old + new Url to Replace','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
.</div>
                    <div class="form-content">
                        <input id="replace-old-url" name="old_url" class="pagebuilder-dialog-input" placeholder="Enter old Url" required="">
                        <input id="replace-new-url" name="new_url" class="pagebuilder-dialog-input" placeholder="Enter new Url" required="">
                        <button id="replace-url-btn" class="pagebuilder-dialog-btn"><span class="elementor-state-icon"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Replace','mod'=>'gdz_pagebuilder'),$_smarty_tpl ) );?>
</button>
                    </div>
                    <div class="pagebuilder-dialog-checkbox">
                        <input type="checkbox" name="all_pages" id="replace-all-pages" value="1" />Replace in all pages
                    </div>
              	</form>
            </div>
        </div>
    </div>
</div>
<!-- end F:\xampp\htdocs\jms_molla/modules/gdz_pagebuilder/views/templates/admin/replace_url.tpl --><?php }
}
