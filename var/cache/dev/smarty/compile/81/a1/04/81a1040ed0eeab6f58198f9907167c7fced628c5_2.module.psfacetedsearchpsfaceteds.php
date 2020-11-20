<?php
/* Smarty version 3.1.33, created on 2020-11-19 22:01:55
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb731a3db2bc2_03502000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1605154946,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb731a3db2bc2_03502000 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
    <div id="search_filters_wrapper">
        <div id="search_filter_controls">
            <span id="_mobile_search_filters_clear_all"></span>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

    </div>
<?php }?>
<!-- end F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
