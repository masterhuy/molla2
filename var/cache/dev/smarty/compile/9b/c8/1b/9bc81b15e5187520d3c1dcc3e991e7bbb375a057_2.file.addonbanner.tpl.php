<?php
/* Smarty version 3.1.33, created on 2020-12-18 05:04:04
  from 'F:\xampp\htdocs\jms_molla\modules\gdz_pagebuilder\views\templates\hook\template\addonbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fdc7e94bfb866_47133276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc81b15e5187520d3c1dcc3e991e7bbb375a057' => 
    array (
      0 => 'F:\\xampp\\htdocs\\jms_molla\\modules\\gdz_pagebuilder\\views\\templates\\hook\\template\\addonbanner.tpl',
      1 => 1606461853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc7e94bfb866_47133276 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
<?php echo '<%';?>
v_offset_arr = [];
if(v_offset) v_offset_arr = v_offset.split("-");
h_offset_arr = [];
if(h_offset) h_offset_arr = h_offset.split("-");
v_direct = 'top';
if(content_position.includes('bottom')) v_direct = 'bottom';
h_direct = 'right';
if(content_position.includes('left')) h_direct = 'left';
st_size = [];
if(subtitle_fontsize) st_size = subtitle_fontsize.split("-");
st_lineheight = [];
if(subtitle_lineheight) st_lineheight = subtitle_lineheight.split("-");
t_size = [];
if(title_fontsize) t_size = title_fontsize.split("-");
t_lineheight = [];
if(title_lineheight) t_lineheight = title_lineheight.split("-");
d_size = [];
if(description_fontsize) d_size = description_fontsize.split("-");
d_lineheight = [];
if(description_lineheight) d_lineheight = description_lineheight.split("-");
<?php echo '%>';?>
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-text {
    <?php echo '<%';?>= v_direct <?php echo '%>';?>: <?php echo '<%';?>= v_offset_arr[0] <?php echo '%>';?>px;
		<?php echo '<%';?>= h_direct <?php echo '%>';?>: <?php echo '<%';?>= h_offset_arr[0] <?php echo '%>';?>px;
		text-align: <?php echo '<%';?>= text_align <?php echo '%>';?>;
    <?php echo '<%';?> if (v_direct == 'left') { <?php echo '%>';?>
      right:auto;
    <?php echo '<%';?> } else { <?php echo '%>';?>
      left:auto;
    <?php echo '<%';?> } <?php echo '%>';?>
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-subtitle {
    font-size: <?php echo '<%';?>= st_size[0] <?php echo '%>';?>px;
    line-height: <?php echo '<%';?>= st_lineheight[0] <?php echo '%>';?>px;
    color: <?php echo '<%';?>= subtitle_color <?php echo '%>';?>;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-title {
    font-size: <?php echo '<%';?>= t_size[0] <?php echo '%>';?>px;
    line-height: <?php echo '<%';?>= t_lineheight[0] <?php echo '%>';?>px;
    color: <?php echo '<%';?>= title_color <?php echo '%>';?>;
}
#<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-desc {
    font-size: <?php echo '<%';?>= d_size[0] <?php echo '%>';?>px;
    line-height: <?php echo '<%';?>= d_lineheight[0] <?php echo '%>';?>px;
    color: <?php echo '<%';?>= description_color <?php echo '%>';?>;
}
@media (max-width:991px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-text {
      <?php echo '<%';?>= v_direct <?php echo '%>';?>: <?php echo '<%';?>= v_offset_arr[1] <?php echo '%>';?>px;
			<?php echo '<%';?>= h_direct <?php echo '%>';?>: <?php echo '<%';?>= h_offset_arr[1] <?php echo '%>';?>px;
  }
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-subtitle {
      font-size: <?php echo '<%';?>= st_size[1] <?php echo '%>';?>px;
      line-height: <?php echo '<%';?>= st_lineheight[1] <?php echo '%>';?>px;
  }
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-title {
      font-size: <?php echo '<%';?>= t_size[1] <?php echo '%>';?>px;
      line-height: <?php echo '<%';?>= t_lineheight[1] <?php echo '%>';?>px;
  }
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-desc {
      font-size: <?php echo '<%';?>= d_size[1] <?php echo '%>';?>px;
      line-height: <?php echo '<%';?>= d_lineheight[1] <?php echo '%>';?>px;
  }
}
@media (max-width:575px) {
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-text {
      <?php echo '<%';?>= v_direct <?php echo '%>';?>: <?php echo '<%';?>= v_offset_arr[2] <?php echo '%>';?>px;
			<?php echo '<%';?>= h_direct <?php echo '%>';?>: <?php echo '<%';?>= h_offset_arr[2] <?php echo '%>';?>px;
  }
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-subtitle {
      font-size: <?php echo '<%';?>= st_size[2] <?php echo '%>';?>px;
      line-height: <?php echo '<%';?>= st_lineheight[2] <?php echo '%>';?>px;
  }
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-title {
      font-size: <?php echo '<%';?>= t_size[2] <?php echo '%>';?>px;
      line-height: <?php echo '<%';?>= t_lineheight[2] <?php echo '%>';?>px;
  }
  #<?php echo '<%';?>= addonid <?php echo '%>';?> .pb-banner-desc {
      font-size: <?php echo '<%';?>= d_size[2] <?php echo '%>';?>px;
      line-height: <?php echo '<%';?>= d_lineheight[2] <?php echo '%>';?>px;
  }
}
</style>
<div class="pb-banner<?php echo '<%';?> if(box_class) { <?php echo '%>';?> <?php echo '<%';?>= box_class <?php echo '%>';
echo '<%';?> } <?php echo '%>';?>">
<?php echo '<%';?> if (banner_link) { <?php echo '%>';?>
<a href="<?php echo '<%';?>= banner_link <?php echo '%>';?>" target="<?php echo '<%';?>= target <?php echo '%>';?>">
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner) { <?php echo '%>';?>
<div class="pb-banner-img">
		<img src="<?php echo '<%';?>= banner <?php echo '%>';?>" alt="<?php echo '<%';?>= alt_text <?php echo '%>';?>" class="img-responsive" />
</div>
<div class="pb-banner-text pb-banner-<?php echo '<%';?>= content_position <?php echo '%>';?>">
	<?php echo '<%';?> if (subtitle) { <?php echo '%>';?><span class="pb-banner-subtitle"><?php echo '<%';?>= subtitle <?php echo '%>';?></span><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (title) { <?php echo '%>';?><<?php echo '<%';?>= title_tag <?php echo '%>';?> class="pb-banner-title"><?php echo '<%';?>= title <?php echo '%>';?></<?php echo '<%';?>= title_tag <?php echo '%>';?>><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (description) { <?php echo '%>';?><div class="pb-banner-desc"><?php echo '<%';?>= description <?php echo '%>';?></div><?php echo '<%';?> } <?php echo '%>';?>
	<?php echo '<%';?> if (button_text) { <?php echo '%>';?><div><div class="pb-banner-button btn"><span><?php echo '<%';?>= button_text <?php echo '%>';?></span></div></div><?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php echo '<%';?> } <?php echo '%>';
echo '<%';?> if (banner_link) { <?php echo '%>';?>
</a>
<?php echo '<%';?> } <?php echo '%>';?>
</div>
<?php }
}
