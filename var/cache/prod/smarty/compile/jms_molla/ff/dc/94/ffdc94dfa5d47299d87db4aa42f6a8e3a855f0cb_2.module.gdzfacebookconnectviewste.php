<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-28 23:04:11
  from 'module:gdzfacebookconnectviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5feaaabbd2a805_33116949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffdc94dfa5d47299d87db4aa42f6a8e3a855f0cb' => 
    array (
      0 => 'module:gdzfacebookconnectviewste',
      1 => 1594026290,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feaaabbd2a805_33116949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10645196565feaaabbd03706_21818011', "page_content");
}
/* {block "page_content"} */
class Block_10645196565feaaabbd03706_21818011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_10645196565feaaabbd03706_21818011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['fb_on']->value) && $_smarty_tpl->tpl_vars['fb_on']->value) {?>
	<div id="fb-root"></div>
	<?php echo '<script'; ?>
>
		
			var redirect = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['JMSFB_REDIRECT']->value, ENT_QUOTES, 'UTF-8');?>
';
			window.fbAsyncInit = function() {
				FB.init({
					appId: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login_page']->value, ENT_QUOTES, 'UTF-8');?>
',
					scope: 'email, user_birthday',
					cookie: true,
					status: true,
					xfbml: true,
					version: 'v2.1'
				});
			};

			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

			function pfFbLogin() {
				FB.api('/me?fields=email,birthday,first_name,last_name,gender', function(response) {
					$.ajax({
						type: "POST",
						url: prestashop['urls']['base_url'] + "modules/gdz_facebookconnect/ajax_facebookConnect.php",
						data: {
							firstname: response.first_name,
							lastname: response.last_name,
							email: response.email,
							id: response.id,
							gender: response.gender,
							birthday: response.birthday
						},
						success:  function(data){

							if(redirect == "no_redirect")
								window.location.reload();

							if(redirect == "authentication_page")
								window.location.href = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
							if(redirect == "home_page")
								window.location.href = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
						}
					});
				});
			}

			function fb_login(){
				FB.login(function(response) {
					if (response.authResponse) {
						access_token = response.authResponse.accessToken;
						user_id = response.authResponse.userID;
						pfFbLogin();
					}
				},
				{
					scope: 'public_profile,email'
				});
			}

		
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block "page_content"} */
}