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

{block name='footer-social'}
<span class="social-label">{l s='Social Media' d='Shop.Theme'}</span>
<ul id="social-links" class="social-links">
    {if isset($gdzSetting.social_facebook) && $gdzSetting.social_facebook != ''}
        <li class="facebook">
            <a class="social-icon social-facebook" href="{$gdzSetting.social_facebook}" target="_blank"><i class="icon-facebook-f" ></i></a>
        </li>
    {/if}
    {if isset($gdzSetting.social_twitter) && $gdzSetting.social_twitter != ''}
        <li class="twitter">
            <a class="social-icon social-twitter" href="{$gdzSetting.social_twitter}" target="_blank"><i class="icon-twitter" ></i></a>
        </li>
    {/if}
    {if isset($gdzSetting.social_gplus) && $gdzSetting.social_gplus != ''}
        <li class="google-plus">
            <a class="social-icon social-google" href="{$gdzSetting.social_gplus}" target="_blank"><i class="icon-google" ></i></a>
        </li>
    {/if}
    {if isset($gdzSetting.social_instagram) && $gdzSetting.social_instagram != ''}
        <li class="instagram">
            <a class="social-icon social-instagram" href="{$gdzSetting.social_instagram}" target="_blank"><i class="icon-instagram" ></i></a>
        </li>
    {/if}
    {if isset($gdzSetting.social_youtube) && $gdzSetting.social_youtube != ''}
        <li class="youtube">
            <a class="social-icon social-youtube" href="{$gdzSetting.social_youtube}" target="_blank"><i class="icon-youtube" ></i></a>
        </li>
    {/if}
    {if isset($gdzSetting.social_pinterest) && $gdzSetting.social_pinterest != ''}
        <li class="pinterest">
            <a class="social-icon social-pinterest" href="{$gdzSetting.social_pinterest}" target="_blank"><i class="icon-pinterest" ></i></a>
        </li>
    {/if}
    {if isset($gdzSetting.social_vimeo) && $gdzSetting.social_vimeo != ''}
        <li class="vimeo">
            <a class="social-icon social-vimeo" href="{$gdzSetting.social_vimeo}" target="_blank"><i class="icon-vimeo" ></i></a>
        </li>
    {/if}
    {if isset($gdzSetting.social_linkedin) && $gdzSetting.social_linkedin != ''}
        <li class="linkedin">
            <a class="social-icon social-linkedin" href="{$gdzSetting.social_linkedin}" target="_blank"><i class="icon-linkedin" ></i></a>
        </li>
    {/if}
</ul>
{/block}
