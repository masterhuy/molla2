<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonheading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94d10e20_56674460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '584006a4084d5ca541314f095b962e3faf4ae94d' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonheading.tpl',
      1 => 1594006865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94d10e20_56674460 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if (heading) { <?php echo '%>';?>
<style type="text/css">
<?php echo '<%';?>
fontsize_arr = [];
if(fontsize) fontsize_arr = fontsize.split("-");
<?php echo '%>';?>
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-heading {
    font-size: <?php echo '<%';?>= fontsize_arr[0] <?php echo '%>';?>px;
    color:<?php echo '<%';?>= headingcolor <?php echo '%>';?>;
		text-align: <?php echo '<%';?>= text_align <?php echo '%>';?>;
}
@media (max-width:991px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-heading {
      font-size: <?php echo '<%';?>= fontsize_arr[1] <?php echo '%>';?>px;
  }
}
@media (max-width:575px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-heading {
      font-size: <?php echo '<%';?>= fontsize_arr[2] <?php echo '%>';?>px;
  }
}
</style>
<<?php echo '<%';?>= heading_tag <?php echo '%>';?> class="pb-heading<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
	<?php echo '<%';?>= heading <?php echo '%>';?>
</<?php echo '<%';?>= heading_tag <?php echo '%>';?>>
<?php echo '<%';?> } else { <?php echo '%>';?>
  dfdfdfdf
<?php echo '<%';?> } <?php echo '%>';
}
}
