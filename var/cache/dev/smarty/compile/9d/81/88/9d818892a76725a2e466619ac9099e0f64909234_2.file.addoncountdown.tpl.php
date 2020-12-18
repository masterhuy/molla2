<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addoncountdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94cb7093_88351065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d818892a76725a2e466619ac9099e0f64909234' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addoncountdown.tpl',
      1 => 1593217779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94cb7093_88351065 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(expire_time) { <?php echo '%>';?>
<style type="text/css">
<?php echo '<%';?>
fontsize_arr = [];
if(fontsize) fontsize_arr = fontsize.split("-");
<?php echo '%>';?>
#<?php echo '<%';?>= addonid <?php echo '%>';?> .countdown {
    font-size: <?php echo '<%';?>= fontsize_arr[0] <?php echo '%>';?>px;
    color:<?php echo '<%';?>= textcolor <?php echo '%>';?>;
		text-align: <?php echo '<%';?>= text_align <?php echo '%>';?>;
}
@media (max-width:991px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .countdown {
      font-size: <?php echo '<%';?>= fontsize_arr[1] <?php echo '%>';?>px;
  }
}
@media (max-width:575px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .countdown {
      font-size: <?php echo '<%';?>= fontsize_arr[2] <?php echo '%>';?>px;
  }
}
</style>
<div class="pb-countdown<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
<div class="pb-countdown-time countdown">
	<?php echo '<%';?>= expire_time <?php echo '%>';?>
</div>
</div>
<?php echo '<%';?> } <?php echo '%>';
}
}
