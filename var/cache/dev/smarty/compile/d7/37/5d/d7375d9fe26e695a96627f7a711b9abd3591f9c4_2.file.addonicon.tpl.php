<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonicon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94d4b7b1_75304006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7375d9fe26e695a96627f7a711b9abd3591f9c4' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonicon.tpl',
      1 => 1597031240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94d4b7b1_75304006 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .gdz-icon-box {
    text-align: <?php echo '<%';?>= text_align <?php echo '%>';?>;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .gdz-icon-box i {
    font-size:<?php echo '<%';?>= icon_fontsize <?php echo '%>';?>px;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .gdz-icon-box img {
    width:<?php echo '<%';?>= image_width <?php echo '%>';?>%;
}
</style>
<div class="gdz-icon-box<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
		<?php echo '<%';?> if(icon_type == 'image' && image) { <?php echo '%>';?>
			<img src="<?php echo '<%';?>= image <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" />
		<?php echo '<%';?> } else if (icon_class) { <?php echo '%>';?>
			<i class="<?php echo '<%';?>= icon_class <?php echo '%>';?>"></i>
		<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
