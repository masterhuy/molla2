<?php
/* Smarty version 3.1.33, created on 2020-11-20 01:44:18
  from 'module:gdzblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fb765c23e1b98_77372108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb41abd78d3ddf7b79e2de99650bd226d7c107b' => 
    array (
      0 => 'module:gdzblogviewstemplatesfron',
      1 => 1601634466,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:modules/gdz_blog/views/templates/front/comment_facebook.tpl' => 1,
  ),
),false)) {
function content_5fb765c23e1b98_77372108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/gdz_blog/views/templates/front/post.tpl --><?php if (isset($_GET['page_layout']) && $_GET['page_layout'] != '') {?>
     <?php $_smarty_tpl->_assignInScope('page_layout', $_GET['page_layout']);
}
if ($_smarty_tpl->tpl_vars['page_layout']->value == 'no') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
} elseif ($_smarty_tpl->tpl_vars['page_layout']->value == 'right') {?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9277779505fb765c22f7594_77903164', 'content');
?>

<!-- end F:\xampp\htdocs\jms_molla/themes/jms_molla/modules/gdz_blog/views/templates/front/post.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_4342620695fb765c2345793_98019445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block "page_content"} */
class Block_10470105105fb765c236c895_21461922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\xampp\\htdocs\\jms_molla\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<div class="single-blog">
					<div class="blog-post">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && $_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_MEDIA']) {?>
							<div class="post-video">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8');?>

							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && $_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_MEDIA']) {?>
							<div class="post-thumb">
								<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Blog','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
" />
							</div>
						<?php }?>
						<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
						<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>
						<ul class="post-meta">
							<li class="post-created"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'htmlall','UTF-8' )),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</li>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_VIEWS']) {?>
								<li class="post-views"><?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Views','mod'=>'gdz_blog'),$_smarty_tpl ) );?>
</span></li>		
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_COMMENTS']) {?>
								<li class="post-comment-count">
									<?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>

									<span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'gdz_blog'),$_smarty_tpl ) );?>
</span>
								</li>
							<?php }?>
						</ul>
						<h1 class="title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
						<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_CATEGORY']) {?>
							<div class="post-category">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category','mod'=>'gdz_blog'),$_smarty_tpl ) );?>
 :</span> 
								<a href="<?php echo gdz_blog::getPageLink('gdz_blog-category',$_smarty_tpl->tpl_vars['catparams']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['category_name'];?>
</a>
							</div>
						<?php }?>
						<div class="post-fulltext">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['fulltext'];?>

						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_SOCIAL_SHARING']) {?>
						<div class="social-sharing">
							
								<?php echo '<script'; ?>
 type="text/javascript">var switchTo5x=true;<?php echo '</script'; ?>
>
								<?php echo '<script'; ?>
 type="text/javascript" src="http://w.sharethis.com/button/buttons.js"><?php echo '</script'; ?>
>
								<?php echo '<script'; ?>
 type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});<?php echo '</script'; ?>
>
							
							<span class='st_sharethis_large' displayText='ShareThis'></span>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_FACEBOOK']) {?>
								<span class='st_facebook_large' displayText='Facebook'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_TWITTER']) {?>
								<span class='st_twitter_large' displayText='Tweet'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_GOOGLEPLUS']) {?>
								<span class='st_googleplus_large' displayText='Google +'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_LINKEDIN']) {?>
								<span class='st_linkedin_large' displayText='LinkedIn'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_PINTEREST']) {?>
								<span class='st_pinterest_large' displayText='Pinterest'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_SHOW_EMAIL']) {?>
								<span class='st_email_large' displayText='Email'></span>
							<?php }?>
						</div>
					<?php }?>
				</div>
					<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_COMMENT_ENABLE']) {?>
						<div id="comments">
							<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_FACEBOOK_COMMENT'] == 0) {?>
								<?php if ($_smarty_tpl->tpl_vars['msg']->value == 1) {?>
									<div class="success">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment submited','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 ! <?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_AUTO_APPROVE_COMMENT'] == 0) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please waiting approve from Admin','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
.<?php }?>
									</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['cerrors']->value) > 0) {?>
									<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cerrors']->value, 'cerror');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cerror']->value) {
?>
										<li class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cerror']->value, ENT_QUOTES, 'UTF-8');?>
</li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
									<div id="accordion" class="panel-group">
										<div class="panels">
											<div class="comment-heading">
												<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</h3>
											</div>
											<div id="post-comments">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['comment']->value) {
?>
													<div class="post-comment clearfix">
														<div class="post-comment-info">
															<img class="attachment-widget img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
user.png" />
															<div class="info">
																<h6><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
</h6>
																<span class="customer_site"><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_site'];?>
</span>
																<span class="time_add"><?php echo $_smarty_tpl->tpl_vars['comment']->value['time_add'];?>
</span>
																<p class="post-comment-content"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p>
															</div>
														</div>
													</div>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
										</div>
									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_ALLOW_GUEST_COMMENT'] || (!$_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_ALLOW_GUEST_COMMENT'] && $_smarty_tpl->tpl_vars['logged']->value)) {?>
								<div class="commentForm">
									<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=gdz_blog&controller=post&post_id=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['post_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&action=submitComment">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave A Reply','mod'=>'gdz_blog'),$_smarty_tpl ) );?>
</h4>
												<p class="h-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address will not be published. Required fields are marked','mod'=>'gdz_blog'),$_smarty_tpl ) );?>
 *</p>
											</div>
										</div>
										<div class="form-group">
											<textarea id="comment" placeholder="Your message" class="form-control" name="comment" rows="3" required></textarea>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<input id="customer_name" placeholder="Name *" class="form-control" name="customer_name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
" required />
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<input id="comment_title" placeholder="Email *" class="form-control" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
" required />
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<input id="customer_site" placeholder="Website" class="form-control" name="customer_site" type="text" value=""/>
												</div>
											</div>
										</div>
										<div id="new_comment_form_footer">
											<input id="item_id_comment_send" name="post_id" type="hidden" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['post_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
											<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
											<button id="submitComment" class="btn btn-outline-primary-2 text-uppercase" name="submitComment" type="submit">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Post Comment','mod'=>'gdz_blog'),$_smarty_tpl ) );?>

												<i class="icon-long-arrow-right"></i>
											</button>
										</div>
									</form>
								</div>
								<?php }?>
								<?php if (!$_smarty_tpl->tpl_vars['gdz_blog_setting']->value['GDZBLOG_ALLOW_GUEST_COMMENT'] && !$_smarty_tpl->tpl_vars['logged']->value) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Login to comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

								<?php }?>
							<?php } else { ?>
								<?php $_smarty_tpl->_subTemplateRender("file:modules/gdz_blog/views/templates/front/comment_facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php }?>
						</div>
					<?php }?>
				<?php
}
}
/* {/block "page_content"} */
/* {block 'page_content_container'} */
class Block_15265192985fb765c231e699_89798218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4342620695fb765c2345793_98019445', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10470105105fb765c236c895_21461922', "page_content", $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_7542269985fb765c23baa95_87980848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9277779505fb765c22f7594_77903164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9277779505fb765c22f7594_77903164',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15265192985fb765c231e699_89798218',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4342620695fb765c2345793_98019445',
  ),
  'page_content' => 
  array (
    0 => 'Block_10470105105fb765c236c895_21461922',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7542269985fb765c23baa95_87980848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15265192985fb765c231e699_89798218', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7542269985fb765c23baa95_87980848', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
