<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94c74a04_74573423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af530c3ecaba5b6c0dc592f216ed85481956304' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonbutton.tpl',
      1 => 1593171343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94c74a04_74573423 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pb-button<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if(button_align) { <?php echo '%>';?> pb-button-<?php echo '<%';?>= button_align <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> if (button_text) { <?php echo '%>';?>
<a class="btn<?php echo '<%';?> if(button_size) { <?php echo '%>';?> btn-<?php echo '<%';?>= button_size <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if(button_style) { <?php echo '%>';?> btn-<?php echo '<%';?>= button_style <?php echo '%>';
echo '<%';?> } <?php echo '%>';
echo '<%';?> if(button_align) { <?php echo '%>';?> btn-<?php echo '<%';?>= button_align <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>" href="<?php echo '<%';?> if(button_link) { <?php echo '%>';
echo '<%';?>= button_link <?php echo '%>';
echo '<%';?> } else { <?php echo '%>';?>#<?php echo '<%';?> } <?php echo '%>';?>" target="<?php echo '<%';?>= target <?php echo '%>';?>">
	<?php echo '<%';?>= button_text <?php echo '%>';?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
