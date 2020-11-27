{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div class="alert alert-custom alert-dismissible fade show">
    <div class="container">
        <h5 class="text-center text-white">{l s='FREE SHIPPING FOR ALL ORDERS OVER $50' d='Shop.jmstheme'}</h5>
        <button type="button" class="close" data-dismiss="alert">
            <i class="icon-close"></i>
        </button>
    </div>
</div>
{if ($gdzSetting.header_topbar == 1)}
    <div id="header-top" class="header-top {if $gdzSetting.topbar_class} {$gdzSetting.topbar_class}{/if}">
        <div class="container text-center">
            <div class="row align-items-center no-margin">
                <div class="layout-column col-auto">
                    <div class="row">
                        {widget_block name="ps_currencyselector"}
                            {include 'module:ps_currencyselector/ps_currencyselector-dropdown.tpl'}
                        {/widget_block}
                        {widget_block name="ps_languageselector"}
                            {include 'module:ps_languageselector/ps_languageselector-dropdown2.tpl'}
                        {/widget_block}
                    </div>
                </div>
                <div class="layout-column col header-right justify-content-end">
                    <ul class="top-menu d-flex align-items-center mb-0">
                        <li>
                            <a href="{l s='tel:0123 456 789' d='Shop.jmstheme'}"><i class="icon-phone"></i>{l s='Call: +0123 456 789' d='Shop.jmstheme'}</a>
                        </li>
                        {if ($gdzSetting.wishlist == 1)}
                        {/if}
                        <li>
                            <a href="index.php?id_cms=4&controller=cms">{l s='About Us' d='Shop.jmstheme'}</a>
                        </li>
                        <li>
                            <a href="index.php?controller=contact">{l s='Contact Us' d='Shop.jmstheme'}</a>
                        </li>
                        {if ($gdzSetting.customersignin == 1)}
                        <li>
                            {widget_block name="ps_customersignin"}
                                {include 'module:ps_customersignin/ps_customersignin-dropdown.tpl'}
                            {/widget_block}
                        </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{/if}
<div id="header-middle" class="header-middle{if $gdzSetting.header_sticky == 1} header-sticky{/if}{if ($gdzSetting.header_sticky == 1) && ($gdzSetting.header_sticky_effect != '')} {$gdzSetting.header_sticky_effect}{/if}">
    <div class="container">
        <div class="row align-items-center">
            <div class="layout-column col-auto header-left">
                {include file='_partials/headers/logo.tpl'}
            </div>
            <div class="layout-column">
                <div id="hor-menu" class="{if $gdzSetting.hormenu_class} {$gdzSetting.hormenu_class}{/if} {if $gdzSetting.hormenu_align} align-{$gdzSetting.hormenu_align}{/if}">
                    {widget name="gdz_megamenu" hook='HorMenu'}
                </div>
            </div>
            <div class="layout-column col-auto header-right">
                <div class="row align-items-center">
                    {if $gdzSetting.search}
                        {if $gdzSetting.search_box_type != 'dropdown'}
                            {widget_block name="gdz_ajaxsearch"}
                                {include 'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-button.tpl'}
                            {/widget_block}
                        {else}
                            {widget_block name="gdz_ajaxsearch"}
                                {include 'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-dropdown.tpl'}
                            {/widget_block}
                        {/if}
                    {/if}
                    {if ($gdzSetting.wishlist == 1)}
                        {include file='_partials/headers/wishlist.tpl'}
                    {/if}
                    {if ($gdzSetting.cart == 1)}
                        {widget_block name="ps_shoppingcart"}
                            {include 'module:ps_shoppingcart/ps_shoppingcart.tpl'}
                        {/widget_block}
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
{if $gdzSetting.search && $gdzSetting.search_box_type != 'dropdown'}
    {widget_block name="gdz_ajaxsearch"}
        {include 'module:gdz_ajaxsearch/views/templates/hook/gdz_ajaxsearch-fullscreen.tpl'}
    {/widget_block}
{/if}
