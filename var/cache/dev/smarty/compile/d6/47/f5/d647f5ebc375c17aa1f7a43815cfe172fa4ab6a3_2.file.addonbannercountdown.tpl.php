<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonbannercountdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94c1eaf3_51427440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd647f5ebc375c17aa1f7a43815cfe172fa4ab6a3' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonbannercountdown.tpl',
      1 => 1600253423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94c1eaf3_51427440 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-banner-countdown<<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner) { <?php echo '%>';?> countdown-has-banner<?php echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> if (banner_link && banner) { <?php echo '%>';?>
<a href="<?php echo '<%';?>= banner_link <?php echo '%>';?>" target="<?php echo '<%';?>= target <?php echo '%>';?>">
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner) { <?php echo '%>';?>
<div class="pb-banner-countdown-img">
		<img src="<?php echo '<%';?>= banner <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" class="img-responsive" />
</div>
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner_link && banner) { <?php echo '%>';?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>
<div class="pb-banner-countdown-text">
	<?php echo '<%';?> if (subtitle) { <?php echo '%>';?><span class="pb-banner-countdown-subtitle"><span><?php echo '<%';?>= subtitle <?php echo '%>';?></span></span><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (title) { <?php echo '%>';?><<?php echo '<%';?>= title_tag <?php echo '%>';?> class="pb-banner-countdown-title"><span><?php echo '<%';?>= title <?php echo '%>';?></span></<?php echo '<%';?>= title_tag <?php echo '%>';?>><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (description) { <?php echo '%>';?><div class="pb-banner-countdown-desc"><span><?php echo '<%';?>= description <?php echo '%>';?></span></div><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (button_text) { <?php echo '%>';?><div><div class="pb-banner-countdown-button btn"><span><?php echo '<%';?>= button_text <?php echo '%>';?></span></div></div><?php echo '<%';?> } <?php echo '%>';?>
</div>
<div class="pb-banner-countdown-time countdown">
	<?php echo '<%';?>= expire_time <?php echo '%>';?>
</div>

</div>
<?php }
}
