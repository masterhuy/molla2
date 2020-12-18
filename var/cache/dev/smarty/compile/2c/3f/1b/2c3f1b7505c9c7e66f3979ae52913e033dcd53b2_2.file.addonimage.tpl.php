<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonimage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94d5f034_90965546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3f1b7505c9c7e66f3979ae52913e033dcd53b2' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonimage.tpl',
      1 => 1593171431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94d5f034_90965546 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if (image) { <?php echo '%>';?>
<div class="pb-image<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> if (image_link) { <?php echo '%>';?>
<a href="<?php echo '<%';?>= image_link <?php echo '%>';?>" target="<?php echo '<%';?>= target <?php echo '%>';?>">
<?php echo '<%';?> } <?php echo '%>';?>
		<img src="<?php echo '<%';?>= image <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" class="img-responsive" />
<?php echo '<%';?> if (image_link) { <?php echo '%>';?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php echo '<%';?> } <?php echo '%>';
}
}
