<?php
/* Smarty version 3.1.33, created on 2020-12-18 04:48:09
  from 'F:\xampp\htdocs\jms_molla\themes\jms_molla\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7ad9524bd6_86910148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64a3f32870b019282c429651df8f967bf1c54660' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\themes\\jms_molla\\templates\\_partials\\breadcrumb.tpl',
      1 => 1600423721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7ad9524bd6_86910148 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb-wrapper">
    <div class="breadcrumb page-header text-center">
        <div class="container">
            <h1 class="page-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</h1>
        </div>
    </div>
    <div class="breadcrumb-nav">
        <div class="container">
            <div data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="row align-items-center<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['breadcrumb_seperator']) {?> seperator-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['breadcrumb_seperator'], ENT_QUOTES, 'UTF-8');
}?>">
                <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="<?php if ($_smarty_tpl->tpl_vars['gdzSetting']->value['breadcrumb_align']) {?>align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gdzSetting']->value['breadcrumb_align'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
                        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </a>
                            <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php }
}
