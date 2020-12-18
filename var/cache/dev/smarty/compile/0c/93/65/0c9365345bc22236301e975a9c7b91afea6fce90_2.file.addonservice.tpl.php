<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonservice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94ea7282_30424185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9365345bc22236301e975a9c7b91afea6fce90' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonservice.tpl',
      1 => 1599639744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94ea7282_30424185 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-service-box {
    text-align: <?php echo '<%';?>= text_align <?php echo '%>';?>;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-service-icon i {
    font-size:<?php echo '<%';?>= icon_fontsize <?php echo '%>';?>px;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-service-icon img {
    width:<?php echo '<%';?>= image_width <?php echo '%>';?>%;
}
</style>
<div class="pb-service-box<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
		<div class="pb-service-icon">
		<?php echo '<%';?> if(icon_type == 'image' && image) { <?php echo '%>';?>
			<img src="<?php echo '<%';?>= image <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" />
		<?php echo '<%';?> } else if (icon_class) { <?php echo '%>';?>
			<i class="<?php echo '<%';?>= icon_class <?php echo '%>';?>"></i>
		<?php echo '<%';?> } <?php echo '%>';?>
		</div>
		<div class="pb-service-content">
				<?php echo '<%';?> if(title) { <?php echo '%>';?>
				<<?php echo '<%';?>= title_tag <?php echo '%>';?> class="pb-service-title"><?php echo '<%';?>= title <?php echo '%>';?></<?php echo '<%';?>= title_tag <?php echo '%>';?>>
				<?php echo '<%';?> } <?php echo '%>';?>
				<?php echo '<%';?> if(description) { <?php echo '%>';?>
				<div class="pb-service-description">
				<?php echo '<%';?>= description <?php echo '%>';?>
				</div>
				<?php echo '<%';?> } <?php echo '%>';?>
				<?php echo '<%';?> if(button_text) { <?php echo '%>';?>
				<a class="pb-service-button btn" href="<?php echo '<%';?> if(button_link) { <?php echo '%>';
echo '<%';?>= button_link <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>"<?php echo '<%';?> if(target == '_blank') { <?php echo '%>';?> target="_blank"<?php echo '<%';?> } <?php echo '%>';?>><?php echo '<%';?>= button_text <?php echo '%>';?></a>
				<?php echo '<%';?> } <?php echo '%>';?>
		</div>
</div>
<?php }
}
