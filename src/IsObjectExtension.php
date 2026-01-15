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

use InvalidArgumentException;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class isObjectExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [new TwigFunction('is_object', [$this, 'twig_method_exists'], ['is_safe' => ['html']])];
    }

    /**
     * @param object      $entity
     *
     * @return bool
     */
    public function twig_method_exists($entity): bool
    {
        return is_object($entity);
    }
}