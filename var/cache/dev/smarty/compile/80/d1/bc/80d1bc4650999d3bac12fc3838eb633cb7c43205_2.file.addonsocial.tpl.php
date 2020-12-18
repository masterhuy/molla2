<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonsocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94ece394_22266633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d1bc4650999d3bac12fc3838eb633cb7c43205' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonsocial.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94ece394_22266633 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(socials.length == 0) { return } <?php echo '%>';?>
<div class="pb-social">
		<div class="pb-social-container pb-social-<?php echo '<%';?>= icon_shape <?php echo '%>';?> pb-social-<?php echo '<%';?>= icon_align <?php echo '%>';?>">
			<?php echo '<%';?> _.forEach(socials, function(social, index) { <?php echo '%>';?>
					<a class="pb-social-box" href="<?php echo '<%';?>= social.link <?php echo '%>';?>"><i class="<?php echo '<%';?>= social.icon_class <?php echo '%>';?>"></i></a>
			<?php echo '<%';?> }); <?php echo '%>';?>
    </div>
</div>
<?php }
}
