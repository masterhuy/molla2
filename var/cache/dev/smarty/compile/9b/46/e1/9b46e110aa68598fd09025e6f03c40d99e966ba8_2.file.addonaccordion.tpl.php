<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonaccordion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94bb5356_01178052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b46e110aa68598fd09025e6f03c40d99e966ba8' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonaccordion.tpl',
      1 => 1592884587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94bb5356_01178052 (Smarty_Internal_Template $_smarty_tpl) {
echo '<%';?> if(accordions.length == 0) { return } <?php echo '%>';?>
<div class="pb-accordion">
    <?php echo '<%';?> var accordion_id = _.random(1000, 9999); <?php echo '%>';?>
    <div class="accordions">
        <?php echo '<%';?> _.forEach(accordions, function(accordion, index) { <?php echo '%>';?>
          <div class="card accordion-item">
            <div class="card-header" id="heading-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>">
              <h5 class="collapsed" data-toggle="collapse" data-target="#acc-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>" aria-expanded="false">
                  <?php echo '<%';?>= accordion.title <?php echo '%>';?>
              </h5>
            </div>
            <div id="acc-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>" class="collapse<?php echo '<%';?> if (index == 0) { <?php echo '%>';?> show<?php echo '<%';?> } <?php echo '%>';?>" aria-labelledby="heading-<?php echo '<%';?>= accordion_id <?php echo '%>';?>-<?php echo '<%';?>= index <?php echo '%>';?>">
              <div class="card-body accordion-content">
                  <?php echo '<%';?>= accordion.content <?php echo '%>';?>
              </div>
            </div>
          </div>
        <?php echo '<%';?> }); <?php echo '%>';?>
    </div>
</div>
<?php }
}
