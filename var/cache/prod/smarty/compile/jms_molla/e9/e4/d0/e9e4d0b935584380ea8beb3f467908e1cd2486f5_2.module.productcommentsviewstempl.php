<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:04:12
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaabca1d410_33195851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1608716711,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaaabca1d410_33195851 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const $ = jQuery;
        const productId = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
;
        const productReview = $('.product-list-reviews-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
');
        const productCommentGradeUrl = '<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
';

        $.get(productCommentGradeUrl, { id_product: productId }, function(jsonResponse) {
            var jsonData = false;
            try {
                jsonData = JSON.parse(jsonResponse);
            } catch (e) {
        }

        if (jsonData) {
            if (jsonData.id_product && jsonData.comments_nb) {
                $('.grade-stars', productReview).rating({ grade: jsonData.average_grade, starWidth: 16 });
                $('.comments-nb', productReview).html('<span class="ratings-text">( '+jsonData.comments_nb+' <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 )</span>');
                productReview.closest('.thumbnail-container').addClass('has-reviews');
                productReview.removeClass('empty');
            }
        }
    });
  });
<?php echo '</script'; ?>
>
<div id="review">
    <div id="product-list-reviews-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-list-reviews-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
 product-list-reviews empty">
        <div class="grade-stars small-stars"><span class="ratings-text">( 0 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
 )</span></div>
        <div class="comments-nb"></div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
        <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
        <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_grade']->value, ENT_QUOTES, 'UTF-8');?>
" />
    </div>
<?php }
}
}
