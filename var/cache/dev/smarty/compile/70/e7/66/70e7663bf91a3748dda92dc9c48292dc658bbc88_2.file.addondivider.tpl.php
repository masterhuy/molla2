<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addondivider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94cca912_44652693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e7663bf91a3748dda92dc9c48292dc658bbc88' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addondivider.tpl',
      1 => 1593171371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94cca912_44652693 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-divider {
    padding-top:<?php echo '<%';?>= divider_gap <?php echo '%>';?>px;
    padding-bottom:<?php echo '<%';?>= divider_gap <?php echo '%>';?>px;
    text-align:<?php echo '<%';?>= divider_align <?php echo '%>';?>;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-divider-separator {
    border-top-style: <?php echo '<%';?>= divider_style <?php echo '%>';?>;
    border-top-width: <?php echo '<%';?>= divider_weight <?php echo '%>';?>px;
    width: <?php echo '<%';?>= divider_width <?php echo '%>';?>%;
    border-top-color: <?php echo '<%';?>= divider_color <?php echo '%>';?>;
}
</style>
<div class="pb-divider<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
  <span class="pb-divider-separator"></span>
</div>
<?php }
}
