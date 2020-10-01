{*
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2020 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{extends file='page.tpl'}
{block name="page_content"}
	{capture name=path}{$post.title nofilter}{/capture}
	{if $post.link_video && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
		<div class="post-video">
			{$post.link_video nofilter}
		</div>
	{elseif $post.image && $gdz_blog_setting.GDZBLOG_SHOW_MEDIA}
		<div class="post-image">
			<img src="{$image_baseurl nofilter}{$post.image nofilter}" />
		</div>
	{/if}
	<div class="blog-post">
		{assign var=catparams value=['category_id' => $post.category_id, 'slug' => $post.category_alias]}	
			<ul class="post-meta">
				<li class="post-created">{$post.created|escape:'htmlall':'UTF-8'|date_format:"%B %e, %Y"}</li>
				{if $gdz_blog_setting.GDZBLOG_SHOW_VIEWS}
					<li class="post-views">{$post.views nofilter} <span>{l s='Views' mod='gdz_blog'}</span></li>		
				{/if}
				{if $gdz_blog_setting.GDZBLOG_SHOW_COMMENTS}
					<li class="post-comment-count">
						{$comments|@count nofilter}
						<span> {l s='Comments' mod='gdz_blog'}</span>
					</li>
				{/if}
			</ul>
			<h3 class="title-blog">{$post.title nofilter}</h3>
			{if $gdz_blog_setting.GDZBLOG_SHOW_CATEGORY}
				<div class="post-category">
					<span>{l s='Category' mod='gdz_blog'} :</span> 
					<a href="{gdz_blog::getPageLink('gdz_blog-category', $catparams) nofilter}">{$post.category_name nofilter}</a>
				</div>
			{/if}
			<div class="post-fulltext">
				{$post.fulltext nofilter}	
			</div>
		</div>
		{if $gdz_blog_setting.GDZBLOG_SHOW_SOCIAL_SHARING}
			<div class="social-sharing">
				{literal}
				<script type="text/javascript">var switchTo5x=true;</script>
				{/literal}
			{if $use_https}
				<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
			{else}
				<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			{/if}
				{literal}
					<script type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
				{/literal}
				<span class='st_sharethis_large' displayText='ShareThis'></span>
				{if $gdz_blog_setting.GDZBLOG_SHOW_FACEBOOK}
					<span class='st_facebook_large' displayText='Facebook'></span>
				{/if}
				{if $gdz_blog_setting.GDZBLOG_SHOW_TWITTER}
					<span class='st_twitter_large' displayText='Tweet'></span>
				{/if}
				{if $gdz_blog_setting.GDZBLOG_SHOW_GOOGLEPLUS}
					<span class='st_googleplus_large' displayText='Google +'></span>
				{/if}
				{if $gdz_blog_setting.GDZBLOG_SHOW_LINKEDIN}
					<span class='st_linkedin_large' displayText='LinkedIn'></span>
				{/if}
				{if $gdz_blog_setting.GDZBLOG_SHOW_PINTEREST}
					<span class='st_pinterest_large' displayText='Pinterest'></span>
				{/if}
				{if $gdz_blog_setting.GDZBLOG_SHOW_EMAIL}
					<span class='st_email_large' displayText='Email'></span>
				{/if}
			</div>
		{/if}
		{if $gdz_blog_setting.GDZBLOG_COMMENT_ENABLE}	
			<div id="comments">
		{if $gdz_blog_setting.GDZBLOG_FACEBOOK_COMMENT == 0}
			{if $msg == 1}<div class="success">{l s='Your comment submited' mod='gdz_blog'} ! {if $gdz_blog_setting.GDZBLOG_AUTO_APPROVE_COMMENT == 0} {l s='Please waiting approve from Admin' mod='gdz_blog'}.{/if}</div>{/if}
			{if $cerrors|@count gt 0}
				<ul>
				{foreach from=$cerrors item=cerror}
					<li class="error">{$cerror nofilter}</li>
				{/foreach}	
				</ul>
			{/if}
			<div id="accordion" class="panel-group">
				<div class="panel panel-default">
					<div class="comment-heading clearfix">
						<h5><a data-toggle="collapse" data-parent="#accordion" href="#post-comments">{$comments|@count nofilter} {l s='Comments' mod='gdz_blog'}</a></h5>
					</div>		
					<div id="post-comments" class="panel-collapse collapse show">
					{if $comments}
						{foreach from=$comments item=comment key = k}
							<div class="post-comment clearfix">
								<div class="post-comment-info">
									<img class="attachment-widget img-responsive" src="{$image_baseurl nofilter}user.png" />
									<div class="info">
										<h6>{$comment.customer_name nofilter}</h6>
										<span class="customer_site">{$comment.customer_site nofilter}</span>
										<span class="time_add">{$comment.time_add nofilter}</span>
										<p class="post-comment-content">{$comment.comment nofilter}</p>
									</div>
								</div>
							</div>
						{/foreach}	
					{/if}
					</div>
				</div>
			</div>
			{if $gdz_blog_setting.GDZBLOG_ALLOW_GUEST_COMMENT || (!$gdz_blog_setting.GDZBLOG_ALLOW_GUEST_COMMENT && $logged)}	
			<div class="commentForm">
				<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=gdz_blog&controller=post&post_id={$post.post_id nofilter}&action=submitComment">
					<div class="row">
						<div class="col-sm-12">
							<h4 class="heading">{l s='Leave A Reply' mod='gdz_blog'}</h4>
							<p class="h-info">{l s='Your email address will not be published. Required fields are marked' mod='gdz_blog'} *</p>
						</div>
					</div>
					<div class="form-group">
						<textarea id="comment" class="form-control" placeholder="Comment *" name="comment" rows="4" required></textarea>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input id="customer_name" placeholder="Name *" class="form-control" name="customer_name" type="text" value="{$customer.firstname}{$customer.lastname}" required />
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input id="comment_title" placeholder="Email *" class="form-control" name="email" type="text" value="{$customer.email}" required />
							</div>
						</div>
					</div>
					<div class="form-group">
						<input id="customer_site" class="form-control" placeholder="Website" name="customer_site" type="text" value=""/>
					</div>
					<div id="new_comment_form_footer">
						<input id="item_id_comment_send" name="post_id" type="hidden" value="{$post.post_id nofilter}" />
						<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
						<button id="submitComment" class="btn btn-outline-primary-2 text-uppercase" name="submitComment" type="submit">
							{l s='Post Comment' mod='gdz_blog'}
							<i class="icon-long-arrow-right"></i>
						</button>
					</div>
				</form>
				<script>
				$("#commentForm").validate({
				rules: {		
					customer_name: "required",		
					email: {
					required: true,
					email: true
					}
				}
				});
				</script>
			</div>
			{/if}
			{if !$gdz_blog_setting.GDZBLOG_ALLOW_GUEST_COMMENT && !$logged}
				{l s='Please Login to comment' mod='gdz_blog'}
			{/if}		
		{else}
			{include file="{$module_dir}comment_facebook.tpl"}		
		{/if}
		</div>
	{/if}
{/block}