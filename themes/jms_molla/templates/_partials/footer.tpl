{**
 * 2007-2019 PrestaShop
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
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{if isset($smarty.get.footer_layout) && $smarty.get.footer_layout !=''}
    {assign var='footer_layout' value=$smarty.get.footer_layout}
{else}
    {assign var='footer_layout' value=$gdzSetting.footer_layout}
{/if}
{block name="footer"}
    <footer id="footer" class="footer-{$footer_layout} {if $gdzSetting.footer_class} {$gdzSetting.footer_class}{/if}">
        {if $footer_layout == 1}
            {include file='_partials/footers/footer-1.tpl'}
        {elseif $footer_layout == 2}
            {include file='_partials/footers/footer-2.tpl'}
        {elseif $footer_layout == 3}
            {include file='_partials/footers/footer-3.tpl'}
        {elseif $footer_layout == 4}
            {include file='_partials/footers/footer-4.tpl'}
        {elseif $footer_layout == 5}
            {include file='_partials/footers/footer-5.tpl'}
        {elseif $footer_layout == 6}
            {include file='_partials/footers/footer-6.tpl'}
        {elseif $footer_layout == 7}
            {include file='_partials/footers/footer-7.tpl'}
        {elseif $footer_layout == 8}
            {include file='_partials/footers/footer-8.tpl'}
        {elseif $footer_layout == 9}
            {include file='_partials/footers/footer-9.tpl'}
        {elseif $footer_layout == 10}
            {include file='_partials/footers/footer-10.tpl'}
        {elseif $footer_layout == 11}
            {include file='_partials/footers/footer-11.tpl'}
        {elseif $footer_layout == 12}
            {include file='_partials/footers/footer-12.tpl'}
        {elseif $footer_layout == 13}
            {include file='_partials/footers/footer-13.tpl'}
        {elseif $footer_layout == 14}
            {include file='_partials/footers/footer-14.tpl'}
        {/if}
    </footer>
{/block}
