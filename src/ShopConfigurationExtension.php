<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * https://www.d3data.de
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

declare(strict_types=1);

namespace D3\OxidTwigExtensions;

use OxidEsales\Eshop\Core\Registry;
use OxidEsales\EshopCommunity\Core\Config;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ShopConfigurationExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction(
                'getShopConfiguration',
                [$this, 'getShopConfiguration'],
                ['is_safe' => ['html']]
            )
        ];
    }

    /**
     * @return Config
     */
    public function getShopConfiguration(): Config
    {
        return Registry::getConfig();
    }
}