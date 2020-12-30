<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:23:15
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaf3333a1c1_02732215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1602140242,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaaf3333a1c1_02732215 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-comment-list-item row" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
    <div class="col-auto comment-infos">
        <div class="comment-author">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By %1$s','sprintf'=>array('@CUSTOMER_NAME@'),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

        </div>
        <div class="grade-stars"></div>
        <div class="comment-date">
            @COMMENT_DATE@
        </div>
    </div>

    <div class="col comment-content">
        <h4>@COMMENT_TITLE@</h4>
        <p>@COMMENT_COMMENT@</p>
        <div class="comment-buttons btn-group">
            <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
                <a class="useful-review">
                    <i class="icon-thumbs-up"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Helpful','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

                    <span class="useful-review-value">(@COMMENT_USEFUL_ADVICES@)</span>
                </a>
                <a class="not-useful-review">
                    <i class="icon-thumbs-down"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unhelpful','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

                    <span class="not-useful-review-value">(@COMMENT_NOT_USEFUL_ADVICES@)</span>
                </a>
            <?php }?>
            <a class="report-abuse" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
                <i class="fa fa-flag"></i>
            </a>
        </div>
    </div>
</div>
<?php }
}
