{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="btn-group blockcart cart-preview dropdown col-auto{if $gdzSetting.addtocart_type !=''} {$gdzSetting.addtocart_type}{/if}" id="cart_block" data-refresh-url="{$refresh_url}">
	<a href="#" class="cart-icon" data-toggle="dropdown" data-display="static" aria-expanded="false">
		<i class="icon-shopping-cart"></i>
		<span class="text">{l s='Cart' d='Shop.Theme.Actions'}</span>
		{if $gdzSetting.addtocart_type == 'circle-filled'}
			{if $cart.products_count > 0}<span class="circle-notify"></span>{/if}
		{else}
			<span class="ajax_cart_quantity">{$cart.products_count}</span>
		{/if}
		<span class="cart_block_total ajax_block_cart_total">{$cart.totals.total.value}</span>
	</a>
	<div class="dropdown-menu cart-dropdown shoppingcart-box{if $gdzSetting.cart_type =='sidebar'} shoppingcart-sidebar{/if}">
		<div class="cart-title">{l s='Shopping Cart' d='Shop.Theme.Actions'} ({$cart.products_count})</div>
		{if $cart.products_count == 0}
			<span class="ajax_cart_no_product">{l s='There is no product' d='Shop.Theme.Actions'}</span>
		{else}
			<ul class="list products cart_block_list">
				{foreach from=$cart.products item=product}
					<li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
				{/foreach}
			</ul>
		{/if}
		{if $cart.products_count != 0}
			<div class="billing-info">
				{if $gdzSetting.cart_subtotal == 1}
					{foreach from=$cart.subtotals item="subtotal"}
						{if $subtotal.label}
						<div class="{$subtotal.type} cart-prices-line">
							<span class="label">{$subtotal.label}</span>
							<span class="value">{$subtotal.value}</span>
						</div>
						{/if}
					{/foreach}
				{/if}
				{if $gdzSetting.cart_total == 1}
					<div class="cart-total cart-prices-line">
						<span class="label">{$cart.totals.total.label}</span>
						<span class="value">{$cart.totals.total.value}</span>
					</div>
				{/if}
			</div>
			<div class="cart-button">
				{if $gdzSetting.cart_links && 'cart'|in_array:$gdzSetting.cart_links}
					<a class="btn btn-primary" href="{$cart_url}" title="{l s='Proceed to checkout' d='Shop.Theme.Actions'}" rel="nofollow">
						{l s='View Cart' d='Shop.Theme.Actions'}
					</a>
				{/if}
				{if $gdzSetting.cart_links && 'checkout'|in_array:$gdzSetting.cart_links}
					<a href="{url entity=order}" class="btn btn-outline-primary-2" title="{l s='Checkout' d='Shop.Theme.Actions'}">
						{l s='Checkout' d='Shop.Theme.Actions'}
						<i class="icon-long-arrow-right"></i>
					</a>
				{/if}
			</div>
		{/if}
	</div>
</div>
