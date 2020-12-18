<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonspacer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94ee1c17_98067559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e96751a890c8382db7cd992b3551711b409d939' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonspacer.tpl',
      1 => 1593171497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94ee1c17_98067559 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-spacer-inner {
    height: <?php echo '<%';?>= space_md <?php echo '%>';?>px;
}
@media (max-width:991px) {
    #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-spacer-inner {
        height: <?php echo '<%';?>= space_sm <?php echo '%>';?>px;
    }
}
@media (max-width:575px) {
    #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-spacer-inner {
        height: <?php echo '<%';?>= space_xs <?php echo '%>';?>px;
    }
}
</style>
<div class="pb-spacer<?php echo '<%';?> if (box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
    <div class="pb-spacer-inner"></div>
</div>
<?php }
}
