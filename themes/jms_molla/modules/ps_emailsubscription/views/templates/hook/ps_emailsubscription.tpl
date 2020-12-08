{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="email_subscription block block_newsletter">
	<h2 class="widget-title">{l s='Sign up for email & get 25% off' d='Modules.Emailsubscription.Shop'}</h2>
	<p class="widget-desc">{l s='Subcribe to get information about products and coupons' d='Modules.Emailsubscription.Shop'}</p>
	<div class="block-content">
	  	{if $msg}
	    	<div class="alert {if $nw_error}alert-error{else}alert-success{/if}">{$msg}</div>
	  	{/if}
	  	<form action="{$urls.pages.index}" method="post">
			<div class="input-group newsletter-input-group">
	    		<input type="text" name="email" value="{$value}" required class="form-control" placeholder="{l s='Your Email Address' d='Modules.Emailsubscription.Shop'}" />
	    		<button type="submit" class="btn btn-popup newsletter-button align-items-center" name="submitNewsletter">
					{l s='Go' d='Modules.Emailsubscription.Shop'}
				</button>
				<button class="btn btn-primary btn-submit" type="submit" id="newsletter-btn" name="submitNewsletter">
					<span>{l s='Subscribe' d='Modules.Emailsubscription.Shop'}</span>
					<i class="icon-long-arrow-right"></i>
				</button>
			</div>
	    	{hook h='displayGDPRConsent' id_module=$id_module}
	    	<input type="hidden" name="action" value="0" />
	  	</form>
	</div>
</div>

