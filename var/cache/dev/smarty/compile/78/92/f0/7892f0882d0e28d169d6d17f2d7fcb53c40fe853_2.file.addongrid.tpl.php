<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addongrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94cf9721_64557387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7892f0882d0e28d169d6d17f2d7fcb53c40fe853' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addongrid.tpl',
      1 => 1602563744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94cf9721_64557387 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
.grid_column {
    min-height: 50px;
    flex: 1;
    text-align: center;
    border: 1px dashed #888;
    margin: 5px;
}
</style>
  <div class="grid_row row">
      <?php echo '<%';?>
      screen = grid_column.split('-');
      cols = [];
      sm = screen[1].split(',');
      xs = screen[2].split(',');
      screen[0].split(',').forEach(function(col, i) {
        cols.push({
          lg: col,
          sm: sm[i]?sm[i]:12,
          xs: xs[i]?xs[i]:12,
        });
      });
      _.each(cols, function(col, i) { <?php echo '%>';?>
          <div class="col-lg-<?php echo '<%';?>= col.lg <?php echo '%>';?> col-sm-<?php echo '<%';?>= col.sm <?php echo '%>';?> col-xs-<?php echo '<%';?>= col.xs <?php echo '%>';?> grid_column addon-sortable dragenterable" lg="<?php echo '<%';?>= col.lg <?php echo '%>';?>" sm="<?php echo '<%';?>= col.sm <?php echo '%>';?>" xs="<?php echo '<%';?>= col.xs <?php echo '%>';?>">
          </div>
      <?php echo '<%';?> }) <?php echo '%>';?>
  </div>

<?php echo '<%';?>
component = $('#gdz-configuration').data('component');
if(component) {
  $(component).on('update', function() {
    $(component).find('.addon-sortable').sortable({
        scroll: true,
        scrollSensitivity: 100,
        scrollSpeed: 13,
        placeholder: "ui-state-highlight",
        connectWith: ".addon-sortable"
    });
  })
}
<?php echo '%>';
}
}
