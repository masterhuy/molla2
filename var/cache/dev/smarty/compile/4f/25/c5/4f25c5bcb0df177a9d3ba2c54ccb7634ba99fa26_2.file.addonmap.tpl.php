<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonmap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94db10d0_80235365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f25c5bcb0df177a9d3ba2c54ccb7634ba99fa26' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonmap.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94db10d0_80235365 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if (address) { <?php echo '%>';?>
<style type="text/css">
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-map iframe {
	height:<?php echo '<%';?>= height <?php echo '%>';?>px;
}
</style>
<div class="pb-map">
		<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo '<%';?>= address <?php echo '%>';?>&z=<?php echo '<%';?>= zoom <?php echo '%>';?>&output=embed&iwloc=near"></iframe>
</div>
<?php echo '<%';?> } <?php echo '%>';
}
}
