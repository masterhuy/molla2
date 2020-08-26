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

{if $nb_comments != 0 || $post_allowed}
    <div class="product-comments-additional-info">
        {if $nb_comments == 0}
            {if $post_allowed}
                <div class="d-flex align-items-center empty">
                    <div class="empty-stars"></div>
                    <button class="btn-default btn-comment post-product-comment">
                        {l s='Add your review' d='Modules.Productcomments.Shop'}
                    </button>
                </div>
            {/if}
        {else}
            {* {include file='module:productcomments/views/templates/hook/average-grade-stars.tpl' grade=$average_grade} *}
            <div class="additional-links">
                <a class="link-comment user-reviews" href="#product-comments-list-header">
                    {l s='Reviews' d='Modules.Productcomments.Shop'} ({$nb_comments})
                </a>
                {if $post_allowed}
                    <a class="link-comment post-product-comment" href="#product-comments-list-header">
                        {l s='Add your review' d='Modules.Productcomments.Shop'}
                    </a>
                {/if}
            </div>

            {* Rich snippet rating*}
            <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
                <meta itemprop="reviewCount" content="{$nb_comments}" />
                <meta itemprop="ratingValue" content="{$average_grade}" />
            </div>
        {/if}
    </div>
{/if}
