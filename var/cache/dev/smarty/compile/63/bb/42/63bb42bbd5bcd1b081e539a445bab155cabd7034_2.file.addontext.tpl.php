<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addontext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94f37b24_50536027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63bb42bbd5bcd1b081e539a445bab155cabd7034' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addontext.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94f37b24_50536027 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if (content) { <?php echo '%>';?>
<style type="text/css">
<?php echo '<%';?>
fontsize_arr = [];
if(fontsize) fontsize_arr = fontsize.split("-");
<?php echo '%>';?>
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-text-content {
    font-size: <?php echo '<%';?>= fontsize_arr[0] <?php echo '%>';?>px;
    color:<?php echo '<%';?>= textcolor <?php echo '%>';?>;
    text-align:<?php echo '<%';?>= text_align <?php echo '%>';?>;
}
@media (max-width:991px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-text-content {
      font-size: <?php echo '<%';?>= fontsize_arr[1] <?php echo '%>';?>px;
  }
}
@media (max-width:575px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-text-content {
      font-size: <?php echo '<%';?>= fontsize_arr[2] <?php echo '%>';?>px;
  }
}
</style>
    <div class="pb-text-content"><?php echo '<%';?>= content <?php echo '%>';?></div>
<?php echo '<%';?> } <?php echo '%>';
}
}
