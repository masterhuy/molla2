<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addontab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94ef5496_53886105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '053b45202ba9e48b507adeaa7d5088022c2e5a5a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addontab.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94ef5496_53886105 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(tabs.length == 0) { return } <?php echo '%>';
echo '<%';?> var tab_id = _.random(1000, 9999); <?php echo '%>';?>
<div class="pb-tabs">
    <ul class="nav nav-tabs" id="tab-<?php echo '<%';?>= tab_id <?php echo '%>';?>">
    <?php echo '<%';?> _.forEach(tabs, function(tab, index) { <?php echo '%>';?>
      <li class="nav-item">
          <a class="nav-link <?php echo '<%';?> if (index == 0) { <?php echo '%>';?> active<?php echo '<%';?> } <?php echo '%>';?>" data-toggle="tab" href="#tab-<?php echo '<%';?>= tab_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>" role="tab" aria-controls="<?php echo '<%';?>= tab.title <?php echo '%>';?>"><?php echo '<%';?>= tab.title <?php echo '%>';?></a>
      </li>
    <?php echo '<%';?> }); <?php echo '%>';?>
    </ul>
    <div class="tab-content" id="tabcontent-<?php echo '<%';?>= tab_id <?php echo '%>';?>">
    <?php echo '<%';?> _.forEach(tabs, function(tab, index) { <?php echo '%>';?>
      <div class="tab-pane <?php echo '<%';?> if (index == 0) { <?php echo '%>';?>fade show active<?php echo '<%';?> } <?php echo '%>';?>" id="tab-<?php echo '<%';?>= tab_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>" role="tabpanel">
        <?php echo '<%';?>= tab.content <?php echo '%>';?>
      </div>
    <?php echo '<%';?> }); <?php echo '%>';?>
    </div>
</div>
<?php }
}
