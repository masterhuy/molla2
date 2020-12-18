<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94bcca67_47201899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e74391f94a2341631a7b6eafbde8c21542f1a78' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonalert.tpl',
      1 => 1593171292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94bcca67_47201899 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php echo '<%';?>= alert_type <?php echo '%>';
echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
	<?php echo '<%';?>= alert_message <?php echo '%>';?>
	<?php echo '<%';?> if( show_close_btn == "1"){ <?php echo '%>';?>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
